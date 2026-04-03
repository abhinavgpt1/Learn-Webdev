<?php
$a=$_GET["txtA"];
$b=$_GET["txtB"];
$btn=$_GET["btn"];
if($a=="" || $b=="")
    echo "lol";
else{
    $result=0;
    if($btn=="Sum"){
        echo "Addition:";
        $result=$a+$b;}
    if($btn=="Multi"){
        echo "Multiplication:";
        $result=$a*$b;}
    if($btn=="Subtract"){
        echo "Subtraction:";
        $result=$a-$b;}
    if($btn=="Divide"){
        if($b!=0){
        echo "Division:";       
        $result=$a/$b;}
        else
            echo "Division by zero not allowed";
    }
    echo $result;
}
?>
