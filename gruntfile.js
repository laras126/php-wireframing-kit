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
                dest: 'build/js/production.js',
            }
        },

        uglify: {
            build: {
                src: 'build/js/production.js',
                dest: 'build/js/production.min.js'
            }
        },

        compass: {
            dist: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    outputStyle: 'compressed'
                }
            }
        },

        watch: {
            scripts: {
                files: ['js/*.js', '**/*.scss'],
                tasks: ['concat', 'uglify', 'compass'],
                options: {
                    spawn: false,
                }
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
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    
    grunt.registerTask('default', ['compass', 'uglify', 'concat']);

    

};