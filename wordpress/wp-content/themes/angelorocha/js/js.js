jQuery(function ($) {
    $('.social-links ul li a').tooltip();
});

jQuery(function ($) {
    $('#portfolio a').tooltip({placement: 'top'});
});

jQuery(function ($) {
    $('.navbar a').click(function (e) {
        let linkHref = $(this).attr("href");
        let idElement = linkHref.substr(linkHref.indexOf("#"));
        $('html, body').animate({
            scrollTop: $(idElement).offset().top
        }, 1000);
        return false;
    });
});