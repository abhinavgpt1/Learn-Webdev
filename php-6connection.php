<?php
$dbcon=mysqli_connect("localhost","root","","genesis");
$msg=mysqli_connect_error();
if($msg=="")
    echo "Connected Successfully!!!";
else
    echo $msg;
?>