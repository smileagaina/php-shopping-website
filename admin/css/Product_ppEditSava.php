<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=$_GET["id"];


$ppname=$_POST["ppname"];
$pporder=$_POST["pporder"];
$recommend=$_POST["recommend"];
//$picurl=$_FILES['picurl']['tmp_name'];
$filename=$_FILES['picurl']['name'];
move_uploaded_file($_FILES['picurl']['tmp_name'],"images/".$filename );
$picurl="images/".$_FILES['picurl']['name'];
$ppinfo=$_POST["ppinfo"];


$db = new DbMysql();



$db->sql("select * from productPP where ppname='$ppname' and not id='$id'");
if($db->affected()>0)
{
    echo "<script>alert('The brand name to modify already exists');location.href='product_pp.php'</script>";
    exit();
}

$sql="update productPP set 
    ppname='$ppname',
    pporder='$pporder',
    recommend='$recommend',
    picurl='$picurl',
    ppinfo='$ppinfo'
 where id =$id

";
$isok=$db->sql($sql);

if($isok==1)
{
    echo "<script>alert('Modify successfully');location.href='product_pp.php'</script>";
}
else
{
    echo "<script>alert('Modify failed');location.href='product_pp.php'</script>";
}
?>
