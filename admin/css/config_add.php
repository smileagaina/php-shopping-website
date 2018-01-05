<?php
require_once 'islogin.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>config_add</title>
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
            if(document.admin.varshowname.value=='')
            {
                alert('Please input the varshowname');
                return false;
            }
            if(document.admin.varname.value=='')
            {
                alert('Please input the varname');
                return false;
            }
            if(document.admin.varinfo.value=='')
            {
                alert('Please input the varinfo');
                return false;
            }
            if(document.admin.varvalue.value=='')
            {
                alert('Please input the varvalue');
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
                    <td height="31"><div class="titlebt">Basic config</div></td>
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
                        <td class="left_txt">Current Position：Add basic config parameter</td>
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
                                    <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Basic config parameter information</td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td>	<form name="admin" id="admin" method="POST" action="config_addSava.php" onsubmit="return test();"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Varshowname：</td>
                                        <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="35%" height="30" bgcolor="#f2f2f2"><input name="varshowname" type="text" id="varshowname" size="30" /></td>
                                        <td width="42%" height="30" bgcolor="#f2f2f2" class="left_txt">Text prompt for Alter</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Varname：</td>
                                        <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="35%" height="30" bgcolor="#f2f2f2"><input name="varname" type="text" id="varname" size="30" /></td>
                                        <td width="42%" height="30" bgcolor="#f2f2f2" class="left_txt">Variable Name,used to call when used</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" class="left_txt2">Varinfo：</td>
                                        <td>&nbsp;</td>
                                        <td height="30"><input type="text" name="varinfo" size="30" id="varinfo" /></td>
                                        <td height="30" class="left_txt">Variable description,having a hint for the preparation</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Variable types：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td height="30" bgcolor="#f2f2f2"  class="left_txt2"><input name="vartype" type="radio" id="radio" value="string" checked="checked" />
                                            Text
                                            <input type="radio" name="vartype" id="radio2" value="bool" />
                                            Boolean (Y/N)
                                            <input type="radio" name="vartype" id="radio3" value="strings" />
                                            Multi-line text</td>
                                        <td height="30" bgcolor="#f2f2f2" class="left_txt">Configuration displays the form</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Variable Content：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td height="30" bgcolor="#f2f2f2"><input type="text" name="varvalue" size="30" id="varvalue" /></td>
                                        <td height="30" bgcolor="#f2f2f2" class="left_txt">Default Content</td>
                                    </tr>


                                    <tr>
                                        <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="创建" />
                                            &nbsp;</td>
                                    </tr>

                                </table> </form></td>
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
