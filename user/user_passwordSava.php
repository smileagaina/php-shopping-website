<?php

require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

$ymima=$_POST["yPassword"];
$xmima=$_POST["xPassword"];
$qmima=$_POST["qPassword"];

$sql="select * from user where username ='".UID."' and password='$ymima'";
$db->sql($sql);


 
if($db->affected()!=1){
    webAlter("Original password is not correct", 'user_Password.php');
}

if($xmima!=$qmima){
    webAlter("The two password is not same", 'user_Password.php');
}

$sql="update user set password='$xmima' where username ='".UID."'";
$isok=$db->sql($sql);

if($isok)
    {
    session_destroy();
    $_SESSION=array();
        webAlter("Update password successfully, please login！", 'user_login.php');
    }else{
       webAlter("Fail to update password", 'user_Password.php');
    }


?>
