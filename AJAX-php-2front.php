<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Ajax 2 front</title>
    <script>
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#samplePic').attr('src', ev.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
        $(document).ready(function() {
            $("#txtName").blur(function() {
                var url = "AJAX-2chk-uid.php";
                var nameValue = $(this).val(); //can be name too
                if (nameValue == "")
                    {
                    $("#errName").html("Username not available");
                        $("#btnSub").prop("disabled",true);
                    }
                else {
                    $.get(url, {
                        name: nameValue
                    }, function(response) {
                        $("#errName").html(response);
                        if(response=="Username not available")
                            $("#btnSub").prop("disabled",true);
                        else
                            $("#btnSub").prop("disabled",false);
                    });
                    //deal with invalid usernames being saved
                }
            });
            $("#btnSub").click(function() {
                alert();
            });
            $("#btnFetch").click(function() {

                var nameValue = $("#txtName").val();
                var url = "AJAX-json1_2fetch.php?name=" + nameValue;
                $.getJSON(url, function(jsonArray) {
//                    alert(JSON.stringify(jsonArray));
//                    $("#txtName").val(jsonArray[0].name);
                   if(jsonArray.length==0) 
                   {
                       alert("Details for this name aren't available");
                       return;
                   }
                    $("#txtEmail").hide().val(jsonArray[0].email).fadeIn();
                    $("#txtPass").hide().val(jsonArray[0].pwd).slideDown();
                    $("#txtMob").fadeOut().val(jsonArray[0].mobile).fadeIn();
                    $("#samplePic").hide().prop("src", "uploads/" + jsonArray[0].pic).fadeIn().css("border-radius", "50%");
                    
                    $("#jasoos").val(jsonArray[0].pic);
                });
            });
//            $("#btnUpd").click(function() {
//                $("#jasoos").val("");
//            });
            $(document).ajaxStart(function(){
                $("#processing").show();
            })
            $(document).ajaxStop(function(){
                $("#processing").hide();
            });
        });

    </script>
    <style>
        #processing{
            background-image: url(pics/Loading4.gif);
            height:180px;
            width:180px;
            background-size: contain;
            position: absolute;
            margin-left: 42%;
            margin-top:15%;
            z-index: 10;
            display: none;
        }
    </style>
</head>

<body>
   <div id="processing"></div>
    <form action="AJAX-php-2profile-process.php" method="post" enctype="multipart/form-data">
       
        <input type="hidden" id="jasoos" name="jasoos">
        
        <div class="container bg-info">
            <div class="row">
                <div class="col-md-12 bg-dark text-white">
                    <center>
                        <h2>
                            Signup
                        </h2>
                    </center>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 form-group">
                    <label for="txtName">Name</label>
                    <input type="text" required id="txtName" name="txtName" class="form-control">
                    <span id="errName">*</span>
                </div>
                <div class="col-md-2 offset-md-2 form-group">
                    <label for="">&nbsp;</label>
                    <input type="button" class="btn btn-dark form-control" value="Fetch Details" id="btnFetch">
                </div>
                <div class="col-md-4 offset-md-1 form-group">
                    <label for="">Email</label>
                    <input type="email" name="txtEmail" id="txtEmail" required class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="">Password</label>
                    <input type="password" required name="txtPass" id="txtPass" class="form-control">
                </div>
<!--                mobile isn't required-->
                <div class="col-md-6 form-group">
                    <label for="">Mobile No.</label>
                    <input type="text" name="txtMob" id="txtMob" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <label for="">Select Profile Pic</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="profilePic" onchange="showpreview(this);">
                </div>
                <div class="col-md-4">
                    <img src="pics/advice_yoda_gives.jpg" height="150" width="150" alt="" id="samplePic">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <center>
                        <input type="submit" value="Submit" class="btn btn-danger" id="btnSub" name="btn">
                        <input type="submit" value="Fetch All Records" formaction="AJAX-php-2show-all.php" class="btn btn-outline-light bg-primary">
                        <input type="submit" value="Update" class="btn btn-danger" id="btnUpd" name="btn">
                    </center>
                    <label for="">&nbsp;</label>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
