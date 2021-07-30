$(document).ready(function() {
    /*--------------------------
      preloader
    ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut(3000, function() { $(this).remove(); });
    });

    /*skuter */

    document.getElementById('skuter').addEventListener('ended', myHandler, false);

    setTimeout(() => { console.log("World!"); }, 10000);

    function myHandler(e) {
        console.log('ended');

        setTimeout(function() {
            document.getElementById('skuter').play();
        }, 3000);
    }


});