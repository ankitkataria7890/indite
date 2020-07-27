<!doctype html>
<html>
<head></head>
<body>
<form action='uploadprofilepic.php' method="post" enctype="multipart/form-data">
<input type="file" name="file" onchange="bs64(this)"> 
<input type="submit" value="Upload"> 
</form>
<script>
function bs64(e){
var file = e.files[0];
var reader= new FileReader();
reader.onloadend = function()
{
console.log('Result' , reader.result)
return reader.result;
}
reader.readAsDataURL(file);
}
</script>



</body>
</html>
