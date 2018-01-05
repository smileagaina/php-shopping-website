<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];

if(count($id)<1)
{
    echo "<script>alert('Please choose one information you want to delete！');location.href='article.php';</script>";
    exit;
}


$del= new DbMysql();

foreach ($id as $row)
{
    $sql="delete from article where id=$row";
    $del->sql($sql);
}


echo "<script>alert('Delete successfully');location.href='article.php'</script>";

?>
