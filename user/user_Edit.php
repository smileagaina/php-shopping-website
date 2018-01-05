<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();
$userinfo=$db->select("select * from user where username='".UID."'");
$mobile=$userinfo[0]["mobile"];
$xingming=$userinfo[0]["xingming"];
$sex=$userinfo[0]["sex"];
?>
<html>
<head>
<meta charset="UTF-8">
<title>User_Edit - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css" />
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user_reg.css" type="text/css"/>
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
			<div>
<form name="form_edit_profile" action="user_editSava.php" method="post" id="editInfo">
<!-- start 修改资料表单 -->
<h2 class="title">Update Details</h2>
<table class="edit_profile" border="0" cellpadding="0" cellspacing="0" width="100%">
<thead><tr><td colspan="2">The follow details cannot empty</td></tr></thead>
<tbody> 
<tr><td width="12%">USERNAME：</td>
	<td width="88%"><input name="xingming" type="text" class="must" id="xingming" value="<?php echo $xingming;?>"><span id="xingming_error">* </span></td></tr>
		<tr><td>YOUR SEX：</td>
	<td><select name="sex" class="must" style="width: 206px;">
			<option value="Hidden" selected="selected">hidden</option>
			<option value="man" <?php if($sex=='man') echo "selected";?>>man</option>
			<option value="woman" <?php if($sex=='woman') echo "selected";?>>woman</option>
		</select>
		<span>* </span></td></tr>
<tr><td>MOBILE：</td>
	<td><input name="mobile" type="text" class="must" id="mobile" value="<?php echo $mobile;?>"><span id="mobile_error">* </span></td></tr>
 <Tr><td colspan="2"></td></Tr>
</tbody></table>
<fieldset style="border:0;text-align: center;margin-top:25px; font-size: 20px;">

		<input value="Save" class="input_button" type="submit">

</fieldset>
<!-- end 修改资料表单 -->

				</form>
			
			</div>
		</div>

 

			<div style="clear:both;"></div>
	</div>
	</div>	<!-- member center end -->

</div>
	 

	 
		 

		<!-- footer -->
		 

 <?php
   include WEBDIR.'/include/foot.php';
?>
 <script type="text/javascript">
 $(function(){
     $('#editInfo').submit(function(){
         
         if(!$('#xingming').val())
		 {
		    $('#xingming_error').html('Please input the name(xingming)');
	             return false;
		  }
                  else{
                         $('#xingming_error').html('');
                  }
	
        if(!$('#mobile').val()){
             $('#mobile_error').html('Please input your mobile number');
             return false;
        }else{
            $('#mobile_error').html('');
        }
		  
		  
		  
         
         
     });
     
 })  ;             
 </script>
	<!--content ok--><!-- OK -->

</body>
</html>
