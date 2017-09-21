define([
    "jquery",
    "logger",
    "jquery/ui"
    ], function ($, logger) {
    "use strict";
    logger.log('test.js file is loaded');
    $.widget('testjs', {
        _create: function() {
            var self = this;
            logger.log(self.options);
        }
    });
    return $.test;
});