module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {   
            dist: {
                src: [
                    'js/libs/*.js',
                    'js/*.js'
                ],
                dest: 'js/build/production.js',
            }
        },

        uglify: {
            build: {
                src: 'js/build/production.js',
                dest: 'js/build/production.min.js'
            }
        },

        compass: {
            dist: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    require: 'susy',
                    outputStyle: 'compressed'
                }
            }
        },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/build/'
                }]
            }
        },

        svgmin: {        

            options: {                                plugins: [
                  { removeViewBox: false },
                  { removeUselessStrokeAndFill: false }
                ]
            },

            dist: {                                         
                files: {                                    
                    // I am a tard and can't figure out file paths so am 
                    // just listing the files since there aren't many of them
                   'images/build/site/svg/we-fish.svg': 'images/site/svg/we-fish.svg',
                   'images/build/site/svg/you-fish.svg': 'images/site/svg/you-fish.svg',
                   'images/build/site/svg/me-fish.svg': 'images/site/svg/me-fish.svg',
                   'images/build/site/svg/deliver-fish.svg': 'images/site/svg/deliver-fish.svg',
                }

            }
        },

        watch: {
            scripts: {
                files: ['js/*.js', '**/*.scss'],
                tasks: ['concat', 'uglify', 'compass'],
                options: {
                    spawn: false,
                },
            },

            css: {
                files: ['css/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false,
                }
            }
        }

    

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify' );
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-svgmin');
    
    grunt.registerTask('default', ['svgmin']);

    

};