module.exports = function (grunt) {

    grunt.initConfig({
        uncss:{
            dist: {
                files: {
                    'dist/css/tidy.css': ['web-development/index.html']
                },
                options: {
                    htmlroot: 'C:/xampp/htdocs/joewebdev',
                    stylesheets:['theme/assets/css/**/*.css']
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
