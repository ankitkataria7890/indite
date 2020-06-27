window.onscroll = function() {index(),left()};
var navbar = document.getElementsByClassName("index")[0];
var sticky = navbar.offsetTop;

function index() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


<!--var leftbar = document.getElementById("left");
var leftsticky = leftbar.offsetTop;

function left() {
  if (window.pageYOffset >= leftsticky) {
    leftbar.classList.add("leftsticky")
  } else {
    leftbar.classList.remove("leftsticky");
  }
}
-->
function backhome() {
document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
}

function openForm() {
  document.getElementById("myForm").style.display = "block";

  document.getElementById("close").style.display = "block";
}

function footer(){
  var x=document.getElementsByClassName("footer")[0];
 x.style.display="block";
}

function footergo(){
  document.getElementsByClassName("footer")[0].style.display = "none";
}
function myFunction() {
  var x = document.getElementsByClassName("index")[0];
  if (x.className === "index") {
    x.className += " responsive";
  } else {
    x.className = "index";
  }
}
