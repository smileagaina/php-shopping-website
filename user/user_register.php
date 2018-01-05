<?php

session_start();
$link = mysqli_connect('localhost', 'root', 'root', 'shop');
//require_once '../plus/DbMysql.php';
 $username = $_POST['username'];
 $password = $_POST['password'];




if(empty ($_POST))
{
    echo "";
    exit;
}
else{
 $select = "select * from user where username = '$username'";
        $result = mysqli_query($link,$select);
        $total = mysqli_num_rows($result);
        if( $total >=1)
        {
            
            
            echo "<script>alert('User name already exists');location.href='user_reg.php'</script>";

        }}
        if($_POST['password'] == $_POST['password_confirm'])
        {
           
        
            $insert = "INSERT INTO user (username,password,email,tiwen,huida,zt,xingming,sex,mobile) values('$username','$password','$username','','','1','','','')";
            mysqli_query($link,$insert);
            echo "<script>alert('Register success');location.href='user_login.php'</script>";
 }else{
 	echo "<script>alert('The two passwords don't match！');location.href='user_reg.php'</script>";
 }








?>