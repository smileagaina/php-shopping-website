<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$ppname=$_POST["ppname"];
$pporder=$_POST["pporder"];
$recommend=$_POST["recommend"];

//$picurl=$_FILES['picurl']['tmp_name'];

$filename=$_FILES['picurl']['name'];

move_uploaded_file($_FILES['picurl']['tmp_name'],"../images/".$filename );

$picurl="../images/".$_FILES['picurl']['name'];
$ppinfo=$_POST["ppinfo"];

$db= new DbMysql();

$db->sql("select * from productPP where ppname='$ppname'");
if($db->affected()>0)
{
    echo "<script>alert('Brand name already exists. please check and add again');location.href='product_pp.php'</script>";
}
$sql="insert into productPP(ppname,pporder,recommend,picurl,ppinfo)
values('$ppname','$pporder','$recommend','$picurl','$ppinfo')    
";
$isok=$db->sql($sql);

if($isok==1)
{
    echo "<script>alert('Product brand is created successfully ');location.href='product_PP.php'</script>";
}
else
{
    echo "<script>alert('Product brand is created failed');location.href='product_PP.php'</script>";
}
//$isok=


?>
