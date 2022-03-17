let upArrow = document.getElementById("arrow-up");
let downArrow = document.getElementById("arrow");

let playButton = document.getElementById("button-play");
let myVideo = document.getElementById("video1"); 
let playIcon = document.getElementById("icon-play");

let animationArrow = document.getElementById("arrowAnimated");
let animationWindow = document.getElementById("principal-animation");
let bodyOverflow = document.getElementById("body-program");
let msgAnimation = document.getElementById("animated-msg");

window.addEventListener('scroll',function(){
  let titleAnimated = document.getElementById("title-animated");
  let positionText = titleAnimated.getBoundingClientRect().top;
  let windowHeight = window.innerHeight/1;

  if(positionText < windowHeight){
    titleAnimated.style.opacity = '1';
    titleAnimated.style.height = '108px';
  }
})

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

  let socialLeft = document.getElementById("social-left");
  let socialFooter = document.getElementById("social-footer");
  let positionSocialFoot = socialFooter.getBoundingClientRect().top;
  let windowHeight = window.innerHeight;

  if (bodyOverflow.style.overflow == 'visible'){
    if (windowHeight > positionSocialFoot){
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

})