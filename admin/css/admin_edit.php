<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id=$_GET["id"];

$edit = new DbMysql();
$result=$edit->select("select * from admin where id=$id",1);

$username=$result["username"];
$password=$result["password"];
$rights=$result["rights"];
//echo $username.$password.$rights;

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>admin_edit</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background-color: #F8F9FA;
        }
        -->
    </style>
    <link href="images/skin.css" rel="stylesheet" type="text/css" />
    <script>
        function test()
        {
            if(document.admin.rights.value=='<?php echo $rights;?>' && document.admin.username.value=='<?php echo $username;?>' &&document.admin.password.value=='<?php echo $password;?>')
            {
                alert('Same information, no need to submit');
                return false;
            }
            if(document.admin.username.value=='')
            {
                alert('Please input the admin account');
                return false;
            }


            if(document.admin.password.value=='')
            {
                alert('Please input the password');
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
        <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
                <tr>
                    <td height="31"><div class="titlebt">Admin</div></td>
                </tr>
            </table></td>
        <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
    </tr>
    <tr>
        <td height="71" valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
        <td valign="top" bgcolor="#F7F8F9">
            <div>
                <!---->
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="left_txt">Current Position：Modify Admin</td>
                    </tr>
                    <tr>
                        <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                <tr>
                                    <td></td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                                <tr>
                                    <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Admin fundamental information</td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <form name="admin" id="admin" method="POST" action="admin_editSava.php?id=<?php echo $id;?>" onsubmit="return test();">
                                    <tr>
                                        <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Admin account：</td>
                                        <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="username" type="text" id="username" size="30" value="<?php echo $username;?>" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Login back account</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" class="left_txt2">Admin account：</td>
                                        <td>&nbsp;</td>
                                        <td height="30"><input type="text" name="password" size="30" id="password" value="<?php echo $password;?>"/></td>
                                        <td height="30" class="left_txt">Login password for back system</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Admin identification：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td height="30" bgcolor="#f2f2f2"><select name="rights" id="rights">
                                                <option value="2" <?php
                                                if($rights==2)
                                                {
                                                    echo "selected";
                                                }
                                                ?>>Normal Manager</option>
                                                <option value="1"
                                                    <?php
                                                    if($rights==1)
                                                    {
                                                        echo "selected";
                                                    }
                                                    ?>>Super Manager</option>
                                            </select></td>
                                        <td height="30" bgcolor="#f2f2f2" class="left_txt">Admin priority,to separate the priority the admin can use</td>
                                    </tr>



                                    <tr>
                                        <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Modify" />
                                            &nbsp;
                                            <input type="reset" name="button2" id="button2" value="Reset" /></td>
                                    </tr>
                                </form>
                            </table></td>
                    </tr>
                </table>
                <!---->

            </div>
        </td>
        <td background="images/mail_rightbg.gif">&nbsp;</td>
    </tr>
    <tr>
        <td valign="middle" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
        <td height="17" valign="top" background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17" /></td>
        <td background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
    </tr>
</table>
</body>
</html>
