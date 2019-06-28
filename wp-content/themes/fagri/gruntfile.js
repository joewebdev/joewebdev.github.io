module.exports = function (grunt) {

    grunt.initConfig({
        sass: {
            dist: {                            // Target
                options: {                       // Target options
                    style: 'compressed',
                    sourcemap: 'file'
                },
                files: {                         // Dictionary of files
                    'style.css': 'assets/sass/style.scss'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', ['sass']);

};