jQuery(document).ready(function ($) {
    'use strict';
    // $('.fontawesome-icon-select').iconpicker({
    //     hideOnSelect: true
    // });

    $('body').on('focus', 'input.fontawesome-icon-select', function () {
        $('.fontawesome-icon-select').iconpicker({
            hideOnSelect: true
        });
    });
});
