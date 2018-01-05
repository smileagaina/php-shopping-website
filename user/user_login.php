<?php
require '../public/init.php';
require_once '../config/config.php';
?>
<html>
<head>
<meta charset="UTF-8">
<title>Vip Login - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/common.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/cart.css" type="text/css">
</head>

<body>
<div id="container">
	<div class="header">
		<span class="help" style="font-size: 14px; font-weight: bold;"><a href="../help/index.php" target="_blank">HELP</a></span>
		<div style="padding:12px 0 0 15px;"><a href="../index.php"><img src="<?php echo $webdir;?>images/logo.gif" alt=""></a>
        </div>
	</div>
 
<style type="text/css">
.reglogin_box{border:0px;}
.h2_reglogin_a1{height:28px;text-indent:-999em;background:url(<?php echo $webdir;?>images/reglogin_titlebg.png) no-repeat 0 0;}
.h2_login_a1{background-position:0 0;}
.h2_reg_a1{background-position:-404px 0;}
.div_reglogin{margin:10px 0 0 0;height:260px;border:1px solid #dfdfdf;}
.btn_reglogin{background:#ed1b24;height:23px;line-height:23px;color:#fff;font-weight:bold;padding:0 25px;*padding:0 12px;border:0px;}
.shopping_cart_login_box {text-align: center; }
.login_box {text-align: center; width: 800px;}
.shopping_cart_login_box div.bottom{padding:8px 0 0 0;overflow:hidden;zoom:1;margin:20px 13px 0;border-top:1px solid #ccc;}
.bottom {
    font-size: 40px;
}
</style>

	<div class="shopping_cart_login_box">
		<div class="login_box reglogin_box">
			<h2 style="color: #ff4001;">VIP LOGIN</h2>
			<div class="div_reglogin">
				<form name="form_login2" action="userLoginSava.php" method="post" id="formLogin">
				<input name="action" value="login" type="hidden">
			 
				<table class="login_table" border="0" cellpadding="5" cellspacing="5" width="90%">
				<tbody><tr>
					<td align="right" height="34" width="25%">E-mail：</td>
					<td width="75%">
						<input class="txtinput" id="login_username" name="login_username" style="width: 140px;" type="email" required="required">
						<span class="post_error" id="username_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right" height="34">Password：</td>
					<td>
						<input class="txtinput" id="login_password" name="login_password" style="width: 140px;" value="" type="password" required="required">
						<span class="post_error" id="password_error">&nbsp;</span>
					</td>
				</tr>

				<tr>
					<td height="34">&nbsp;</td>
					<td><span class="login_btn"><input class="btn_reglogin js_login" value="Login" type="submit"></span><span class="forget"><a href="" target="_blank" style="padding-top: 15px; color: rgb(236, 29, 39);">Forget password？</a></span></td>
				</tr>
				</tbody></table>
				</form>
				<div class="bottom">
					 Welcome Login
				</div>
			</div>
		</div>
		

	<div style="clear:both;"></div>



<!--foot-->
        <?php
        include WEBDIR.'/include/foot.php';
        ?>
</div>
</body>
</html>
