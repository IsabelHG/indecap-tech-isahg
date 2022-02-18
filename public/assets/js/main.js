window.addEventListener('scroll', function(){

  if (window.scrollY > 100) {
    document.getElementById("arrow-up").style.visibility = "visible";
  } else {
    document.getElementById("arrow-up").style.visibility = "hidden";
  }

})

document.getElementById("arrow-up").onclick = function() {

  window.scroll(0,0);
  document.getElementById("arrow-up").style.visibility = "hidden";

}

let myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play();
} 

document.getElementById("button-play").onclick = function() {
  
  document.getElementById("icon-play").style.display = "none";

}

myVideo.onclick = function() {

  document.getElementById("icon-play").style.display = "block";
  myVideo.pause();

}

document.getElementById("arrow").onclick = function() {

  window.scroll(0,750);

}