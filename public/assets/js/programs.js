let msgAnimation = document.getElementById("animated-msg");
let upArrow = document.getElementById("arrow-up");

window.addEventListener('load', function(){

    window.scroll(0,0);
    msgAnimation.style.opacity = 1;
    msgAnimation.style.paddingLeft = '10px';
  
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
