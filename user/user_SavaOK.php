
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title;?>  - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user_reg.css" type="text/css">
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
		        <h2 class="title"><?php echo $title;?></h2>
		        <div class="member_box_2">
		          <p class="notice" style="font-size: 15px; font-weight: bold;"><?php echo $info;?></p>
		          <p class="button"><a href="<?php echo $url;?>" style="text-decoration: underline; font-size: 18px; color: #ff6b35;">Back</a></p>
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
