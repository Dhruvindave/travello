

  
let btn = document.getElementById("bbtn");
window.onscroll = function(){"scrollFunction"};

function scrollFunction(){

  if(document.body.scrollTop > 20 || document.documentElement.scrollTop>20){
    btn.style.display = none;
  }
  else{
    btn.style.displaye = block;
  }
}

function topfunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop=0;
}



// sticky nav bar
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}







let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}