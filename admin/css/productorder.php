<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/ProductType.class.php';
require_once '../DbConnect.php';
//session_start();

//$select= new DbMysql();
//$result=$select->select("select * from orders");

?>
<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8" />
    <title>Order</title>
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
                    <td height="31" width="100"><div class="titlebt"> Management Of Orders</div></td>
                </tr>
            </table></td>
        <!--<td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>-->
    </tr>
    <tr>
        <!--<td height="71" valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>-->
        <!--        <td valign="top" bgcolor="#F7F8F9">-->
        <div>
            <!---->
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                <tr>
                    <td class="left_bt2" >Order ID</td>
                    <td class="left_bt2">Product ID</td>
                    <td class="left_bt2">Title</td>
                    <td class="left_bt2">unitPrice</td>
                    <td class="left_bt2">Price</td>
                    <td class="left_bt2">Total</td>
                </tr>
                <?php
                $query1="select * from orderlist";
                $result= mysqli_query($link, $query1);
                if($result!=NULL){
                    $resultArray= mysqli_fetch_all($result);
                    $line= mysqli_affected_rows($link);
                    for ($i=0;$i<$line;$i++){
                        echo "<tr class='left_txt2'>";
                        echo"<td bgcolor='#F2F2F2'>".$resultArray[$i][1]."</td><td  bgcolor='#F2F2F2'>".$resultArray[$i][2]."</td>"
                            ."<td bgcolor='#F2F2F2'>".$resultArray[$i][3]."</td><td bgcolor='#F2F2F2'>".$resultArray[$i][4]."</td>".
                            "<td bgcolor='#F2F2F2'>".$resultArray[$i][5]."</td><td bgcolor='#F2F2F2'>".$resultArray[$i][6]."</td>";
                        echo '</tr>';
                    }
                }
                //echo $menu;
                ?>


            </table>


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
 
