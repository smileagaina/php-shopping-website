<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';
$list= new DbMysql();
$pagesize=10;
$list->sql("select * from articleType");
$infocount=$list->affected();
$page = new page($infocount, $pagesize);
$result=$list->select("select * from articleType ".$page->limit());
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>articleList</title>
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
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
        <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
                <tr>
                    <td height="31"><div class="titlebt">Article</div></td>
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
                        <td class="left_txt">Current Position：List of articleType</td>
                    </tr>
                    <tr>
                        <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
                                <tr>
                                    <td><div class="add"><A href='articleList_add.php'><img src="images/add.gif" width="16" height="16" /> Add newType</a></div></td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                                <tr>
                                    <td class="left_bt2">ID</td>
                                    <td class="left_bt2">TypeName</td>


                                    <td class="left_bt2">Operation</td>
                                </tr>
                                <?php
                                foreach ($result as $row){
                                    ?>
                                    <tr class="left_txt2">
                                        <td bgcolor="#F2F2F2"><?php echo $row["id"];?></td>
                                        <td bgcolor="#F2F2F2"><?php echo $row["typename"];?></td>
                                        <td bgcolor="#F2F2F2"><A href="articleListDel.php?id=<?php echo $row["id"];?>">Delete</a> <A href="articleList_edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table></td>
                    </tr>

                </table>
                <div id="page"><?php echo $page->show(1);?></div>
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
