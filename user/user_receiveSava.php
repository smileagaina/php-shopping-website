<?php

require "../public/init.php";

//var_dump($_POST);

$action=$_REQUEST["action"];
$receive = new receive();
 
$title="Receive Address";
$info="";
$url="user_receive.php";
switch ($action) {
    case "add":
        $infos=$_POST;        
        if($receive->receiveAdd($infos,$_SESSION["editOK"])){
             $info="Successfully add the new address";
        }else
        {
            $info="Fail to add the new address";
        }
       
        break;
    case "edit":
         $infos=$_POST;    
        if($receive->receiveAdd($infos,$_SESSION["editOK"])){
             $info="Change the address successfully!";
        }else
        {
            $info="Fail to change the address.";
        }
         
        break;
    case "del":
        $id=$_GET["id"];
        if($receive->receiveDel($id)){
            $info="Delete successfully.";
        }else
        {
            
            $info="Fail to Delete.";
        }
        break;
    default:
        break;
}
//include 'user_SavaOK.php';

echo $info;
header('Location:user_Main.php');

?>
