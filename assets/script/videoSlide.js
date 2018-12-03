
var navIndex = 1;
var manIndex = 4;
var appIndex = 7;
var keyIndex = 10;
var misIndex = 13;

function showSlides(inc, min, max, sect) {
    var i = min-1;
    var slides = document.getElementsByClassName("mySlides");
    var next = sect+inc;

    if(next > max){//loop back to beginning
        next=min;
    }
    if(next < min){//loop back to ending
        next=max;
    }
    sect = next;

    //sets all videos in set to display:none
    for (i; i < max-1; i++) {
        slides[i].style.display = "none";
    }

    slides[next-1].style.display = "block";
}