/**
 * Created by Gabriela Katz on 07/03/2016.
 */
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});