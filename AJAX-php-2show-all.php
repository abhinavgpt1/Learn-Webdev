<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajax 2 show all</title>
</head>

<body>
    <center>
        <table border="3" rules="all">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Image</th>
            </tr>
            <?php
            include_once("connection.php");
            $isConnected=mysqli_error($dbcon);
            if($isConnected==""){
            $query="select * from profileform";
            $records=mysqli_query($dbcon,$query);
                while($row=mysqli_fetch_array($records)){
                    echo "<tr><td>".$row["name"]."<td>".$row["email"]."<td>".$row["pwd"]."<td>".$row["mobile"];
                    echo "<td><img src=uploads/".$row["pic"] ." height=80 width=80>";//space here is important
//                    echo "<td>".$row["pic"];
                }
            }
            else
                echo $isConnected;
            ?>
        </table>
    </center>
</body>

</html>
