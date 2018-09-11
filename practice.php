<?php

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$path= "resume/";

if (isset($name)) {

if (empty($name))
{
echo "Please choose a file";
}
else
{
if (move_uploaded_file($tmp_name, $path . $name)) {
echo 'Uploaded!';
}

?>

<html>
<body>
<form action="" method='post' enctype="multipart/form-data">
<input type="file" name="file"/><br><br>
<input type="submit" value="Upload"/>
</form>
</body>
</html>