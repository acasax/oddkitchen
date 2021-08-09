$(document).ready(function() {
    /*--------------------------
      preloader
    ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut(3000, function() { $(this).remove(); });
    });

    /*skuter */
   

 
        setTimeout(function() {
            document.getElementById('skuter').playbackRate = 2.0;
            document.getElementById('skuter').play();
        }, 5000);


});