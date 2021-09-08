var result = detect.parse(navigator.userAgent);

var pcVideo = document.getElementById("videoPC");
var mobVideo = document.getElementById("videoMOB");

if (result.device.family === "iPhone" || result.device.family === "iPad" || result.device.family === "iPod" || result.os.family === "iOS" || result.device.family === "Mac") {
    pcVideo.innerHTML = '<img src="assets/img/home/1920x624novi.gif" alt="" width="100%"></img>';
    mobVideo.innerHTML = '<img src="assets/img/home/1024x515.gif" alt="" width="100%"></img>';
    console.log(result.os.family);
} else {
    pcVideo.innerHTML = '<video autoplay muted playsinline width="100%">' +
        '<source src="assets/img/GOTOVO_VP9_2pass.webm" type="video/webm">' +
        '</video>';
    mobVideo.innerHTML = '<video autoplay muted playsinline width="100%">' +
        '<source src="assets/img/home/5124r_VP9_2pass.webm">' +
        '</video>';
    console.log(result.os.family);
}