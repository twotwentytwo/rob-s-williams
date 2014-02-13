module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    staticPath: 'scripts',
    jshint: {
      files: ['<%=staticPath%>/modules/**/*.js'],
      options: {
        browser: true, 
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
    }
  });
  
  // Load JSHint
  grunt.loadNpmTasks('grunt-contrib-jshint');

  // Only linting for now.
  grunt.registerTask('default', 'jshint');

  // Travis CI task.
  grunt.registerTask('ci', 'default');
};
