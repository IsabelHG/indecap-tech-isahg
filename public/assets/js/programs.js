let animationArrow = document.getElementById("arrowAnimated");
let animationWindow = document.getElementById("principal-animation");
let bodyOverflow = document.getElementById("body-program");
let welcomeAnimation = document.getElementById("welcome-msg");

animationArrow.onclick = function() {
  
    animationWindow.style.height = 0;
    bodyOverflow.style.overflow = 'visible';
    animationWindow.style.padding = 0;
    welcomeAnimation.style.opacity = 1;
    welcomeAnimation.style.paddingLeft = '10px';
  
}

window.addEventListener('load', function(){

    window.scroll(0,0);
  
})