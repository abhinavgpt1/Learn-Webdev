<?php
//$id=$_GET["txtID"];//will not work if method="post in .html file
//$pass=$_GET["txtPass"];//will not work if method="post in .html file
$id=$_POST["txtID"];
$pass=$_POST["txtPass"];
echo "ID = ".$id;
echo "<br>Password = ".$pass;

//$picName=$_POST["mypic"]["name"]; WROGN
$picName=$_FILES["mypic"]["name"];
$tempPicName=$_FILES["mypic"]["tmp_name"];
echo "<br>".$picName;
echo "<br>".$tempPicName;

$size=$_FILES["mypic"]["size"];
$type=$_FILES["mypic"]["type"];
echo "<br>Size = ".$size;
echo "<br> Type = ".$type;

//uploading
move_uploaded_file($tempPicName,"uploads/".$picName);
echo "<br><br>\"Upload Successfull!!!\"";
?>