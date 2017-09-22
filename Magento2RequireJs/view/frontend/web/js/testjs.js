define([
    "jquery",
    "jquery/ui"
    ], function ($) {
    'use strict';
    console.log('test.js file is loaded');
    $.widget('mage.testjs', {
        _create: function() {
            var self = this;
            console.log(self.options);
        }
    });
    return $.mage.testjs;
});