<?php

$img=  imagecreate(50, 30); //创建
$b=  imagecolorallocate($img, 0, 0, 0);   //背景颜色
$f=  imagecolorallocate($img, 255, 255, 255);   //文本颜色
$str="1234567890";
$s='';

for($i=0;$i<4;$i++)
{
    $k=mt_rand(1, strlen($str));
    $s.=$str[$k-1];
}
session_start();
$_SESSION["code"]=$s;

imagefill($img, 0, 0, $b);
imagestring($img, 5, 5, 3, $s, $f);
header("content-type:image/png");
imagepng($img);

?>
