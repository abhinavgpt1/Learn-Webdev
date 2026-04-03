<?php
include_once("connection.php");
$isConnected=mysqli_error($dbcon);
if($isConnected==""){

    $btn=$_POST["btn"];
    if($btn=="Submit")
        doSubmit($dbcon);
    elseif($btn=="Update")
        doUpdate($dbcon);
}
else
    echo $isConnected;
function doSubmit($dbcon){    
    $name=$_POST["txtName"];
    $pass=$_POST["txtPass"];
    $email=$_POST["txtEmail"];
    $mob=$_POST["txtMob"];
    $orgName=$_FILES["profilePic"]["name"];
    $tmpName=$_FILES["profilePic"]["tmp_name"];
    
    $query="insert into profileform values('$name','$email','$pass','$mob','$orgName')";
    
    $check=mysqli_query($dbcon,$query);
        if($check==true)
        {   
            echo "Added successfully!!!";
            move_uploaded_file($tmpName,"uploads/".$orgName);
        }
        else
            echo $check."lol";
    }
function doUpdate($dbcon){
    $name=$_POST["txtName"];
    $pass=$_POST["txtPass"];
    $email=$_POST["txtEmail"];
    $mob=$_POST["txtMob"];
    $orgName=$_FILES["profilePic"]["name"];
    $tmpName=$_FILES["profilePic"]["tmp_name"];
    
//    METHOD 3...ONE OF THE BEST...but here it works only when you click fetch button
    $jasoos=$_POST["jasoos"];
    
    if($orgName=="")
        $fileName=$jasoos;
    else
        $fileName=$orgName;
    $query="update profileform set pwd='$pass', email='$email', mobile='$mob', pic='$fileName' where name='$name'";
    $msg=mysqli_query($dbcon,$query);
    if($msg==true){
        echo "Updated Successfully!!!";
       if($fileName==$orgName)  
        move_uploaded_file($tmpName,"uploads/".$fileName);
    }
    else    
        $msg;
            
    
    //in case there are no required
    
//    METHOD 1...ACHA H
    
//    $query="update profileform set";
//    if($pass!="")
//        $query.=" pwd='$pass',";
//    if($email!="")
//        $query.=" email='$email',";
//    if($mob!="")
//        $query.=" mobile='$mob',";
//    if($orgName!="")
//        $query.=" pic='$orgName',";
//    
//    if($query=="update profileform set ")
//        echo "nothing to update";
//    else{
//        $query=substr($query,0,-1);
//        $query.=" where name='$name'";
////        echo $query;
//        $msg=mysqli_query($dbcon,$query);
//        if($msg==true){
//            echo "Updated Successfully!!!";
//            move_uploaded_file($tmpName,"uploads/".$orgName);
//        }
//        else
//            $msg;
//    }
//    
    
    //in front.php pic,mobile are not "required"
    //try updating with mobile no. field blank
    
//    METHOD 2
    
//    if($orgName=="")
//        $query="update profileform set pwd='$pass', email='$email', mobile='$mob' where name='$name'";
//    else
//        $query="update profileform set pwd='$pass', email='$email', mobile='$mob', pic='$orgName' where name='$name'";
//    
//    $msg=mysqli_query($dbcon,$query);
//    if($msg==true){
//        echo "Updated Successfully!!!";
//        move_uploaded_file($tmpName,"uploads/".$orgName);
//    }
//    else
//        $msg;
}
?>
