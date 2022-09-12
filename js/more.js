"use strict";

function readMore() {
    let dots = document.getElementById("dots");
    let more = document.getElementById("more");
    let btn = document.getElementById("btn2");

    let dots2 = document.getElementById("dots2");
    let more2 = document.getElementById("more2");
    let btn2 = document.getElementById("btn3");

    if(dots.style.display === "none") {
        dots.style.display="inline";
        btn.innerHTML="More";
        more.style.display="none";
    } else {
        dots.style.display="none";
        btn.innerHTML="Hide";
        more.style.display="inline";
    }

    if(dots2.style.display === "none") {
        dots2.style.display="inline";
        btn2.innerHTML="More";
        more2.style.display="none";
    } else {
        dots2.style.display="none";
        btn2.innerHTML="Hide";
        more2.style.display="inline";
    }
}