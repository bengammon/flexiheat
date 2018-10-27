module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // We configure our Sass task here
        watch: {
            files: '**/*.scss',
            tasks: ['sass', 'autoprefixer', 'cssmin']
        },
        sass: {
            dist: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'style.css': 'sass/style.scss'
                }
            }
        },
        autoprefixer:{
            dist:{
                files:{
                    'style.css':'style.css'
                }
            }
        },
        cssmin: {
            dist: {
                files: {
                   'style.min.css': ['style.css']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default',['watch']);
};