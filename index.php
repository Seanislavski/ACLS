<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Login System</title>

    <link rel="stylesheet" href="css/home/bootstrap.min.css" />
    <link rel="stylesheet" href="css/home/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/home/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/status.json"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-toggle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="MsgAlert">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 Signup_Screen" style="display:none1;margin-top:50px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Log In</div>
                        <div style="float:right; font-size: 85%; position: relative; top: -10px">
                            <a href="#login" class="ScreenMenu" menuid="Login"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div style="display:none" class="alert alert-danger Login_Alert">
                        Error:
                        </div>
                        <form role="form" class="form-horizontal Login_Form">
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control Login_Email" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                     <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-offset-3 col-md-9">
                        <input type="password" class="form-control Login_Password" placeholder="Password">
                    </div>
                </div>

            </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
