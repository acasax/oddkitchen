$(document).ready(function() {
    /*--------------------------
      preloader
    ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut(3000, function() { $(this).remove(); });
    });

    /*skuter 
    setTimeout(function() {
        document.getElementById('skuter').playbackRate = 2.0;
        document.getElementById('skuter').play();
        document.getElementById('skuter1').playbackRate = 2.0;
        document.getElementById('skuter1').play();
    }, 5000);*/

});

var result = detect.parse(navigator.userAgent);

var pcVideo = document.getElementById("skuter");
var mobVideo = document.getElementById("skuter1");

if (result.device.family === "iPhone" || result.device.family === "iPad" || result.device.family === "iPod") {
    mobVideo.innerHTML = '<img class="skuter" src="assets/img/Locations/1024x320.gif" alt="" width="100%"></img>';
    pcVideo.innerHTML = '<img class="skuter" src="assets/img/Locations/1920x300.gif" alt="" width="100%"></img>';
    console.log(result.os.family);
} else {
    pcVideo.innerHTML = '<video class="skuter" playsinline muted width="100%" loop="true">' +
        '<source src="assets/img/Locations/Untitled-10012_1_VP9_2pass.webm"  type="video/webm" codecs="vp8, vorbis">' +
        '</video>';
    mobVideo.innerHTML = '<video class="skuter" playsinline muted width="100%" loop="true">' +
        '<source src="assets/img/Locations/1024x300_VP9_2pass.webm" type="video/webm"  codecs="vp8, vorbis">' +
        '</video>';
    console.log(result.os.family);
}