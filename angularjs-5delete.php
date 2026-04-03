<?php
include_once("connection.php");
$email=$_GET["email"];
$query="delete from profileform where email='$email'";

//1st way
//$msg=mysqli_query($dbcon,$query);
//if($msg==true)
//    echo "Deleted 1 record";
//else
//    $msg;


//2nd way
mysqli_query($dbcon,$query);
$count=mysqli_affected_rows($dbcon);

echo $count." Records Deleted";	
?>