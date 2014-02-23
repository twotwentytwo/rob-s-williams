module.exports = function (grunt) {
    /*
        Grunt installation:
        -------------------
            npm install -g grunt-cli

        Project Dependencies:
        ---------------------
            npm install
    */

    grunt.initConfig({
        staticPath: 'scripts/',
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            files: [
                'Gruntfile.js',
                '/scripts/modules/**/*.js'
            ],
            options: {
                // curly:   true,
                // eqeqeq:  true,
                // immed:   true,
                // latedef: true,
                // newcap:  true,
                // noarg:   true,
                // sub:     true,
                // undef:   true,
                // boss:    true,
                // eqnull:  true,
                // browser: true,

                globals: {
                    // AMD
                    module:     true,
                    require:    true,
                    requirejs:  true,
                    define:     true,

                    // Environments
                    console:    true,

                    // General Purpose Libraries
                    $:          true,
                    jQuery:     true,

                    // Testing
                    test:    true,
                    ok:      true,
                    equal:   true,
                    notEqual: true,
                    strictEqual: true,
                    notStrictEqual: true,
                    deepEqual: true,
                    notDeepEqual: true
                }
            }
        },

        requirejs: {
            options: {
                baseUrl: 'scripts/modules', 
                dir: 'scripts/minified',
                skipDirOptimize : true,
                optimizeCss: false,
                modules: [
                    { name: 'bootstrap' }
                ],
                paths: {
                    'jquery-1.9': 'empty:',
                    'bump-3': 'empty:',
                    'plugins/favourite': 'empty:',
                    'personalisation/favourite': 'empty:'
                }
            },
            dev: {
                options: {
                    optimize: 'uglify'
                }
            },
            dist: {
                options: {
                    optimize: 'uglify'
                }
            }
        },

        compass: {
            options: {
                bundleExec: true,
                config: 'config.rb'
            },
            dev: {
                options: {
                    environment: 'development'
                }
            },
            dist: {
                options: {
                    environment: 'production',
                    force: true
                }
            }
        },

        // Run: `grunt watch` from command line for this section to take effect
        watch: {
            options: {
              nospawn: true,
              livereload: true
            },
            scripts: {
                files: [
                    'scripts/modules/*.js'
                ],
                tasks: ['requirejs:dev', 'jshint']
            },
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['compass:dev']
            }
        }

    });

    // Load NPM Tasks
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-requirejs');
    // grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-compass');


    // Default Task
    //grunt.registerTask('default', ['compass:dev', 'requirejs:dev', 'jshint']);
    grunt.registerTask('default', ['compass:dev', 'requirejs:dev', 'jshint']);

    // Unit Testing Task
    // grunt.registerTask('test', ['qunit']);

    // CI Task
    //grunt.registerTask('ci', ['compass:dist','requirejs:dist', 'jshint']);
};
