<?php
header("Refresh:  300;url='REDIRECTION URI'");
$username=$_SESSION['username'];
include 'database.php';
if(!$con){
die('not connected');}
$s="select * from post ORDER BY id desc";
$t=mysqli_query($con,$s);
$n=mysqli_num_rows($t);
$f="select * from following where username='$username'";
$fo=mysqli_query($con,$f);
$fn=mysqli_num_rows($fo);
$fol=mysqli_fetch_array($fo);

$fg="select * from following where followingname='$username'";
$fgc=mysqli_query($con,$fg);
$fgn=mysqli_num_rows($fgc);

$follower=$fgn;
$following=$fn;

$p="select * from post where username='$username'";
$pc=mysqli_query($con,$p);
$pn=mysqli_num_rows($pc);

$sf="select * from registration";
$sfc=mysqli_query($con,$sf);
$sfn=mysqli_num_rows($sfc);
?>
