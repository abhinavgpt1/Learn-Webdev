<?php
$sum=0;
$str="";
if(isset($_GET["chkJava"]))
{
    $sum+=$_GET["chkJava"];
    $str=$str."Java,";
}
if(isset($_GET["chkWebd"]))
{
    $sum+=$_GET["chkWebd"];
    $str.="Webd";
}

//if(endsWith($str,",")){
//    $str=substr($str,0,strlen($str)-1);
//    $str=substr($str,0,-1);
//    
//}

echo $str."<br>";
echo "Total Fees= $sum";
?>