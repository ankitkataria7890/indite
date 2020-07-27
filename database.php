<?php
$host='localhost';
$dbuser='root';
$dbpassword='';
$dbname='image';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
$r = "SELECT * FROM img "; 
$rc=mysqli_query($con,$r);
$row = mysqli_fetch_array($rc);
$src=$row['data'];
?>


<!doctype html>
<html>
<head></head>
<body>
<?php echo '<img src="'.$src.'">'; ?>
</body>
</html>