<?php
session_start();
session_destroy();
header('location:http://qtsindite.herokuapp.com/login.php');
?>