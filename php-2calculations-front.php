<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Basic Calc</title>
</head>

<body>
    <center>
        <form action="php-2calculations-process.php">
            <table>
                <tr>
                    <td>Enter A:
                        <input type="text" name="txtA">
                    </td>
                </tr>
                <tr>
                    <td>Enter B:
                        <input type="text" name="txtB">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Sum" name="btn">
                        <!--                        avoid giving different names to both, because if you do, then error comes as soon as you try to GET["<name>"]-->
                        <input type="submit" value="Multi" name="btn">
                        <br>
                        <input type="submit" value="Subtract" name="btn">
                        <input type="submit" value="Divide" name="btn">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<!--try giving different names to submit btns
-->
