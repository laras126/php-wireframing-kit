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
            '!assets/js/build/scripts.js'
          ]
        },

        concat: {   
            dist: {
                src: [
                    'assets/js/libs/*.js',
                    'assets/js/*.js',
                    'assets/js/_*.js'
                ],
                dest: 'assets/js/build/scripts.js',
            }
        },

        sass: {
          dist: {
            options: {
              style: 'expanded',
              compass: true,
              // Source maps are available, but require Sass 3.3.0 to be installed
              // https://github.com/gruntassets/js/grunt-contrib-sass#sourcemap
              sourcemap: false,
              require: 'breakpoint-slicer'
            },
            files: {
                'assets/css/main.css': [
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
              'assets/scss/*/*.scss',
              'assets/js/main.js',
              '*.php'
            ]
          },

        watch: {
            scripts: {
                files: ['assets/js/*.js', 'assets/**/*.scss', 'Gruntfile.js'],
                // Add 'svgstore' here when the include issue is figured out
                // http://css-tricks.com/svg-sprites-use-better-icon-fonts/
                tasks: ['concat', 'sass'],
                options: {
                    spawn: false,
                },
            },

            sass: {
                files: ['assets/css/*.scss'],
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
		          'assets/js/build/scripts.min.js',
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
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-svgstore');
    
    // Register tasks
      grunt.registerTask('default', [
        'sass',
        'concat'
      ]);
      grunt.registerTask('dev', [
        'watch'
      ]);

};