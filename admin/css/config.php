<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$db= new DbMysql();
$result=$db->select("select * from webconfig");
if(count($result)<1)
{
    echo "<script>alert('No any parameter, please go to create one!');location.href='config_add.php'</script>";
    exit;
}

?>
<html >
<head>
    <meta charset="UTF-8">
    <title>config</title>
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
                    <td height="31"><div class="titlebt">Basic Config</div></td>
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
                        <td class="left_txt">Current Position：Basic Config paramter</td>
                    </tr>
                    <tr>
                        <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td><div class="add"><A href='config_add.php'><img src="images/add.gif" width="16" height="16" /> Add new Parameter</a></div></td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                                <tr>
                                    <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Basic config information</td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td>	<form name="admin" id="admin" method="POST" action="config_sava.php"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                    <?php
                                    foreach($result as $row)
                                    {

                                        ?>
                                        <tr>
                                            <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2"><?php echo $row["varshowname"];?>：</td>
                                            <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                                            <td width="35%" height="30" bgcolor="#f2f2f2">
                                                <?php
                                                switch ($row["vartype"])
                                                {
                                                    case "string":
                                                        echo "<input type='text' value='".$row["varvalue"]."' name='".$row["varname"]."'>";
                                                        break;
                                                    case "bool":
                                                        if($row["varvalue"]=="Y"){
                                                            echo "<input type='radio' value='Y' name='".$row["varname"]."' checked> yes";
                                                            echo "<input type='radio' value='N' name='".$row["varname"]."'> no";

                                                        }
                                                        else
                                                        {
                                                            echo "<input type='radio' value='Y' name='".$row["varname"]."'> yes";
                                                            echo "<input type='radio' value='N' name='".$row["varname"]."' checked> no";
                                                        }
                                                        break;
                                                    case "strings":
                                                        echo "<textarea name='".$row["varname"]."'>".$row["varvalue"]."</textarea>";
                                                        break;
                                                }


                                                ?>

                                            </td>
                                            <td width="42%" height="30" bgcolor="#f2f2f2" class="left_txt"><?php echo $row["varinfo"];?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>




                                    <tr>
                                        <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Modify" />
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
