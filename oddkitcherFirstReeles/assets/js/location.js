$(document).ready(function() {
    /*--------------------------
      preloader
    ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut(3000, function() { $(this).remove(); });
    });

    //skuter 
    setTimeout(function() {
        document.getElementById('skuter2').playbackRate = 2.0;
        document.getElementById('skuter2').play();
        document.getElementById('skuter3').playbackRate = 2.0;
        document.getElementById('skuter3').play();
    }, 5000);

});

var result = detect.parse(navigator.userAgent);

var pcVideo = document.getElementById("skuter");
var mobVideo = document.getElementById("skuter1");

if (result.device.family === "iPhone" || result.device.family === "iPad" || result.device.family === "iPod") {
    mobVideo.innerHTML = '<img class="skuter" src="assets/img/Locations/1024x320_loop.gif" alt="" width="100%"></img>';
    pcVideo.innerHTML = '<img class="skuter" src="assets/img/Locations/1920x300_loop.gif" alt="" width="100%"></img>';

} else {
    if (pcVideo != null) {
        pcVideo.innerHTML = '<video class="skuter" id="skuter2"  playsinline muted width="100%" loop="true">' +
            '<source src="assets/img/Locations/Untitled-10012_1_VP9_2pass.webm"  type="video/webm" codecs="vp8, vorbis">' +
            '</video>';
    }
    if (mobVideo != null) {
        mobVideo.innerHTML = '<video class="skuter" id="skuter3"  playsinline muted width="100%" loop="true">' +
            '<source src="assets/img/Locations/1024x300_VP9_2pass.webm" type="video/webm"  codecs="vp8, vorbis">' +
            '</video>';
    }
}