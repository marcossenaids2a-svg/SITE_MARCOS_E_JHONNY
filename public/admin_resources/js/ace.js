$(document).ready(function () {
    'use strict';

    var editor = ace.edit("aceExample");

    editor.setTheme("ace/theme/chaos");
    editor.getSession().setMode("ace/mode/javascript");

    $("#aceExample").css("font-size", "1rem");
});