<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/ProductType.class.php';

?>
    <head>
        <meta charset="UTF-8">
        <title>Product_add</title>
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
                if(document.admin.typename.value=='')
                {
                    alert('Please input the name of the classification!');
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
                        <td height="31"><div class="titlebt">Product classification</div></td>
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
                            <td class="left_txt">Current position：add new classification</td>
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
                                        <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Details Of Classification</td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <form name="admin" id="admin" method="POST" action="productList_addSava.php" onsubmit="return test();">
                                        <tr>
                                            <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Classification：</td>
                                            <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                                            <td width="32%" height="30" bgcolor="#f2f2f2"><select name="tid" id="tid">
                                                    <option value="0">First classfication</option>
                                                    <?php
                                                    $ptype = new ProductType();

                                                    $menu = $ptype->floption(0);
                                                    echo $menu;
                                                    ?>
                                                </select></td>
                                            <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">classification name：</td>
                                            <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                                            <td width="32%" height="30" bgcolor="#f2f2f2"><input name="typename" type="text" id="typename" size="30" /></td>
                                            <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
                                        </tr>
                                        <tr>
                                            <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="create" />
                                                &nbsp;
                                                <input type="reset" name="button2" id="button2" value="reset" /></td>
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
<?php



?>