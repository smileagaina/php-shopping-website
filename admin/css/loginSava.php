<?php


require_once '../plus/DbMysql.php';
require_once '../plus/AdminLogin.class.php';

session_start();
$username= $_POST["username"];
$password=$_POST["password"];


$login = new AdminLogin();
$islogin= $login->isLogin($username, $password);


if($islogin==1)
{
    $_SESSION["username"]=$username;
    $_SESSION["password"]=$password;
    echo "<script>alert('WelcomeBack! $username');location.href='index.php';</script>";
}

if($islogin==-1)
{
    echo "<script>alert('The password has error');location.href='login.php';</script>";
}

if($islogin==-2)
{
    echo "<script>alert('The User account is not exist, please input another correct User');location.href='login.php';</script>";

}



?>
