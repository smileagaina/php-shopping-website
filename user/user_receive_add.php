<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();
$_SESSION["editOK"]="ok";

?>
<head>
<meta charset="UTF-8">
<title>user_receive_add</title>
<meta content="关键词" name="Keywords"> 
<meta content="描述" name="Description"> 
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
		        <h2 class="title">Manage the receive address</h2>
		        <div class="member_box_2">
		          <form action="user_receiveSava.php" method="post" name="form_add_consignee" id="fromadd">                  
		            <table border="0" cellpadding="5" cellspacing="5" width="100%">
		              <tbody>
		                <tr>
		                  <td width="30%" height="35"><input type="hidden" name="action" value="add" />Receiver：</td>
		                  <td width="70%"><input class="txtinput" name="shren" size="20" type="text" id="shren" />
		                    &nbsp; <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Address：</td>
		                  <td><span class="render_province"></span> <span class="render_city"></span> <span class="render_district"></span>
		                    <input class="txtinput" name="shdizhi" style="width: 220px;" type="text" id="shdizhi" />
		                    &nbsp; <span class="post_notice"></span> <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Zip Code：</td>
		                  <td><input class="txtinput" name="youbian" size="10" type="text" id="youbian" />
		                    &nbsp; <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Telephone：</td>
		                  <td><input class="txtinput" name="tel" size="20" type="text" id="tel" />
		                    &nbsp; <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Mobile：</td>
		                  <td><input class="txtinput" name="mobile" size="20" type="text" id="mobile" />
		                    <span class="post_notice">Telephone or Mobile, you must input one </span> <span class="post_error">&nbsp;</span></td>
	                    </tr>
	                  </tbody>
	                </table>
		            <fieldset style="border:0;text-align: center;margin-top:25px;">
		              <input value="Submit" class="input_button" type="submit" />
	                </fieldset>
	              </form>
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
 
 <script type="text/javascript">
  $(function(){
	  $('#fromadd').submit(function(){
		  if(!$('#shren').val())
		  {
			  alert('请输入收货人');
			  return false;
		   }
		   
		  if(!$('#shdizhi').val())
		  {
			  alert('请输入收货地址');
			  return false;
		   }
		  if(!$('#youbian').val())
		  {
			  alert('请输入收货地址邮编');
			  return false;
		   }
		  if(!$('#tel').val() && !$('#mobile').val())
		  {
			  alert('固定电话和手机中必填一项');
			  return false;
		   }
		   
     
	 
		   		   		   
		  })
	  })
  </script>
	<!--content ok--><!-- OK -->

</body>
</html>
