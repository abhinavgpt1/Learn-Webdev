<?php
    include_once("php-6connection.php");
    $name=$_POST["txtName"];
    $email=$_POST["txtEmail"];
    $password=$_POST["txtPass"];
    $mobile=$_POST["txtMob"];
    $orgName=$_FILES["profilePic"]["name"];
    $tmpName=$_FILES["profilePic"]["tmp_name"];
    move_uploaded_file($tmpName,"uploads/".$orgName);
    
$query="insert into profileform values('$name','$email','$password','$mobile','$orgName')";

mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
    echo "Pic uploaded successfully!!!";
else
    echo $msg;
?>
