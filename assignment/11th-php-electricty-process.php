<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bill</title>
    <style>
        #mytable {
            height: 200px;
            width: 300px;
            background-color: palegreen;
            /*            line-height: 35px;*/
            border: 2px black solid;
            box-shadow: 0px 0px 30px 10px gray;
            margin-top: 70px;
        }

        .myrows {
            font-size: 20px;
        }

        .myclass {
            /*            background-color: ;*/
            color: forestgreen;
            text-align: center;
        }

    </style>
</head>

<body>
    <?php
    $unit=$_GET["txtUnits"];
//    $rate=$_GET["unitID"];//.............................................................
    $rate=10;
    $bill=$unit*$rate;
    $fanbill=0;
    $acbill=0;
    $discount=0;
    if(isset($_GET["rad"])){
        $discount=$bill*$_GET["rad"]/100;
    }
    if(isset($_GET["chkFan"])){
        if(isset($_GET["qtyFan"]))
        {
            $fanbill=$_GET["qtyFan"]*$_GET["chkFan"];
            $bill+=$fanbill;
        }
        else{
//            .............................................................................
        }
    }
    if(isset($_GET["chkAc"])){
        if(isset($_GET["qtyFan"]))
        {
            $acbill=$_GET["qtyAc"]*$_GET["chkAc"];
            $bill+=$acbill;
        }
        else{
//            .............................................................................
        }   
    }
?>

    <center>
        <table id="mytable" class="myrows" cellspacing="10" cellpadding="5" style="border-top:10px black solid;">
            <tr>
                <td colspan="2">
                    <h1 class="myclass">Electricity Bill</h1>
                </td>
            </tr>
            <tr>
                <td>Fan Bill</td>
                <td>
                    <?php echo "Rs.".$fanbill;
                    ?>
                </td>
            </tr>
            <tr>
                <td>AC Bill</td>
                <td>
                    <?php echo "Rs.".$acbill;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Total Bill</td>
                <td>
                    <?php echo "Rs.".$bill;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Discount</td>
                <td>
                    <?php echo "Rs.".$discount;
                    ?>
                </td>
            </tr>
            <tr bgcolor="darkgrey" style="text-align:right;border:2px black dashed;">
                <td>NET Bill</td>
                <td style="text-align:right;border:2px black dashed;">
                    <?php echo "Rs.".($bill-$discount);
                    ?>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
