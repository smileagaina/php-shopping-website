<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];


$idcount=count($id);

if($idcount==0)
{
    echo "<script>alert('Please select the information to delete');location.href='product.php'</script>";
    exit();
}



$del = new DbMysql();

foreach($id as $v)
{
    // 错误的信息
    $del->sql("select * from product where id=$v");
    $isok=$del->affected();
    if($isok!=1)
    {
        echo "<script>alert('Error parameter');location.href='product.php'</script>";
        exit();
    }
    $sql="delete from product where id=".$v;
    $del->sql($sql);
}

echo "<script>alert('Batch delete operation succeeded');location.href='product.php'</script>";

?>
