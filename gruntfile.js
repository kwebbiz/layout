module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
    	    css: {
                src: 
                [
            	    'src/css/app.css',
//            	    'vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
            	    'vendors/bower_components/animate.css/animate.min.css',
            	    'vendors/bower_components/sweetalert/dist/sweetalert.css',
            	    'vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css',
            	    'vendors/bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.css',
            	    'vendors/bower_components/flickity/dist/flickity.css',
            	    'vendors/bower_components/photobox/photobox/photobox.css',
            	],
                dest: 'stylesheets/default/design.css',
            },
    	    
            js: {
                // src: ['js/inc/**/*.js'],
                src: [
            	//    'js/inc/**/*.js',
            	    'vendors/bower_components/jquery/dist/jquery.min.js',
            	    'vendors/bower_components/bootstrap/dist/js/bootstrap.min.js',
            	    
            	    'vendors/bower_components/smartmenus/dist/jquery.smartmenus.js',
            	    'vendors/bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.js',

            	    'vendors/bower_components/flickity/dist/flickity.pkgd.js',
            	    'vendors/bower_components/photobox/photobox/jquery.photobox.js',
            	    
            	    'vendors/bower_components/Waves/dist/waves.min.js',
            	    'vendors/bower_components/sweetalert/dist/sweetalert.min.js',
//            	    'vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
            	    'vendors/bootstrap-growl/bootstrap-growl.min.js',
            	    'vendors/jQuery-Equal-Height-Columns/jquery.equalheightcolumns.js',


            	    
            	],
                dest: 'scripts/default/default.js',
            },
        },
        uglify: {
            options: {
                mangle: false
            },
            js: {
                files: {
                    'scripts/default/default.min.js': ['scripts/default/default.js']
                }
            }
        },
        less: {
            development: {
                options: {
                    paths: ["css"]
                },
                files: {
                    "src/css/app.css": "src/less/app.less",
                },
                cleancss: true
            },

        },
        csssplit: {
            your_target: {
                src: 
                [
            	    'css/inc/app.css',
            	    'vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
            	    'vendors/bower_components/animate.css/animate.min.css',
            	    'vendors/bower_components/sweetalert/dist/sweetalert.css',
            	    'vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css',
            	],
                dest: 'css/inc/app.css',
                options: {
                    maxSelectors: 4000,
                    suffix: '_'
                }
            },
        },
        cssmin: {
            options: {
                keepSpecialComments: 0
            },
            target: {
                files: {
                    'stylesheets/default/design.min.css': ['stylesheets/default/design.css'],
                }
            }
        },
        copy: {
            main: {
                expand: true,
                cwd: '',
                src: [
                    "**/*",
                    '!**/node_modules/**',
                    '!**/vendors/**',
                    '!**/src/**',
                    '!**/.idea/**',
                    '!**/*.text**',
                    '!**/*.txt**',
                    '!**/.DS_Store**',
                    '!**/less/**',
                    '!**/js/inc/**',
                    '!**/js/app.js**',
                    '!**/package.json**',
                    '!**/gruntfile.js**',
                    '!**/css/inc/**'
                ],
                dest: 'dist/'
            },
        },
        clean: ['**/.idea', '**/.DS_Store', 'dist'],
        watch: {
            less: {
                files: ['src/less/**/*.less'], // which files to watch
                tasks: ['less', 'concat', 'cssmin']
            },
//            js: {
//                files: ['js/inc/**/*.js'], // which files to watch
//                tasks: ['concat', 'uglify']
//            }

        }
    });

    // Load the plugin that provides the "less" task.
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-csssplit');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');

    grunt.registerTask('dist', ['clean', 'less', 'concat', 'cssmin', 'copy']);
    grunt.registerTask('compile', ['less', 'concat', 'cssmin', 'uglify']);

};