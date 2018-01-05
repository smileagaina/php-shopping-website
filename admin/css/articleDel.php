<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=$_GET["id"];
$del = new DbMysql();

$del->sql("delete from article where id=$id");

$isok=$del->affected();

if($isok==1)
{
    echo "<script>alert('Delete successfully');location.href='article.php'</script>";
}
else
{
    echo "<script>alert('Fail to delete');location.href='article.php'</script>";
}

?>
