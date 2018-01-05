<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$edit = new DbMysql();

$id=$_GET["id"];

$result=$edit->select("select * from article where id=$id",1);
$title=$result["title"];
$typeid=$result["typeid"];
$author=$result["author"];
$com =$result["com"];
$hits=$result["hits"];
$content=$result["content"];


$result=$edit->select("select * from articleType");  //读取分类
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>ModifyArticle</title>
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
    <script src="../ckeditor/ckeditor.js"></script>
    <script>
        function test(){
            if(document.admin.title.value=='')
            {
                alert('Please input title');
                return false;
            }
            if(document.admin.typeid.value=='')
            {
                alert('Please input typeid');
                return false;
            }
            if(document.admin.author.value=='')
            {
                alert('Please input author');
                return false;
            }
            if(document.admin.com.value=='')
            {
                alert('Please input com');
                return false;
            }
            if(document.admin.hits.value=='')
            {
                alert('Please input default Page View');
                return false;
            }
            if(CKEDITOR.instances.content.getData()=='')
            {
                alert('Please input content');
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
                        <td class="left_txt">Current Position：Modify article</td>
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
                                    <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Fundamental Information</td>
                                </tr>
                            </table></td>
                    </tr>
                    <tr>
                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <form name="admin" id="admin" method="POST" action="article_editSava.php?id=<?php echo $id;?>" onsubmit="return test();">
                                    <tr>
                                        <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Title：</td>
                                        <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="title" type="text" id="title" size="30" value="<?php echo $title;?>" /></td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">TypeId：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                                            <select name="typeid" id="typeid">
                                                <option value="">Please choose type</option>
                                                <?php
                                                foreach ($result as $row){
                                                    if($typeid==$row["id"])
                                                    {

                                                        echo "<option value='".$row["id"]."' selected>".$row["typename"]."</option>";
                                                    }
                                                    else
                                                    {
                                                        echo " <option value='".$row["id"]."'>".$row["typename"]."</option>";
                                                    }
                                                }
                                                ?>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Author：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="author" type="text" id="author" size="30" value="<?php echo $author;?>" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Com：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="com" type="text" id="com" size="30" value="<?php echo $com;?>" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Hits：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="hits" type="text" id="hits" size="30" value="<?php echo $hits;?>" /></td>
                                    </tr>

                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Content：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td height="30" colspan="2" bgcolor="#f2f2f2">
                                            <textarea name="content" id="content" cols="45" rows="5" class="ckeditor"><?php echo $content;?></textarea></td>
                                    </tr
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
