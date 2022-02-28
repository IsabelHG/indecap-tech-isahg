let upArrow = document.getElementById("arrow-up");
let downArrow = document.getElementById("arrow");

let playButton = document.getElementById("button-play");
let myVideo = document.getElementById("video1"); 
let playIcon = document.getElementById("icon-play");

let socialLeft = document.getElementById("social-left");

window.addEventListener('scroll', function(){

  if (window.scrollY > 100) {
    upArrow.style.visibility = "visible";
  } else {
    upArrow.style.visibility = "hidden";
  }

})

upArrow.onclick = function() {

  window.scroll(0,0);
  upArrow.style.visibility = "hidden";

}

function playPause() { 
  if (myVideo.paused) 
    myVideo.play();
} 

playButton.onclick = function() {
  
  playIcon.style.display = "none";

}

myVideo.onclick = function() {

  playIcon.style.display = "block";
  myVideo.pause();

}

downArrow.onclick = function() {

  window.scroll(0,750);

}

window.addEventListener('scroll', function(){

  if (window.scrollY > 1450) {
    socialLeft.style.visibility = "hidden";
  } else {
    socialLeft.style.visibility = "visible";
  }

})