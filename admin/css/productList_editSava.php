<?php


require_once 'islogin.php';
require_once '../Plus/DbMysql.php';
require_once '../plus/ProductType.class.php';

$editsava = new DbMysql();
$id=$_GET["id"];





//$result=$editsava->select("select * from productList where id=$id",1);
//if($result["tid"]==0)
//{
//    echo "<script>alert('一级分类不可以再次修改');location.href='productList.php'</script>";
//    exit;
//}






$tid=$_POST["tid"];
$idpath=$_POST["idpath"];
$typename=$_POST["typename"];
$sd=1;




$ptype = new ProductType();
$ptype->updateSd($id, $sd);

$newpath;

if($tid!=0)
{

    $result=$editsava->select("select * from productList where id=$tid", 1);
    $sd=$result["sd"]+1;
    $newpath=$result["idpath"]."_".$result["id"];
    // echo "表示不是一级分类，需要获得上级分类的深度+1";
}

$xj=$idpath.'_'.$id;

echo "Previous:$idpath";
echo "<br>";
echo "New:$newpath";
echo "<br/>";
echo "Child:$xj";
echo "<br/>";
echo $tid;

$sql="update productList set idpath=replace(idpath,'$idpath','$newpath') where (idpath like '$idpath%' and id='$id') or (idpath like '$xj%')";

$editsava->sql($sql);


$isok=$editsava->sql("update productList set tid='$tid',typename='$typename',sd='$sd' where id=$id");

if($isok==1)
{
    echo "<script>alert('Modify successfully');location.href='productList.php'</script>";
}
else
{
    echo "<script>alert('Fail to modify ');location.href='productList.php'</script>";
}


?>
