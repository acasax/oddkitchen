$(document).ready(function() {
    /*--------------------------
      preloader
    ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut(3000, function() { $(this).remove(); });
    });



});