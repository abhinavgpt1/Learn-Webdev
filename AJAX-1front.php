<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Form AJAX</title>
    <script>
        $(document).ready(function() {
            $("#btnSubmit").click(function() {
                txtEmail=$("#txtEmail").val();
                txtPass=$("#txtPass").val();
                url="AJAX-1process.php?email="+txtEmail+"&pwd="+txtPass;
                
                $.get(url,function(response){
                    $("#errResult").html(response);
                });
            });
        });

    </script>
</head>

<body>
    <div class="container bg-primary">
        <div class="row bg-secondary text-white">
            <div class="col-md-12">
                <center>
                    <h2>
                        Signup
                    </h2>
                </center>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="txtEmail">Email ID</label>
                        <input type="email" id="txtEmail" class="form-control">
                        <span id="errEmail">*</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="txtPass">Password</label>
                        <input type="password" id="txtPass" class="form-control">
                        <span id="errPass">*</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <center>
                            <input type="button" id="btnSubmit" value="Submit" class="btn-success text-white">
                            <br>
                            <br>
                            <span id="errResult">*</span>
                        </center>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
