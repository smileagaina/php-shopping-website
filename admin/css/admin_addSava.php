<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$username=$_POST["username"];
$password=$_POST["password"];
$rights=$_POST["rights"];
//echo $username.$password.$rights;

$admin= new DbMysql();
$admin->sql("select * from admin where username='$username'");


$count=$admin->affected();

if($count>0)
{
    echo "<script>alert('The $username,has already exist, please change another one！');location.href='admin.php'</script>";
    exit;
}

$admin->sql("insert into admin(username,password,rights) values('$username','$password','$rights')");
$isok=$admin->affected();
if($isok==1)
{
    echo "<script>alert('Successfully create the admin！');location.href='admin.php'</script>";
}
else
{
    echo "<script>alert('Fail to create the admin！');location.href='admin.php'</script>";
}
?>
