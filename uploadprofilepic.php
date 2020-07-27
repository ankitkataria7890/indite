<?php 
$host='localhost';
$dbuser='root';
$dbpassword='';
$dbname='image';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(isset($_POST)){
    $name = $_FILES['file']['name']; 
    $size = $_FILES['file']['size']; 
    $type = $_FILES['file']['type']; 
    $tmp_name = $_FILES['file']['tmp_name']; 

    if(isset($name)){ 
      if(!empty($name)){ 
         $target_path = basename( $_FILES['file']['name']);
         if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
             echo "The file ".  basename( $_FILES['file']['name'])." has been uploaded";

             $im = file_get_contents($_FILES['file']['name']);
             $imdata = base64_encode($im); 
		//echo $imdata;  
		$src = 'data: '.mime_content_type($_FILES['file']['name']).';base64,'.$imdata;

$sql = "INSERT INTO img (name,data) VALUES ('$name','$src')"; 
$abc=mysqli_query($con,$sql);

if($abc){
echo "success";}
 //var_dump($im);
             unlink($_FILES['file']['name']);
        }
else
{ 
            echo 'Please choose a File'; 
        } 
    }
}
}  
header('Location: http://qtsindite.herokuapp.com/database.php');
       
?>