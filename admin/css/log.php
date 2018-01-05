<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';

$pagesize=5;
$log = new DbMysql();
$log->sql("select * from adminLog");
$infocount=$log->affected();
$page = new page($infocount,$pagesize);



?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log Management</title>
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
                    <td height="31"><div class="titlebt">Login Log</div></td>
                </tr>
            </table></td>
        <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
    </tr>
    <tr>
        <td height="71" valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
        <td valign="top" bgcolor="#F7F8F9"><table width="100%" height="138" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="13" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="left_txt">Current position：Login Log for admin</td>
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
                                            <td class="left_bt2">Login Account</td>
                                            <td class="left_bt2">Login Pssword</td>
                                            <td class="left_bt2">Login Time</td>
                                            <td class="left_bt2">LoginIP</td>
                                            <td class="left_bt2">State</td>
                                            <td class="left_bt2">Operation</td>
                                        </tr>
                                    </table></td>
                            </tr>
                            <?php

                            $result=$log->select("select * from adminLog order by id desc ".$page->limit());
                            foreach ($result as $row){
                                ?>
                                <tr>
                                    <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" >
                                            <tr class='left_txt2'>
                                                <td width="100"><?php echo $row["username"];?></td>
                                                <td width="200"><?php echo $row["password"];?></td>
                                                <td width="200"><?php echo date("Y-m-d h:i:s",$row["addtime"]);?></td>
                                                <td width="100"><?php echo $row["ip"];?></td>
                                                <td width="100"><?php

                                                    if($row["state"]==1)
                                                    {
                                                        echo "Normal Login";
                                                    }
                                                    if($row["state"]==-1)
                                                    {
                                                        echo "<i>Error Password</i>";
                                                    }
                                                    if($row["state"]==-2)
                                                    {
                                                        echo "<b>The account is not exist.</b>";
                                                    }
                                                    ?></td>
                                                <td>
                                                    <?php
                                                    if($_SESSION["rights"]!=1)
                                                    {
                                                        echo "Delete";
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <a href='logdel.php?id=<?php echo $row["id"];?>'>Delete</a>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                        <div style="text-align:center;height:50px;line-height:50px;">  <?php



                            //echo $page->hello();
                            echo  $page->show(2);
                            ?>
                        </div>
                    </td>
                </tr>
            </table></td>
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