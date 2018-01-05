<?php
require '../public/init.php';
$id=  zsStr(@$_GET["id"]);
$sql="select product.*,productList.typename,productList.idpath,productList.id as tid from product inner join productList on product.typeid=productList.id  where product.id='$id'";
$productInfo=$db->select($sql,1);
$menu=$productInfo["idpath"]."_".$productInfo["tid"];
$menuInfo=$action->classPath($menu,'>');
if(empty ($productInfo))
{
    weberror();
}

$db->sql("update product set hits=hits+1 where id='$id'");



//var_dump(explode("#", $productInfo["picurls"]));
preg_match_all("/(.*?)@(.+?)#/is",$productInfo["picurls"],$arr,PREG_SET_ORDER);
//var_dump($arr);




?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-CN"/>
    <title><?php echo $productInfo["title"]?> - <?php echo $productInfo["typename"]?> - <?php echo $webtitle;?></title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link rel="stylesheet" href="../css/base_v4.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../css/global.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="../css/goods_list.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="../css/product.css" media="all"/>
    <script type="text/javascript" src="show2_files/jquery-1.js"></script>
</head>
<body>

<div style="position: absolute; visibility: hidden; left: 704px; top: 68px; width: 218px;" class="suggest-container"></div>

<!--head_top-start-->
<!-- header -->
<?php
include WEBDIR."/include/top.php";
?>

<!--head_top-end-->
<div class="wrapper">		<!-- 直显 -->


    <!-- 伸缩 -->

    <!-- crumb -->
    <div class="crumb">&nbsp;&nbsp;您所在的位置：
        <?php echo "<a href=\"$webdir\">".$webname."</a>";?><?php echo $menuInfo;?>> <?php echo $productInfo["title"]?>
        <span class="span_buytip">全场免运费，满50元支持货到付款（仅限大陆地区）</span>
    </div>

    <div class="mainbox clearfix">
        <!-- sidebar -->
        <div class="sidebar">
            <div class="div_sideeach div_prokinds">
                <h2 class="h2_prokinds">产品分类</h2>
                <?php

                $dyId=$productInfo["tid"];
                if($productInfo["idpath"]!="0"){
                    $arrs=explode ("_", $productInfo["idpath"]);
                    $dyId=$arrs[1];
                }
                //echo $dyId;
                $leftMenu=$action->ProductShowLeftMenu($dyId);
                ?>


            </div>



            <!-- 购买过本商品的用户还购买过 start -->
            <div id="rec_banner2">
                <div class="bfd_box">
                    <h1 class="bfd_title"><?php echo $webname;?>推荐商品</h1>
                    <div class="bfd_contentbox">
                        <div class="bfd_pre_btn"></div>
                        <ul class="bfd_content">
                            <?php
                            $productList=$productList=$action->productList(' and recommend=1',8);
                            foreach($productList as $row)
                            {
                                echo "<li  class=\"bfd_item\">";
                                echo "<span class=\"bfd_product_img\">";
                                echo "<a href='".$webdir."product/show.php?id=".$row["id"]."' target='_blank' >";
                                echo "<img title='".$row["title"]."' src='".$row["picurl"]."' height='145' width='145'>";
                                echo "</a>";
                                echo "</span>";
                                echo "<span class=\"bfd_price\">￥{$row["price"]}</span>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                        <div class="bfd_next_btn" style=" float:right"></div>

                    </div>
                </div>
                <div style="display:none" class="bfd_page">1/2</div>
            </div>
            <!-- 购买过本商品的用户还购买过 end -->

            <!-- 浏览过本商品的用户还浏览过 start -->
            <div id="rec_banner1">
                <div class="bfd_box">
                    <h1 class="bfd_title"><?php echo $webname;?>热销商品</h1>
                    <div class="bfd_contentbox">
                        <div class="bfd_pre_btn"></div>
                        <ul class="bfd_content">   <?php
                            $productList=$productList=$action->productList(' and hot=1',8);
                            foreach($productList as $row)
                            {
                                echo "<li  class=\"bfd_item\">";
                                echo "<span class=\"bfd_product_img\">";
                                echo "<a href='".$webdir."product/show.php?id=".$row["id"]."' target='_blank' >";
                                echo "<img title='".$row["title"]."' src='".$row["picurl"]."' height='145' width='145'>";
                                echo "</a>";
                                echo "</span>";
                                echo "<span class=\"bfd_price\">￥{$row["price"]}</span>";
                                echo "</li>";
                            }
                            ?></ul>
                        <div class="bfd_next_btn" style=" float:right"></div>

                    </div>
                </div>

            </div>
            <!-- 浏览过本商品的用户还浏览过 end -->




            <!-- 降价商品 start -->
            <div id="reco_show">  <div class="bfd_box">    <div class="div_sideeachb" style="margin:0;">      <h2 class="h2_sideeachb h2_sidehistory"><?php echo $webname;?>降价商品</h2>    </div>    <ul class="ul_d1 ul_sidehistory wly_items">   <?php
                        $productList=$productList=$action->productList(' and drops=1',8);
                        foreach($productList as $row)
                        {
                            echo "<li>";

                            echo "<a href='".$webdir."product/show.php?id=".$row["id"]."' target='_blank' >";
                            echo "<img title='".$row["title"]."' src='".$row["picurl"]."' height='82' width='82' class=\"wly_img\">";
                            echo "</a>";

                            echo "<h4 class=\"h4_title wly_title\">￥{$row["price"]}</h4>";
                            echo "</li>";
                        }
                        ?> </ul>  </div></div>
            <!-- 降价商品 end -->

        </div>



        <div class="maincont">
            <!-- prodetailsinfo -->
            <div class="prodetailsinfo">
                <div class="proviewbox">
                    <div class="probigshow">
                        <a class="a_probigshow" href="#" ref="<?php echo $productInfo["picurl"];?>"><img src="<?php echo $productInfo["picurl"];?>" alt="" class="js_goods_image_url" width="420" height="420"></a>
                        <div class="zoomplepopup"></div><div id="probig_preview"><img src="" alt="" width="1024" height="1024"></div></div>
                    <div class="div_prothumb">
                        <div class="thumbporbox">
                            <ul class="ul_prothumb">
                                <li><a href="<?php echo $productInfo["picurl"];?>" target="_blank"><img longdesc="<?php echo $productInfo["picurl"];?>" src="<?php echo $productInfo["picurl"];?>" alt="" width="60" height="60"></a></li>
                                <?php

                                foreach($arr as $row)
                                {
                                    echo "<li><a href=\"{$row[2]}\"><img longdesc=\"{$row[2]}\" src=\"{$row[2]}\" alt=\"{$row[1]}\" title=\"{$row[1]}\" width=\"60\" height=\"60\"></a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <span class="span_prev span_prevb">prev</span><span class="span_next">next</span>
                    </div>

                    <!--					<div class="div_prolinks">


                                        </div>-->

                </div>

                <!-- prodbaseinfo_a -->
                <div id="protop" class="prodbaseinfo_a">
                    <h2 class="h2_prodtitle"><?php echo $productInfo["title"]?></h2>
                    <ul class="ul_prodinfo">

                        <li class="li_normalprice"><span class="span_title">后盾价：</span><b class="b_proprice"><?php echo $productInfo["price"]?></b>元</li>
                        <li class="li_marketprice"><span class="span_title">市场价：</span><span class="span_marketprice"><?php echo $productInfo["yprice"]?></span>元</li>
                        <li class="li_prono"><span class="span_title">编号：</span><span class="span_no"><?php echo $productInfo["numbers"]?></span></li>

                        <li class="li_brand"><span class="span_title">品　牌：</span>

                            <?php
                            $ppinfo=$db->select("select * from productPP where id='".$productInfo["ppid"]."'",1);

                            if(!empty($ppinfo))
                            {
                                echo "<A class=\"a_brand\" href=\"\"><span style=\"color:#c00;\">".$ppinfo["ppname"]."</span></a>";
                            }
                            else
                            {
                                echo "无";
                            }
                            ?>

                        </li>

                        <li class="li_brand"><span class="span_title">库&nbsp;&nbsp;&nbsp;存：</span> <?php echo $productInfo["kucun"];?></li>
                    </ul>



                    <div class="div_choose">

                        <p class="p_inputnum">我要买：<input id="input_goods_buy_number" class="txt" name="input_goods_buy_number" value="1" type="text"> 件 <span class="red" id="input_goods_buy_number_error"></span> </p>
                    </div>

                    <div class="div_buybtn">
                        <a id="a_js_ga_mainbuy" class="a_tobuy" title="立刻购买" style="cursor:pointer;">立即购买</a>
                        <a class="a_addtofavor" title="加入收藏夹" style="cursor:pointer;">加入收藏</a></div>

                    <div class="div_proabs">
                        <ul class="ul_proabs">
                            <li>浏览：<b style="display: ;" id="js_jiaohao_view"><?php echo $productInfo["hits"];?></b> 次 　<!-- 出售： <b class="b_numa">14847</b> 件　收藏：<b class="b_numa">2685</b> 次--></li>
                            <li>评分：<img src="../image/icon_star_5.gif" alt="" width="63" height="10"> <a class="a_tocomments" href="#h3_commentsherf"></a></li>
                            <li class="li_guarantee">消费保障计划：<img title="7天无条件退换货" src="show2_files/bz_ico_1.png"/>
                                <img src="show2_files/bz_ico_2.png" title="百万预赔金 让您购包无忧"/>
                                <img src="show2_files/bz_ico_3.png" title="7天价格保障"/>
                                <img src="show2_files/bz_ico_4.png" title="有诉必应 有问必答">
                                <img title="专业配送 支持货到付款" src="show2_files/bz_ico_5.png"></li>
                        </ul>
                    </div>

                </div>
                <div class="clear"></div>
            </div>

            <!-- prodetailsinfo_a over prodetailsinfo_b -->
            <div id="prodinfobox" name="prodinfobox" class="tabbox_a prodetailsinfo_b">

                <h3 class="tabtitle tabtitle_1"><span class="now">商品展示</span></h3>
                <div class="tabcont prodetailsdes">
                    <div style="top: 31816px;" class="floatquick">
                        <h3 class="h3_op">操作</h3><a class="a_totop" href="#protop">top</a>
                        <p class="p_quickbtn"><a class="a_quickbuy" style="cursor:pointer;">购买</a><a class="a_addtofavor" style="cursor:pointer;">收藏</a><!-- showLogin() 加载ajaxlogin 删除页面底部直接点击弹出层 js --><a class="a_quickask" href="#addconsult">咨询</a></p>
                    </div>

                    <div class="output">
                        <!-- 发布区域 -->
                        <!---->

                        <?php echo $productInfo["content"];?>
                    </div>
                </div>
                <h2 class="tabtitle tabtitle_2"><span>商品参数</span></h2>
                <h3 class="h3_eachtitle">商品参数</h3>
                <div class="tabcont proargument">
                    <ul class="ul_property">
                        <li><span class="span_title">性别：</span>女</li>
                        <li><span class="span_title">材质：</span>牛皮</li>
                        <li><span class="span_title">颜色系：</span>桔色</li>
                        <li><span class="span_title">流行元素：</span>单扣</li>
                        <li><span class="span_title">大小：</span>中型包</li>
                        <li><span class="span_title">风格：</span>优雅,经典,简约</li>
                        <li><span class="span_title">尺寸：</span>其它</li>
                        <li><span class="span_title">场合：</span>休闲,其它</li>
                        <li><span class="span_title">款式：</span>水饺形</li>
                        <li><span class="span_title">图案：</span>纯色</li>
                        <li><span class="span_title">内部结构：</span>拉链夹层,内侧拉链袋,手机袋,证件袋</li>
                        <li><span class="span_title">打开方式：</span>翻盖</li>
                        <li><span class="span_title">材料产地：</span>中国</li>
                        <li><span class="span_title">成品产地：</span>中国</li>
                    </ul>
                </div>
                <h2 class="tabtitle tabtitle_3"><span>售前咨询</span></h2>
                <h3 class="h3_eachtitle">售前咨询</h3>
                <div class="tabcont proconsult">
                    <h3 class="h3_comtip">如购买过程中有任何疑问，欢迎向我们咨询<span><a href="#addconsult" class="red">我要咨询</a></span></h3>

                    <div id="zixunLists">
                        <div style="text-align:center;">
                            <img src="/Images/loading.gif" />
                            <br/>数据加载中,请您耐心等待,<span style='color:#f00;font-weight:bold;'><?php echo $webname;?></span>离不开您的支持...
                        </div>
                    </div>

                    <div id="addconsult" class="addconsultbox">
                        <form id="consultInfo">
                            <input type="hidden" name="pid" value="<?php echo $productInfo["id"];?>" />
                            <h3>发表咨询 <span>(如购买过程中有任何疑问，欢迎向我们咨询)</span></h3>
                            <p class="p_item">
                            </p><div style="padding-left:10px;">
                                <div><label class="itemtitle">咨询类型：</label></div>
                                <div id="consultation_type" style="padding:5px 10px 5px 10px;display:inline;">
                                    <?php
                                    $consultType = $db->select("select * from consultType where typezt=1 order by typeorder");

                                    foreach($consultType as $typeList)
                                    {
                                        echo '<input checked class="input_consultation_type" id="input_consultation_type" name="input_consultation_type" value="'.$typeList["id"].'"  type="radio">&nbsp;'.$typeList["typename"].'&nbsp;';
                                    }
                                    ?>


                                </div>
                            </div>

                            <p class="p_item">
                                <label class="itemtitle">咨询内容：</label>
                                <textarea id="textarea_consultation_content" class="txta" name="txta"></textarea>
                                <span id="contentError"></span>
                            </p>
                            <p class="p_item">
                                <label class="itemtitle">验证字符：</label>
                                <input id="verifycode" onfocus="codeF('#imgregister_verifycode')" class="txt" name="verifycode" type="text">
                                <img id="imgregister_verifycode" src="show2_files/space.gif"  style="vertical-align: middle; cursor: pointer;" title="" alt=""><span id="codeError"></span>
                            </p>
                            <p class="p_item p_btn">
                                <input class="btn" value="提交我的咨询" type="submit">
                            </p>
                        </form>
                    </div>
                </div>

                <h2 class="tabtitle tabtitle_4"><span>评价详情</span></h2>
                <h3 class="h3_eachtitle">评价详情</h3>
                <div class="tabcont procomments" id="comment">

                </div>




                <h2 class="tabtitle tabtitle_5"><span>如何购买</span></h2>
                <h3 style="display: none;" class="h3_eachtitle hidden">如何购买</h3>
                <div style="display: none;" class="tabcont prohowtobuy hidden">
                    <img src="show2_files/howtobuy.png" alt="如何购买" usemap="#map_howtobuy" width="740" height="803">
                    <map name="map_howtobuy" id="map_howtobuy">
                        <area shape="rect" coords="123,155,196,171" href="http://www.mbaobao.com/shipping-cost.html" target="_blank">
                        <area shape="rect" coords="284,659,458,673" href="http://www.mbaobao.com/payment-options.html" target="_blank">
                        <area shape="rect" coords="182,294,330,308" href="http://www.mbaobao.com/cod.html" target="_blank">
                        <area shape="rect" coords="300,746,440,761" href="http://www.westernunion.com/info/selectCountry.asp" target="_blank">
                    </map>
                </div>

                <h2 class="tabtitle tabtitle_6"><span class="">售后服务</span></h2>
                <h3 style="display: none;" class="h3_eachtitle hidden">售后服务</h3>
                <div style="display: none;" class="tabcont proafterbuy hidden">
                    <img src="show2_files/afterbuy.png" alt="售后服务" usemap="#map_afterbuy" width="740" border="0" height="777">
                    <map name="map_afterbuy" id="map_afterbuy">
                        <area shape="rect" coords="160,598,247,614" href="http://www.mbaobao.com/return-policy.html#return-policy" target="_blank">
                    </map>
                </div>

                <div class="div_buybtn div_buybtnr">
                    <a id="a_js_ga_quickbuy" class="a_tobuy" style="cursor:pointer;">立即购买</a>

                </div>

            </div>

        </div>
    </div>
    <!-- wrapper over -->



    <script type="text/javascript" src="show2_files/pshow2.js"></script>



</div>

<!--footer-start-->

<?php
include WEBDIR."/include/foot.php";
?>


<script type="text/javascript">
    var kucun = <?php echo $productInfo["kucun"];?>;
    $(function(){
        $('.a_addtofavor').click(function(){
            scs();
        });

        $('.a_tobuy,.a_quickbuy').click(function(){
            if(kucun==0)
            {
                $('#dialogInfo').html('<?php echo $webname;?>遗憾的提醒您：您所订购的商品：<b><?php echo $productInfo["title"];?></b><br/>库存不足暂时无法下单<br/>您可以暂时收藏该商品等待库存充裕后再购买,对您造成的困扰<?php echo $webname;?>深表歉意,感谢您的支持！');
                messageDialog('<?php echo $webname;?>订单提示',500,200,'确定');
                return false;
            }
            if(isNaN($('#input_goods_buy_number_error').val()))
            {
//              $(this).unbind("blur");

                $('#input_goods_buy_number_error').html('购买数量请填写一个整数!');
                $('#input_goods_buy_number').val('1');

                return false;
            }
            else
            {
                $('#input_goods_buy_number_error').html('');
            }

            jQuery.ajax({
                url:WEBDIR+"ajax/ajaxCart.php",
                type:"POST",
                data:"id=<?php echo $productInfo["id"];?>&action=add&sum="+$('#input_goods_buy_number').val(),
                success:function(data){

                    switch(data)
                    {
                        case "nologin":
                            LoginDialog();
                            break;
                        case "2":
                            $('#input_goods_buy_number_error').html('购买数量请填写一个整数!');
                            break;
                        case "4":
                            $('#dialogInfo').html('<?php echo $webname;?>遗憾的提醒您：您所订购的商品：<?php echo $productInfo["title"];?><br/>库存不足您所需的：<span style="color:#f00;font-weight:bold;">'+$('#input_goods_buy_number').val()+'</span> 件<br/>您可以暂时收藏该商品等待库存充裕后再购买,对您造成的困扰<?php echo $webname;?>深表歉意,感谢您的支持！');
                            messageDialog('<?php echo $webname;?>订购提示',500,200,'确定');
                            break;
                        case "1":
                            location.href=WEBDIR+"cart.php";
                            break;
                        default:
                            $('#dialogInfo').html('<?php echo $webname;?>提示您,该商品已下架,对您造成的困扰<?php echo $webname;?>深表歉意,感谢您的支持！');
                            messageDialog('<?php echo $webname;?>订购提示',500,200,'确定');
                            break;
                    }
                },
                error:function(){
                    $('#dialogInfo').html('网络连接失败,请稍后再试!');
                    messageDialog('<?php echo $webname;?>通信错误',500,200,'确定');
                }
            });


            return false;
        });

        $('#input_goods_buy_number').blur(function(){

            if(isNaN($(this).val()))
            {
//              $(this).unbind("blur");

                $('#input_goods_buy_number_error').html('购买数量请填写一个整数!');
                $(this).val('1');

                return false;
            }
            else
            {
                $('#input_goods_buy_number_error').html('');
            }

            if($(this).val()>kucun){

                $('#dialogInfo').html('<?php echo $webname;?>遗憾的提醒您：您所订购的商品：<?php echo $productInfo["title"];?><br/>库存不足您所需的：<span style="color:#f00;font-weight:bold;">'+$(this).val()+'</span> 件,目前仅剩余库存：'+kucun+'件<br/>您可以暂时收藏该商品等待库存充裕后再购买,对您造成的困扰<?php echo $webname;?>深表歉意,感谢您的支持！');
                messageDialog('<?php echo $webname;?>订购提示',500,200,'确定');
                return false;
            }

        });


//咨询提交
        $('#consultInfo').submit(function(){
            if(!$('#textarea_consultation_content').val())
            {
                $('#contentError').html('请填写咨询内容');
                $('#textarea_consultation_content').select();
                return false;
            }
            if(!$('#verifycode').val())
            {
                $('#codeError').html('请填写验证码');
                $('#verifycode').select();
                return false;
            }
            // $(this).removeClass("ui-state-error");
            jQuery.ajax({
                url:WEBDIR+"ajax/ajaxProductConsultSava.php",
                type:"POST",
                data:$('#consultInfo').serialize(),
                success:function(data){

                    switch(data)
                    {
                        case "nologin":
                            LoginDialog();
                        case "2":
                            $('#codeError').html('验证码输入错误');
                            $('#verifycode').select();
                            break;
                        case "1":
                            $('#verifycode,#textarea_consultation_content').val('');
                            get_page('zixunList',''+WEBDIR+'ajax/ajaxProductZx.php?id=<?php echo $productInfo["id"];?>');
                        <?php if($webProductZixun=="Y"){
                            echo "$('#dialogInfo').html('售前咨询提交成功！<br/>留言信息需要通过审核后才会显示,请关注！');";
                        }else{
                            echo "$('#dialogInfo').html('售前咨询提交成功！<br/>{$webname}的发展离不开您的支持!感谢有你！');";
                        }
                        ?>
                            messageDialog('<?php echo $webname;?>提示',500,200,'确定');
                            break;
                        default:
                            $('#verifycode,#textarea_consultation_content').val('');
                            $('#dialogInfo').html('提交失败,请稍后再试!');
                            messageDialog('<?php echo $webname;?>提示',500,200,'确定');
                    }
                },
                error:function(){
                    $('#dialogInfo').html('通信失败,请稍后再试!');
                    messageDialog('<?php echo $webname;?>提示',500,200,'确定');
                }
            });
            return false;
        })
    });


    function scs()
    {
        jQuery.ajax({
            url:WEBDIR+"ajax/ajaxUserFavorites.php?id=<?php echo $id;?>",
            type:"GET",
            success:function(data){
                switch(data){
                    case "1":
                        $('#dialogInfo').html('产品：<?php echo $productInfo["title"];?><br/>收藏成功,您可以通过会员中心我的收藏进行查看!');
                        messageDialog('<?php echo $webname;?>收藏提示',500,200,'确定');
                        break;
                    case "2":
                        $('#dialogInfo').html('产品：<?php echo $productInfo["title"];?><br/>您的收藏夹中已有该商品,无需收藏!');
                        messageDialog('<?php echo $webname;?>收藏提示',500,200,'确定');
                        break;
                    case "0":
                        $('#dialogInfo').html('产品：<?php echo $productInfo["title"];?><br/>收藏失败,请联络管理员!');
                        messageDialog('<?php echo $webname;?>收藏提示',500,200,'确定');
                        break;
                    default:
                        LoginDialog('sc','<?php echo $id;?>');
                }
            },
            error:function(){
                $('#dialogInfo').html('通信失败,请稍后再试!');
                messageDialog('<?php echo $webname;?>通信错误',500,200,'确定',function(){get_page('ajax.php');});
                return false;
            }
        });
    }
    get_page('zixunList',''+WEBDIR+'ajax/ajaxProductZx.php?id=<?php echo $productInfo["id"];?>');
    get_page('comment',''+WEBDIR+'ajax/ajaxProductPl.php?id=<?php echo $productInfo["id"];?>');
</script>


</html>
<!--content ok-->
<!-- OK -->