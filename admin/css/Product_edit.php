<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/productType.class.php';

$id=$_GET["id"];
$ptype= new ProductType();

$_SESSION["file_info"] = array();
$_SESSION["urlfile_info"]=array();  //保存图片的URL
$_SESSION["fileid"]="";

$productID=time(); //
$productID.=rand(333,555)*1000;
//根据SWFUPload的思路，添加我们要得东西

$edit = new DbMysql();

$result=$edit->select("select * from product where id=$id",1);

$title=$result["title"];
$productID=$result["numbers"];
$typeid=$result["typeid"];
$hot=$result["hot"];
$drops=$result["drops"];
$recommend=$result["recommend"];
$kucun=$result["kucun"];
$hits=$result["hits"];
$picurl=$result["picurl"];
$content=$result["content"];
$ppid=$result["ppid"];
$picurls=$result["picurls"];
$price=$result["price"];
$yprice=$result["yprice"];
//echo $picurls;
//  echo "<hr>";

$picurlArray=array_filter(explode("#", $picurls));
$menu=$ptype->floption(0,$typeid);
?>

<head>
    <meta charset="UTF-8">
    <title>Update goods</title>
    <script type="text/javascript" src="../image/jquery-1.6.js"></script>
    <script type="text/javascript">


        function imgdel(pid)
        {
            // 移动 thumbnails 这个容器下面的
            // altok _ pid
            // 移除掉
            var ydiv = document.getElementById('altok'+pid);
            document.getElementById("thumbnails").removeChild(ydiv);
            // 不光要移动咱们视觉上得删除
            //还要删除session
            // 删除服务器上的图片
            $.ajax({
                type:"post",
                url:"delimg.php?id="+pid
            });
        }
        function editimgdel(id)
        {
            var ydiv=document.getElementById('editimg'+id);
            document.getElementById("editimg").removeChild(ydiv);
        }
    </script>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background-color: #F8F9FA;
        }
        .imgshow
        {
            float:left;
            border:1px solid #ff0000;
            margin-right: 10px;
            margin-bottom: 5px;
            padding:5px;
        }
        -->
    </style>
    <link href="images/skin.css" rel="stylesheet" type="text/css" />
    <!--<script src="../ckeditor/ckeditor.js"></script>-->
    <script>
        function test()
        {
            if(document.admin.numbers.value=='')
            {
                alert('Product number can not be null');
                return false;
            }
            if(document.admin.title.value=='')
            {
                alert('Product name can not be null');
                return false;
            }
            if(document.admin.typeid.value=='')
            {
                alert('Classification can not be null');
                return false;
            }
            if(document.admin.kucun.value=='')
            {
                alert('Stock can not be null');
                return false;
            }
            if(document.admin.hits.value=='')
            {
                alert('Please input the default the number of view');
                return false;
            }
            if(document.admin.picurl.value=='')
            {
                alert('Please choose a picture for the product');
                return false;
            }
            if(CKEDITOR.instances.content.getData()=='')
            {
                alert('Please input product introduction');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<form name="admin" id="admin"enctype="multipart/form-data" method="POST" action="product_editsava.php?id=<?php echo $id;?>" onsubmit="return test();">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
            <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
                    <tr>
                        <td height="31"><div class="titlebt">Goods Management</div></td>
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
                            <td class="left_txt">Current position：Modify product </td>
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
                                        <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Products' details</td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                    <tr>
                                        <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Product number：</td>
                                        <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="numbers" type="text" id="numbers" size="30" value="<?php echo $productID;?>" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Product number, used for goods management, system will automatically generate if no product number</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Product name：</td>
                                        <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="title" type="text" id="title" size="30" value="<?php echo $title;?>" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Product name ,used for display</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Product brand：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                                            <select name="ppid" id="ppid">
                                                <option value="0">No brand</option>
                                                <?php
                                                $result=$edit->select("select * from productPP order by pporder");
                                                foreach($result as $row)
                                                {
                                                    if($ppid==$row["id"])
                                                    {
                                                        echo "<option value='".$row["id"]."' selected>".$row["ppname"]."</option>";
                                                    }
                                                    else{
                                                        echo "<option value='".$row["id"]."'>".$row["ppname"]."</option>";
                                                    }}
                                                ?>
                                            </select></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Brand, used to view according to the brand</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Classification：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                                            <select name="typeid" id="typeid">
                                                <option value="">Please choose classification</option>
                                                <?php
                                                echo $menu;
                                                ?>
                                            </select></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Classification, used to view according to the classfication</td>
                                    </tr>

                                    <tr>
                                        <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Prodect property：</td>
                                        <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2" class="left_txt"><input name="hot" type="checkbox" value="1" <?php
                                            if($hot==1)
                                            {echo "checked";}
                                            ?>>hot selling <input name="drop" type="checkbox" value="1" <?php
                                            if($drops==1)
                                            {
                                                echo "checked";
                                            }
                                            ?>>on sale <input name="recommend" type="checkbox" value="1"
                                                <?php
                                                if($recommend==1)
                                                {
                                                    echo "checked";
                                                }
                                                ?>>recommand</td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The name of the product, used for the front desk display</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Stock：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="kucun" type="text" id="kucun" size="30" value="<?php echo $kucun;?>" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">If the stock equals 0, you cannot place an order</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">The number of view：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="hits" type="text" id="hits" size="30" value="<?php echo $hits;?>"/></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">You can initialize a quantity to show the number of views of the item</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Market Price：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="yprice" type="text" id="yprice" value="<?php echo $yprice;?>" size="30" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Our Price：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2"><input name="price" type="text" id="price" value="<?php echo $price;?>" size="30" /></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Picture：</td>
                                        <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2" class="left_txt">
                    <input type="file"  id="picurl" style="width:280px;" name="picurl"/>
                </td>
<!--                                        <td width="32%" height="30" bgcolor="#f2f2f2" class="left_txt"><input type="text" id="picurl" style="width:280px;" name="picurl" value="<?php echo $picurl;?>"/></td>
                                        <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"><iframe name="upfile" frameborder="0" width="300" height="25" src="uploadPic.php"></iframe></td>-->
                                    </tr>
<!--                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">已有图集：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2" colspan="2" class="left_txt">
                                            <div id="editimg">
-->                                                <?php
                                                //echo $picurls;
//                                                foreach($picurlArray as $key=>$v)
//                                                {
//                                                    $imginfo=explode("@",$v);
//                                                    echo "<div class='imgshow' id='editimg$key'><img width='100' height='100' src='";
//                                                    echo $imginfo[1];
//                                                    echo "'> <A href='javascript:editimgdel($key)'>删除</a> <div style='margin-top:5px;'>描述:<input type='text' style='width:100px;' value='$imginfo[0]' name='editimginfo$key'></div></div>";
//                                                }
                                                ?><!--</div>
                                        </td>
                                    </tr>-->

<!--                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">商品图集：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td width="32%" height="30" bgcolor="#f2f2f2" colspan="2" class="left_txt"><?php
                                          //  if( !function_exists("imagecopyresampled") ){
                                                ?>
                                                <div class="message">
                                                    <h4><strong>Error:</strong> </h4>
                                                    <p>Application Demo requires GD Library to be installed on your system.</p>
                                                    <p>Usually you only have to uncomment <code>;extension=php_gd2.dll</code> by removing the semicolon <code>extension=php_gd2.dll</code> and making sure your extension_dir is pointing in the right place. <code>extension_dir = "c:\php\extensions"</code> in your php.ini file. For further reading please consult the <a href="http://ca3.php.net/manual/en/image.setup.php">PHP manual</a></p>
                                                </div>
                                                <?php
                                        //    } else {
                                                ?>

                                                <div style="display: inline; border: solid 1px #7FAAFF; background-color: #C5D9FF; padding: 2px;">
                                                    <span id="spanButtonPlaceholder"></span>
                                                </div>

                                                <?php
                                        //    }
                                            ?>
                                            <div id="divFileProgressContainer" style="height: 75px;"></div>
                                            <div id="thumbnails"> </div>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Product Introduction：</td>
                                        <td bgcolor="#f2f2f2">&nbsp;</td>
                                        <td height="30" colspan="2" bgcolor="#f2f2f2">
                                            <textarea name="content" id="content" cols="45" rows="5" class="ckeditor"><?php echo $content;?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Modify" />
                                            &nbsp;
                                            <input type="reset" name="button2" id="button2" value="Reset" /></td>
                                    </tr>

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
</form>
</body>
</html>
