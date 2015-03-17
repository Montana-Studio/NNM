module.exports = function(grunt){
	require('jit-grunt')(grunt);
	require('time-grunt')(grunt);
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			deve: {
				options: {
					style: 'compressed'
				},
				files: {
					'app/wp-content/themes/nnm/css/main.css': 'prod/sass/main.scss'
				},
			},
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'app/wp-content/themes/nnm/css/main.css': 'prod/sass/**/*.scss'
				},
			},
		},
		
		jshint:{
			all:[
				'Gruntfile.js','prod/js/scripts.js'
			]
		},

		uglify:{
			beauty:{
				options:{
					beautify:true
				},
				files:{
			        'app/wp-content/themes/nnm/js/output.min.js': ['prod/js/scripts.js']
			    }
			},
			all:{
				files:{
			        'app/wp-content/themes/nnm/js/output.min.js': ['prod/js/scripts.js']
			    }
			}
		},

		imagemin: {
			dynamic: {
		      files: [{
		        expand: true,
		        optimizationLevel: 3,                
		        cwd: 'app/wp-content/uploads',
		        src: ['**/*.{png,jpg,gif}'],
		        dest: 'app/wp-content/uploads2'
		      }]
		    }
		},

		concurrent: {
	        target: {
	        	tasks:['sass:dist','jshint','uglify:all'],
		    	options: {
	                logConcurrentOutput: true
	            },
		    }
	    },
		parallel:{
			grunt: {
				options: {
				  grunt: true
				},
				tasks: ['sass:dist', 'uglify', 'jshint']
			},
		},
		watch:{
			configFiles:{
				files:['prod/sass/**/*.scss','prod/js/**/*.js','app/wp-content/themes/nnm/**/*.php'],
				options:{
					livereload: true,
				},
			},
			sass:{
				files:['prod/sass/**/*.scss'],
				tasks: ['sass:deve'],
				options:{
					livereload:true,
				},
			},
			javascript:{
				files:['prod/js/**/*.js','Gruntfile.js'],
				tasks:['jshint','uglify:beauty'],
				options:{
					livereload:true,
				},
			},
		},
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-concurrent');
	grunt.loadNpmTasks('grunt-parallel');

	grunt.registerTask('dev', ['parallel','watch']);
	grunt.registerTask('uploads', ['concurrent','sass:dist','uglify:all']);
	grunt.registerTask('default', ['concurrent','sass:dist','uglify:all','imagemin']);

};