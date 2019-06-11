module.exports = function (grunt) {

    grunt.initConfig({
        uncss:{
            dist: {
                files: {
                    'dist/css/tidy.css': ['index.html']
                },
                options: {
                    htmlroot: './',
                    ignoreSheets: [/fonts.googleapis/],
                }
            }
        },
        watch: {
            files: ['<%= jshint.files %>'],
            tasks: ['jshint']
        }
    });

    grunt.loadNpmTasks('grunt-uncss');

    grunt.registerTask('default', ['jshint']);
    grunt.registerTask('css', ['uncss']);

};
