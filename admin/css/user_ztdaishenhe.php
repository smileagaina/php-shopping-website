<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];
$db = new DbMysql();

if(count($id)==0)
{
    echo "<script>alert('Please choose the info you want to modify');location.href='user.php'</script>";
    exit();
}

foreach($id as $v)
{
    $sql="update user set zt=1 where id=$v";
    $isok=$db->sql($sql);
    if($isok!=1)
    {
        echo "<script>alert('occur error');location.href='user.php'</script>";
    }

}


echo "<script>alert('batch delete completely');location.href='user.php';</script>";
?>
