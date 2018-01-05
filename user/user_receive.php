<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

$receive= new receive();
$tj=" and username='".UID."' ";
$info= $receive->receiveList($tj);

 

?>
<head>
<meta charset="UTF-8">
<title>user_receive - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/base_v4.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="<?php echo $webdir;?>css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/user_reg.css" type="text/css">
</head>
<body>
  	 <?php
   include WEBDIR.'/include/top.php';
?>

	    <div id="container">
		   <!-- member center start -->
		   <div class="u_content">
		     <div class="" style="height: 33px; width: 165px; text-align: center; line-height: 33px;">
                 <h2 style="font-size: 20px; color: #ff6b35;">MyInfo Details</h2>
	         </div>
		     <div class="member">
		           			     		<!--会员中心菜单开始-->
              <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
    		<!--会员中心菜单结束-->	
		       <div class="main">
		         <h2 class="title">Receive Address Manage</h2>
		         <p style="text-align:right;"><img src="shouhuo_files/li_02.gif" alt="" />&nbsp;&nbsp;<a href="user_receive_add.php" style="text-decoration: underline; font-size: 18px; color: #ff6b35;">Add New Receive Address</a></p>
		         <div class="member_box">
		           <table>
		             <thead>
		               <tr>
		                 <td width="8%">Receiver</td>
		                 <td width="35%">Address</td>
		                 <td width="7%">Zip_Code</td>
		                 <td width="15%">TEL</td>
		                 <td width="15%">MOBILE</td>
		                 <td width="20%">Operation</td>
	                   </tr>
	                 </thead>
		             <tbody>
                                 <?php
                                 foreach($info as $rows)
                                 {
                                 ?>
		               <tr>
		                 <td><?php echo $rows["shren"];?></td>
		                 <td align="left"><?php echo $rows["shdizhi"];?></td>
		                 <td><?php echo $rows["youbian"];?></td>
		                 <td><?php echo $rows["tel"];?></td>
		                 <td><?php echo $rows["mobile"];?></td>
		                 <td><a href="user_receive_edit.php?id=<?php echo $rows["id"];?>">Update</a> | <a href="user_receiveSava.php?action=del&id=<?php echo $rows["id"];?>">Delete</a></td>
	                   </tr>
                                 <?php
                                 
                                 }
                                 ?>
	                 </tbody>
	               </table>
	             </div>
	           </div>
		       <div style="clear:both;"></div>
	         </div>
	      </div>
		   <!-- member center end -->
</div>
<!-- footer -->
		 
 <?php
   include WEBDIR.'/include/foot.php';
?>
 
	<!--content ok--><!-- OK -->

</body>
</html>
