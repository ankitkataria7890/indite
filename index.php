<?php
session_start();
if(!isset($_SESSION['username']))
header('Location: http://qtsindite.herokuapp.com/about.php');

include 'php/index_fetch.php';

?>
<!doctype html>
<html>
<head>
<title>qts/indite</title>
<script type="text/javascript" src="script/refresh.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libbs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+And+White+Picture">
 

</head>
<body>
<p id="header" style="font-family: 'Black And White Picture', sans serif;"> <b>Let's THROW</b>
  <span style="float:right;margin-bottom:0px;margin-top:70px;margin-right:30px;"><button style="border:0px solid  white;font-size:15px; border-radius:2px;padding:5px;color:white;background:rgba(198,204,212,0.3);cursor:pointer;"
 onclick="footer();" ondblclick="footergo();"><h6>Bottom</h6></button></span></p>
<div  style="height:80px;">
<ul class="index" style="width:100%">
<li onclick="backhome();" ><a class="active" >Home</a></li>
<li class="dropdown">
     <a  href="javascript:void(0)" class="dropbtn">Category</a>
       <div class="dropdown-content">
          <a href="write.php">indite</a>
          <a href="voice.html">voice</a>
          <a href="art.html">illustration</a>
           <a href="photo.html">photography</a>
       </div>
    </li>
<li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Event</a>
       <div class="dropdown-content">
          <a href="link1.html">link1</a>
          <a href="#">link1</a>
          <a href="#">link1</a>
       </div>
    </li>
<li><a  href="#challenge">Challenge</a></li>

<li  onclick="openForm();" style="padding:10px 10px 0 10px; float:right;cursor:pointer;  class="right" ">Account
<div class="form-popup" id="myForm" style="cursor:context-menu;">
  <div  class="form-container">
    <img src="avatar.png" alt="Avatar" style="align:center" class="avatar"> <span style="float:right;"><a href="account.php"><b>View</b></a></span><br>
    <h3><b><br>username</b> : <?php echo $username; ?> <br>
        <b>Follower</b> &nbsp; : <?php echo $follower; ?><br>
    <b>Following</b> : <?php echo $following; ?><br>
      <b>Post</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $pn; ?></h3>
     <b><a href="logout.php">LOGOUT</a></b></h3>
  </div>
</div>
</li>
<li  style="float:right">

<form autocomplete="off" action="usersaccount.php" method="post">
  <div class="autocomplete" style="width:230px;">
    <input id="myInput" type="text" name="myCountry" placeholder="friends..">
  <input type="submit" value="search"> 
 </div>

</form>

</li>

</ul>
<button class="form-closeup" id="close" style="cursor:pointer" onclick="document.getElementById('myForm').style.display='none';document.getElementById('close').style.display='none';"><b>Close</b></button>
<form id="users" action="usersaccount.php" method="post"></form>
</div>
<div class="row">
<div class="column middle">
<div class="grid-container">
<?php 
include 'php/index_content.php';
?>
 </div>
</div>
</div>

<div class="footer" >
<ul style="list-style:none">
<li> <a href="aboutus.php">About Us</a></li>
<li> <a href="faqs.php">FAQs</a></li>
<li> <a href="user_blog.php">Blog</a></li>
<li style="float:right"> <a href="contact.php">Contact</a></li>
<li style="float:right"> <a href="suggestion.php">Suggestion</a></li>
</ul>
<br>
<p style="text-align:center; font-size:10px;">Disclaimer: Legal information is not legal advice , <a href="disclaimer.php"style="color:rgb(153, 204, 255)">Read the disclaimer.</a></p>
<p style="text-align:center; font-size:12px; color:rgba(225,225,225,0.8);"> Copyright c 2020 QTS XYZ, Inc. All rights reserverd. <a href="termsofuse.php" style="color:rgb(153, 204, 255)"> Terms of Use </a>|<a href="privacypolicy.php" style="color:rgb(153, 204, 255)"> Privacy Policy - REVISED</a></p>
</div>
<script>
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
  
 
</script>
<script type="text/javascript" src="index_autosearch.js"></script>
<script>
  var countries = [
<?php 
 $o='"';
$d=',';
while($sff=mysqli_fetch_array($sfc)){
echo $o.$sff['username'].$o.$d;
}?>"xyzabc"];
autocomplete(document.getElementById("myInput"), countries);
</script>


</body>
</html>
