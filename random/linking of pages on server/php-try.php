<?php
    $name=$_POST["txt"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="../../js/jquery-1.8.2.min.js"></script>
    <title>PHP TRY</title>
    <script>
        $(document).ready(function() {
            $("#passBox").blur(function() {
                if ($(this).val() == "")
                    alert("Fill it");
            });
            
        });

    </script>
</head>

<body>

    <center>
        <form action="php-try2.php" method="post">
            Input: <input type="text" name="txt2" id="txtBox"  value="<?php echo $name;?>">
            <br>
            Password: <input type="password" name="pass" id="passBox" maxlength="8">
            <br>
            <br>
            <input type="submit">
        </form>
    </center>
</body>

</html>
