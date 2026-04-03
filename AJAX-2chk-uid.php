<?php
include_once("connection.php");
$isConnected=mysqli_error($dbcon);

if($isConnected=="")
{
    $name=$_GET["name"];
    $query="select * from profileform where name='$name'";
    $record=mysqli_query($dbcon,$query);
    
    if(mysqli_num_rows($record)==0)
        echo "Username valid";
    else
        echo "Username not available";
}
else
    echo $isConnected;
?>