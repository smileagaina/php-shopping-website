<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id=$_GET["id"];
$typename=$_POST["typename"];


$edit = new DbMysql();
$isok=$edit->sql("update articleType set typename='$typename' where id=$id");
$isok=$edit->affected();
if($isok==1)
{
    echo "<script>alert('modify successful!');location.href='articleList.php'</script>";
}
else
{
    echo "<script>alert('fail to modify!');location.href='articleList.php'</script>";
}
?>
