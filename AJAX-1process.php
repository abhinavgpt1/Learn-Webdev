<?php
$email=$_GET["email"];
$pwd=$_GET["pwd"];
$query="insert into userss values('$email','$pwd')";
include_once("connection.php");
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
    echo "Sign up Successfull!!!";
else
    echo $msg;
?>