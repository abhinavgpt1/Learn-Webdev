.php=html+css+js+php

<html>

<body>
    <h2>Welcome</h2>
    <?php
        //Scriptlet
    echo "Bale Bale...<br>";
    echo "<h2>Hello Programmers</h2>";
	   $x=2    ;
	echo    "<br>X=".$x;
    echo "<br><br>===================<br>";
    $a=90;
    echo gettype($a)."<br>";
    $a=90.00;
    echo gettype($a)."<br>";
    $a=90.89;
    echo gettype($a)."<br>";
    $a="str";
    echo gettype($a)."<br>";
    $a=false;
    echo gettype($a)."<br>";
    $a=array();
    echo gettype($a)."<br>";
    ?>

</body>

</html>
