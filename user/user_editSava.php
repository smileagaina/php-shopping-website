<?php
require '../public/init.php';


$title="Update Details";
$info="Update the details successfully";
$url="user_edit.php";

$xingming=$_POST["xingming"];
$sex=$_POST["sex"];
$mobile=$_POST["mobile"];


$sql="update user set xingming='$xingming',sex='$sex',mobile='$mobile' where username='".UID."'";
$isok=$db->sql($sql);

if($isok){
    $info="Update successfully";
}else{
    $info="Fail to update";
}


include "user_SavaOK.php";


?>
