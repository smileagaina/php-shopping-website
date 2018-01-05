<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id = $_GET["id"];
$del = new DbMysql();
$del->sql("delete from admin where id=$id");
$isok=$del->affected();
if($isok==1)
{
    echo "<script>alert('Delete the admin successfully');location.href='admin.php'</script>";
}
else
{
    echo "<script>alert('Fail to delete the admin');location.href='admin.php'</script>";
}
?>
