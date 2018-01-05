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
    .fastregister {
        color: #99C600;
    }
    .reg_box {
        text-align: center;
        width: 900px;
    }
    .fastregister {
        text-align: center;
        font-size: 40px;
    }
.reglogin_box{border:0px;}
.div_reglogin{margin:10px 0 0 0;height:260px;border:1px solid #dfdfdf;text-align: center;}
.btn_reglogin{background:#ed1b24;height:23px;line-height:23px;color:#fff;font-weight:bold;padding:0 25px;*padding:0 12px;border:0px;}
.shopping_cart_login_box div.bottom{padding:8px 0 0 0;overflow:hidden;zoom:1;margin:20px 13px 0;border-top:1px solid #ccc;}
</style>

	
		<div class="reg_box reglogin_box">
			<h2 class="fastregister">Please Register</h2>
			<div class="div_reglogin">
				<form name="form_register" id="regform" action="user_register.php" method="post" style="padding-top:5px;">
				<input name="action" value="register" type="hidden">
				<input name="referer_url" value="" type="hidden">
				<table class="login_table" border="0" cellpadding="5" cellspacing="5" width="95%">
				<tbody><tr>
					<td align="right" width="30%">Your Email Address：</td>
					<td width="70%">
						<input class="txtinput" id="input_register_username" name="username" style="width: 140px;" type="email" required="required">
						<span id="span_register_username" class="post_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right"></td>
					<td style="color: rgb(136, 136, 136); line-height: 1.5;">Valid Email Address</td>
				</tr>
				<tr>
					<td align="right" height="25">Set Password：</td>
					<td>
						<input class="txtinput" id="input_register_password" name="password" style="width: 140px;" value="" type="password" required="required">
						<span id="span_register_password" class="post_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right" height="25">Input it again：</td>
					<td>
						<input class="txtinput" id="input_register_password_confirm" name="password_confirm" style="width: 140px;" value="" type="password" required="required">
						<span id="span_register_password_confirm" class="post_error">&nbsp;</span>
					</td>
				</tr>

				<tr>
					<td height="30">&nbsp;</td>
					<td><input class="btn_reglogin js_register" value="Agree and Register" type="submit" name="submit"></td>
				</tr>
				<tr>
					<td align="right" height="24">&nbsp;</td>
					<td>
						Read《<a href="" target="_blank">user registration protocol</a>》
					</td>
				</tr>
				</tbody></table>
				</form>
			</div>
		</div>
		<div style="clear:both;"></div>
			</div>

	<div style="clear:both;"></div>

<!--foot-->
<?php
include WEBDIR.'/include/foot.php';
?>
</div>
</body>
</html>
