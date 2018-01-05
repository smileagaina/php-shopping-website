<?php

require "../public/init.php";



$info=array_map("guolvStr", $_POST);
 
$info=array_map("utf",$info);

function utf($str)
{
    return iconv("utf-8","gb2312", $str);
}

 
//var_dump($info);

$ip=getIP();
$addtime=time();

//echo $_POST['message'];
foreach($_SESSION["productCart"] as $k=>$v){
    $sql="insert into orderList(orderid,pid,title,unitPrice,Price,total,picurl) 
        values('{$info["orderid"]}','$k','{$v["title"]}','{$v["unitPrice"]}','{$v["Price"]}','{$v["total"]}','{$v["picurl"]}')";

      $db->sql($sql);
};
 //echo $_POST["message"]."<br>".$_POST["shren"]."".$_POST['shdizhi']."".$_POST["youbian"]."".$_POST['mobile']."".$_POST["tel"]
       //  ."".$_POST["delivery_time"]."".$_POST["delivery_id"]."";
$sql="insert into productOrder(orderID,price,shren,shdizhi,youbian,tel,mobile,payment,dTime,feedback,ip,addtime,username)values('{$info["orderid"]}','{$info["price"]}','{$info["shren"]}','{$info["shdizhi"]}','{$info["youbian"]}','{$info["tel"]}','{$info["mobile"]}','{$info["delivery_id"]}','{$info["delivery_time"]}','{$info["message"]}','$ip','$addtime','".UID."')";
//echo $sql;

//echo $db->sql($sql);
if($db->sql($sql)){
    echo 1;
}else{
    echo 0;
}

?>

