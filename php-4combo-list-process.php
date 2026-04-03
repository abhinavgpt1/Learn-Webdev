<?php
$city=$_GET["combocity"];
$state=$_GET["liststate"];
$country=$_GET["listcoun"];
echo "City = ".$city;
echo "<br>State = ".$state;
//echo "<br>Country = ".$country;
$str="";
for($i=0;$i<count($country);$i++)
    $str.=$country[$i].", ";
$str=substr($str,0,strlen($str)-2);
echo "<br>Selected Countries = ".$str;
?>