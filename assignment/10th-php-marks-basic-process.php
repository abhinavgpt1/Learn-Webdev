
<?php
$cpp=$_GET["txtCpp"];
$java=$_GET["txtJava"];
$webd=$_GET["txtWebd"];
$btn=$_GET["btn"];
if($cpp=="" || $java=="" || $webd=="")
    echo "fill complete details";
else{
    if($btn=="Submit"){
        $total=$cpp+$java+$webd;
        
        echo "Total=".$total."<br>Average=".($total/3)."<br>Percentage=".($total/300*100)."%";
        $max=($cpp>$java?$cpp:$java);
        $min=$cpp+$java-$max;
        $max=($max>$webd?$max:$webd);
        $min=($min<$webd?$min:$webd);
        echo "<br>Max=".$max."<br>Min=".$min;
    }
}
?>