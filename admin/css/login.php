<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> - Login for admin</title>
    <link type="text/css" rel="stylesheet" href="css/user_login.css" >


    <script type="text/javascript">
        function test()
        {
            if(document.myform.username.value=='')
            {
                alert('Please input User');
                return false;
            }
            if(document.myform.password.value=='')
            {
                alert('Please input password');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<img style="position:absolute;left:0px;top:0px;width:100%;height:100%;z-Index:-1; border:1px solid blue" src="../Images/back3.jpg" />
<?php
    include_once '../config/config.php';
?>
<div class="header">
    <img src="images/logo.png">
</div>
<div class="wrap" style="background: none;">
    <div class="container">
<!--        <h1 style="color: #DB770E;">Back Management</h1>-->
        <form name="myform" onSubmit="return test();" action="loginSava.php" method="post" style="margin-top: 200px;">
            <input class="in" type="text" name="username" style="border-radius: 12px; height: 45px;"/>
            <input class="in" type="password" name="password" style="border-radius: 12px; height: 45px;"/>
            <input class="in" type="submit" value="Login" style="width: 100px; height: 50px; border-radius: 18px;"/>
        </form>
    </div>

</div>

</body>
</html>