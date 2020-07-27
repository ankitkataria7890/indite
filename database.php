<?php
$host='localhost';
$dbuser='root';
$dbpassword='';
$dbname='image';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
die('Not Connected to Server');
}
else{
$r = "SELECT * FROM img "; 
$rc=mysqli_query($con,$r);
if($rc){
echo "hii";}
$row = mysqli_fetch_array($rc);
$src=$row['data'];
echo $src;
}
?>


<!doctype html>
<html>
<head></head>
<body>
<?php echo '<img src="'.$src.'">'; ?>
</body>
</html>
