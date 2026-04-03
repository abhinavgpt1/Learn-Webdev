<?php
include_once("connection.php");
$name=$_GET["name"];
$query="select * from profileform where name='$name'";
$table=mysqli_query($dbcon,$query);

$ary=array();
while($row=mysqli_fetch_array($table)){
    $ary[]=$row;
}
echo json_encode($ary);
?>