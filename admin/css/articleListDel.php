<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id=$_GET["id"];

$del= new DbMysql();
$del->sql("delete from articleType where id=$id ");
$isok=$del->affected();

if($isok==1)
{
    echo "<script>alert('Delete successful');location.href='articleList.php'</script>";
}
else
{
    echo "<script>alert('Fail to delete');location.href='articleList.php'</script>";
}

?>
