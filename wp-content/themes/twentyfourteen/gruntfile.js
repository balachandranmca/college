'use strict';
module.exports = function (grunt) {
    grunt.initConfig({
        dirs: {
            js: 'js',
        },
        watch: {
            js: {
                files: [
					'js/source/**/*.js',
                ],
                tasks: ['clean', 'uglify']
            },
            css: {
				files: [
					'css/sass/*/*.scss',
					'css/sass/*.scss'
				],
				tasks: ['clean', 'sass', 'concat', 'cssmin']
			}
		},

		// uglify to concat, minify, and make source maps		
		uglify: {
			dist: {
				options: {
					sourceMap: true,
					mangle: false
				},
				files: {
					'js/app.min.js': [
						'<%= dirs.js %>/vendor/**.js',
						'<%= dirs.js %>/source/main.js',
						'<%= dirs.js %>/source/custom.js'
					]
				}
			}
		},

		sass: {
			dist: {
				options: {
					lineNumbers: true,
					style: 'expanded',
					// this is the key bit!
					sourcemap: true
				},
				files: {
					// 'css/editor-style.css' : 'css/sass/editor-style.scss',
					'css/style.css': 'css/sass/style.scss'
				}
			}
		},

		concat: {
			dist: {
				files: {
					'css/style.css': ['css/vendor/*.css', 'css/style.css']
				}
			}
		},

		cssmin: {
			dist: {
				files: {
					'css/style.min.css': ['css/style.css']
				}
			}
		},

		clean: {
			dist: {
				src: [
					'css/style.css',
					// 'js/app.min.js',
				]
			}
		},
	});
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-wp-i18n');
	grunt.loadNpmTasks('grunt-cssjanus');
	grunt.loadNpmTasks('grunt-exec');
	grunt.loadNpmTasks('grunt-potomo');
	grunt.loadNpmTasks('grunt-devtools');
	// register task
	grunt.registerTask('default', ['watch']);

	grunt.registerTask('build', ['clean', 'uglify', 'sass', 'concat', 'cssmin']);
};