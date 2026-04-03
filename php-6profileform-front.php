<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Profile form</title>
    <script>
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#picagent').attr('src', ev.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }

    </script>
    <style>
        #errCoun {
            color: chartreuse;
        }

    </style>
</head>

<body style="background-color:darkseagreen">
    <!--    Profile header-->
    <div class="container" style="background-color:lightcoral">
        <div class="row bg-success">
            <div class="col-md-12">
                <center>
                    <h2>Profile Form</h2>
                </center>
            </div>
        </div>
        <!--Form-->
        <form action="php-6profileform-process.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <!--           columns become tighter else use class="row"-->
                <!--name-->
                <div class="col-md-6 form-group">
                    <label for="txtName">Name</label>
                    <input type="text" id="txtName" name="txtName" class="form-control">
                    <span id="errName" name="errName">*</span>
                </div>


                <!--fetch button-->
                <div class="col-md-2 form-group">
                    <label for="">&nbsp;</label>
                    <div class="btn btn-success form-control" id="btnFetch">Fetch</div>
                </div>
                <!--email-->
                <div class="form-group col-md-4">
                    <label for="txtEmail">Email</label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                    <span id="errEmail" name="errEmail">*</span>
                </div>
            </div>
            <!--            address-->
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="txtPass">Password</label>
                    <input type="password" id="txtPass" name="txtPass" class="form-control">
                    <span id="errPass" name="errPass">*</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="txtMob">Mobile</label>
                    <input type="text" id="txtMob" name="txtMob" class="form-control">
                    <span id="errMob" name="errMob">*</span>
                </div>
            </div>
<!--            select pic-->
            <div class="form-row">
                <div class="col-md-4">
                    <label for="">Select Profile Pic</label>
                </div>
                <div class="col-md-4">
                    <input type="file" onchange="showpreview(this);" required name="profilePic" id="profilePic">
                </div>
                <div class="col-md-4">
                    <img src="pics/facepalm.jpg" id="picagent" width="150" height="150" alt="">
                </div>
            </div>
            <!--            submit-->
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <input type="submit" value="Submit" class="btn btn-primary" style="background-color:black">
                    </center>
                </div>
                <!--                a space-->
                <div class="col-md-12">
                    <label for="">&nbsp;</label>
                </div>
            </div>
        </form>
    </div>


</body>

</html>
