module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
	  pkg: grunt.file.readJSON('package.json'),
	  concat: {
		options: {
		  stripBanners: true,
		  banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
			'<%= grunt.template.today("yyyy-mm-dd") %> */',
		},
		dist: {
		  src: ['assets/js/*.min.js'],
		  dest: 'assets/dist/built.min.js',
		},
		extras: {
		  src: ['assets/css/*.min.css'],
		  dest: 'assets/dist/built.min.css',
		},
	  },
	});

	// Load the plugin that provides the "concat" task. 
	grunt.loadNpmTasks('grunt-contrib-concat');	
	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-uglify');

	// Default task(s).
	grunt.registerTask('default', ['concat','uglify']);

};