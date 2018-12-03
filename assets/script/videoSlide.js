
var navIndex = 1;
var manIndex = 4;
var appIndex = 8;
var keyIndex = 11;
var misIndex = 14;

function showSlides(inc, min, max, sect) {
    var i = min-1;
    var slides = document.getElementsByClassName("mySlides");
    var next = window[sect]+inc;
    console.log("sect: " + window[sect] + " " + "next: " + next);

    if(next > max){//loop back to beginning
        next=min;
    }
    if(next < min){//loop back to ending
        next=max;
    }
    window[sect] = next;

    //sets all videos in set to display:none
    for (i; i < max; i++) {
        slides[i].style.display = "none";
    }
 console.log("sect: " + window[sect] + " " + "next: " + next);
    slides[next-1].style.display = "block";
   // console.log("sect: " + sect + " " + "next: " + next);
}