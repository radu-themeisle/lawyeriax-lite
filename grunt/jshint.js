/* jshint node:true */
// https://github.com/gruntjs/grunt-contrib-jshint

module.exports = {
    options:{
        jshintrc:true,
        reporterOutput:'<%= paths.logs %>jslogs.log',
    },
    all: [
        '<%= files.js %>',
        '!inc/customizer-repeater/js/fontawesome-iconpicker.js',
        '!inc/customizer-repeater/js/iconpicker-control.js',
        '!Gruntfile.js'
    ]

};