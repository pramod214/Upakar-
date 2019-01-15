// dropdown on click
$(document).ready(function () {
    var screen = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screen < 768) {
        $('.dropdown-toggle').removeClass('disabled');
    } else {
        $('.dropdown-toggle').addClass('disabled');
    }
});
