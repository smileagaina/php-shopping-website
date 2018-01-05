<?php
require_once 'islogin.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Product_ppAdd</title>
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
            if(document.admin.ppname.value=='')
            {
                alert('Product name can not be null');
                return false;
            }
            if(document.admin.pporder.value=='')
            {
                alert('Product sort can not be null');
                return false;
            }
            if(document.admin.picurl.value=='')
            {
                alert('Please input the location brand LOGO');
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
                    <td height="31"><div class="titlebt">Brand management</div></td>
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
                        <td class="left_txt">Current position：Add new brand</td>
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
                                    <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Brands' details</td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <form action="product_ppAddSava.php"enctype="multipart/form-data" method="POST"  name="admin" id="admin" onsubmit="return test();">

                                    <tr>
                                        <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Brand name：</td>
                                        <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="ppname" type="text" id="webname" size="30" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Sort position：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid">
                                                <input name="pporder" type="text" id="pporder" size="30" />
                                            </label></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Ascending</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Recommand?：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input type="radio" name="recommend" id="radio" value="1" />Yes
                                            <input name="recommend" type="radio" id="radio2" value="2" checked="checked" />No
                                            <label for="recommend"></label>
                                            <label for="recommend"></label></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Recommand?</td>
                                    </tr>

                                    <tr id="logotr">
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">The location of pictures：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><label for="picurl"></label>
                                            <input type="file"  id="picurl" style="width:280px;" name="picurl"/>
                                    </tr>


                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Brands' introduction：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><textarea name="ppinfo" cols="30" rows="5" id="ppinfo"></textarea></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Short description</td>
                                    </tr>


                                    <tr>
                                        <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Created" />
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
