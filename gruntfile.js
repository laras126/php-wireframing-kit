module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
          options: {
            jshintrc: '.jshintrc'
          },
          all: [
            'Gruntfile.js',
            'assets/js/*.js',
            '!assets/js/build/production.min.js'
          ]
        },

        concat: {   
            dist: {
                src: [
                    'assets/js/libs/*.js',
                    'assets/js/*.js',
                    'assets/js/_*.js'
                ],
                dest: 'assets/js/build/production.js',
            }
        },

        uglify: {
            build: {
                src: 'assets/js/build/production.js',
                dest: 'assets/js/build/production.min.js'
            }
        },

        sass: {
          dist: {
            options: {
              style: 'compressed',
              compass: true,
              // Source maps are available, but require Sass 3.3.0 to be installed
              // https://github.com/gruntassets/js/grunt-contrib-sass#sourcemap
              sourcemap: false,
              require: 'breakpoint-slicer'
            },
            files: {
                'assets/css/main.min.css': [
                'assets/scss/main.scss'
              ]
            }
          }
        },

        svgstore: {
          options: {
            prefix : 'shape-', // This will prefix each <g> ID
          },
          default : {
              files: {
                'assets/img/processed/svg-defs.svg': ['assets/img/svgs/*.svg'],
              }
            }
        },

        livereload: {
            // Browser live reloading
            // https://github.com/gruntassets/js/grunt-contrib-watch#live-reloading
            options: {
              livereload: true
            },
            files: [
              'assets/css/main.min.css',
              'assets/js/main.min.js',
              'templates/*.php',
              '*.php'
            ]
          },

        watch: {
            scripts: {
                files: ['assets/js/*.js', 'assets/**/*.scss'],
                tasks: ['concat', 'uglify', 'sass', 'svgstore'],
                options: {
                    spawn: false,
                },
            },

            sass: {
                files: ['assets/css/*.scss'],
                files: ['assets/css/*/*.scss'],
                files: ['assets/css/*/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false,
                }
            },

            livereload: {
		        // Browser live reloading
		        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
		        options: {
		          livereload: true
		        },
		        files: [
		          'assets/css/main.min.css',
		          'assets/js/build/production.min.js',
		          'include/*.php',
		          '*.php'
		        ]
		    },

            svgstore: {
                files: [
                  'assets/img/svgs/*.svg'
                ]
              }
        }

    

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify' );
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-svgstore');
    
    // Register tasks
      grunt.registerTask('default', [
        'sass',
        'uglify'
      ]);
      grunt.registerTask('dev', [
        'watch'
      ]);

};