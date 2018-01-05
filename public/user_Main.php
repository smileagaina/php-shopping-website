<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

?>
<html>
<head>
<meta charset="UTF-8">
<title>My Zone - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user.css" type="text/css">
</head>
<body>
 	 <?php
   include WEBDIR.'/include/top.php';
   ?>

   <div class="u_content">


        <?php include WEBDIR.'/include/userLeft.php';?>

       <div class="u_wrap_c">
           <div class="u_info u_m_bottom">
           </div>
           <div class="u_info_user">
               <h2 style="font-size: 40px;"><span>Welcome</span> <?php echo $_SESSION["webusername"];?></a></h2>

           </div>
       </div>

   </div>


     <?php
     include WEBDIR.'/include/foot.php';
?>


		 