let upArrow = document.getElementById("arrow-up");
let downArrow = document.getElementById("arrow");

let playButton = document.getElementById("button-play");
let myVideo = document.getElementById("video1"); 
let playIcon = document.getElementById("icon-play");

let animationArrow = document.getElementById("arrowAnimated");
let animationWindow = document.getElementById("principal-animation");
let bodyOverflow = document.getElementById("body-program");
let msgAnimation = document.getElementById("animated-msg");

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

  if (bodyOverflow.style.overflow == 'visible'){
    if (window.scrollY > 1450){
      socialLeft.style.visibility = "hidden";
    }else{
      socialLeft.style.visibility = "visible";
      }
  }else{
    socialLeft.style.visibility = "hidden";
  }

})

animationArrow.onclick = function() {
  
  animationWindow.style.height = 0;
  bodyOverflow.style.overflow = 'visible';
  animationWindow.style.padding = 0;
  msgAnimation.style.opacity = 1;
  msgAnimation.style.paddingLeft = '0';

}

window.addEventListener('load', function(){

  window.scroll(0,0);
  socialLeft.style.visibility = "hidden";

})