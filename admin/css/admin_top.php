<?php
require_once 'islogin.php';

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>admin_top</title>
    <script language="JavaScript">
        function logout(){
            if (confirm("Are you to exit the control panel？"))
                top.location = "outLogin.php";
            return false;
        }
    </script>
    <script language="JavaScript">
        function showsubmenu(sid) {
            var whichEl = eval("submenu" + sid);
            var menuTitle = eval("menuTitle" + sid);
            if (whichEl.style.display == "none"){
                eval("submenu" + sid + ".style.display=\"\";");
            }else{
                eval("submenu" + sid + ".style.display=\"none\";");
            }
        }
    </script>
    <link href="images/skin.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
    <tr>
        <td width="61%" height="64"><img src="images/logo.gif" width="262" height="64"></td>
        <td width="39%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="74%" height="38" class="admin_txt" style="font-size: 18px;">Admin：<b><?php echo $_SESSION["username"];?></b> WELCOME!!！</td>
                    <td width="22%"><a href="#" target="_self" onClick="logout();"><img src="images/exit.jpg" alt="Security EXIT" width="46" height="20" border="0"></a></td>
                    <td width="4%">&nbsp;</td>
                </tr>
                <tr>
                    <td height="19" colspan="3">&nbsp;</td>
                </tr>
            </table></td>
    </tr>
</table>
</body>
</html>