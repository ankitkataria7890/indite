<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login_signup.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<p style=" padding=0px;margin:0px; font-size:30px;color:black;">
<img src="gallery/logo.jpg" width="120px" height="120px" alt="logo" style="background:transparent;">

<span style=" float:right;padding=60px; "><button class="button button1" onclick="goBack()"><i class="material-icons" style="font-size:50px; color:black; opacity:0.4;">clear</i></button></span></a></p>

<div class="container">

  <form action="" method="post">
    <div class="row">
      <div style="text-align:center; font-size:40px; opacity:1;">Log In</div>
<br>
<div style="font-size:15px ;opacity:0.5"> New to QTs? <span ><a style="color:rgb(51, 187, 255); text-decoration:none;" href="signu.php">Sign Up</a></span>
</div>
<br> <br>
   <!--  
 <div class=vl></div> 
   -->
        <div class="col">
    
        <input style="border-bottom:0.5px ridge rgb(96,96,96)" type="text" name="username" placeholder="Username" required >
        <input style="border-bottom:0.5px ridge rgb(96,96,96)"  type="password" name="password" placeholder="Password" required>
     
<br> <div id="login" style="margin-left:55px;"> 
<!--
<input  type="checkbox" name="rem">
<label  for="rem"> Remember me</label>
-->
  <span> <a class="forgot" href="forgetpassword.php">Forgot password</a></span></div>
 <br> 
<br><br>
        <input  id="logbutton"  type="submit" name="validate" value="Login">

      </div>
      
    
      <!--
 <div class="right">
       <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
<br><br>
        <a  class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
       
        <a  class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>     
    -->
</div>
     
  </form>
</div>
<br><br>
<p style="font-size:11px; text-align:center; opacity:0.5;" >  * By logging in, you agree to our  <a style="color:rgb(51, 187, 255); text-decoration:none; opacity:1;" href="termsofuse.php">Terms of Use </a>and to receive<br> QTs emails & updates and acknowledge that you read our<br><a style="color:rgb(51, 187, 255);opacity:1; text-decoration:none;" href="privacypolicy.php"> Privacy Policy.</a>
</p>
<script>
function goBack() {
  window.history.back();
}
</script>
<?php
if(isset($_POST['validate'])){
include 'php/validate.php';
}

?>
</body>
</html>
