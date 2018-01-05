<?php
require 'public/init.php';
?>
<html >
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $webtitle;?></title>
    <link rel="stylesheet" rev="stylesheet" href="css/base_v4.css" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <meta content="<?php echo $webkey;?>" name="Keywords" />
    <meta content="<?php echo $webDescription;?>" name="Description" />
</head>
<body>
<?php
include WEBDIR.'/include/top.php';
?>


<script type="text/javascript" src="js/lunbo.js">
</script>

<!-- 焦点 -->
<div class="wrapper m-bottom lazybox mbb-survey">

    <div id="1001">
        <div class="banner-focus" id="js-index-banner">
            <div class="focusbanner" style="visibility: visible;">
                <a title=""><img alt="" src="Images/lunbo/3.jpg"></a>
            </div>
        </div>
    </div>
    <div id="1002"><div class="news-tab m-bottom" id="news-tab" style="height: 340px;">
            <h2 class="news-tab-h2 tabnow">
                <a href="#" class="news-tab-a">Hot Activities</a>
            </h2>
            <div style="visibility: visible;" class="news-box">
                <ul class="ul-list-s2">
                    <?php
                    $list=$action->getArticle(' and typeid=7 ');
                    foreach($list as $rows){
                        echo "<li><a href=\"article/show.php?id={$rows["id"]}\" class=\"ul-list-s1-a\" style='color: #ffc300; font-size: 15px; font-weight: bold;'>".strLeft($rows["title"],15,'...')."</a></li>";
                    }
                    ?>
                </ul>
            </div>
    </div>
</div>
<!-- 热门分类 热门分类右侧 -->


<!-- 广告1 -->
<div class="gg-4 lazybox" id="1019"><a title="金鱼品牌上线" href=""><img src="ad/2.jpg" src="Images/blank.png"></a>
</div>


<!-- 2F -->
<div class="wrapper m-bottom" id="1017"><div class="h-floor lazybox" id="hotbrand">
        <div class="floor-title">
            <h2>
                <a style="font-size: 20px;" href="">Hot Brands</a>
            </h2>
        </div>
        <div class="floor-box">
            <div class="brand-list">
                <div class="brand-wrap">
                    <?php
                    $ppInfo=$action->getPP(' and recommend=\'1\'');
                    foreach($ppInfo as $rows)
                    {
                        echo "<a class=\"b-item exc\" href='{$webdir}product/?ppid={$rows["id"]}'><img height=\"48\" width=\"111\" src='".str_replace("../","",$rows["picurl"])."' /><em>{$rows["ppname"]}</em></a>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>





<!-- 广告2 -->
<div class="gg-4 lazybox" id="1020"><a title="精品包包鉴赏汇" href=""><img src="ad/2.jpg" src="Images/blank.png"></a>
</div>






<!-- 6F -->
<div class="wrapper m-bottom lazybox" id="1012">
    <div class="h-floor" id="bbdigital">
        <div class="floor-title">
            <h2>
                <a style="font-size: 20px;">Hot Goods</a>
            </h2>

        </div>

        <ul class="h-list h-list-ul-2">
            <?php
            $productList=$action->getProduct(2,5);

            foreach($productList as $rows)
            {
                echo "<li><div class=\"pic\">";
                echo "<A href='{$webdir}product/show.php?id={$rows["id"]}' target='_blank'><img src='".str_replace("../","",$rows["picurl"])."' src='Images/blank.png' title='' height='174' width='174' /></a></div>";
                echo "<h3 class=\"bb-info\"><a target=\"_blank\" class=\"bb-info-a\" href='{$webdir}product/show.php?id={$rows["id"]}'>".strLeft($rows["title"],20,"...")."</a><span class=\"mbb-p-title-a\">Price:</span><strong class=\"mbb-price\">￥{$rows["price"]}</strong><s>￥{$rows["yprice"]}</s></h3></li>";
            }
            ?>


        </ul>
    </div>
</div>

<!-- 本周特价 热门评论 -->
<div class="wrapper m-bottom">
    <div id="1013"><div id="bbsale">
            <div class="h-floor">
                <div class="floor-title">
                    <h2>
                        <a style="font-size: 20px;">On-Sale Goods</a>
                    </h2>
                </div>
            </div>
            <div class="floor-box sale-list">
                <ul class="h-list h-list-ul-3 lazybox">
                    <?php
                    $productList=$action->getProduct(3,6);
                    foreach($productList as $rows)
                    {
                        echo "<li><div class=\"pic\">";
                        echo "<A href='{$webdir}product/show.php?id={$rows["id"]}' target='_blank'><img src='".str_replace("../","",$rows["picurl"])."' src='Images/blank.png' title='' height='174' width='174' /></a></div>";
                        echo "<h3 class=\"bb-info\"><a target=\"_blank\" class=\"bb-info-a\" href='{$webdir}product/show.php?id={$rows["id"]}'>".strLeft($rows["title"],20,"...")."</a><span class=\"mbb-p-title-a\">Price:</span><strong class=\"mbb-price\">￥{$rows["price"]}</strong><s>￥{$rows["yprice"]}</s></h3></li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
    <div id="1014"><div id="hotcomment">
            <div class="h-floor">
                <div class="floor-title">
                    <h2>
                        <a style="font-size: 20px;">Hot Comments</a>
                    </h2>
                </div>
            </div>
            <div class="floor-box comment-list lazybox">
                <div class="item">
                    <div class="pic">
                        <a target="" rel="nofollow" href=""><img src="Images/zs/纯棉！秋装新款！男装男士中长款水洗休闲修身单排扣翻领风衣.jpg" src="Images/blank.png" title="纯棉！秋装新款！男装男士中长款水洗休闲修身单排扣翻领风衣" class="comm-img" height="80" width="80"></a>
                    </div>
                    <div class="con">
                        <p class="info">
                            <strong class="fl">masuk</strong><span class="star star-5"></span>
                        </p>
                        <p class="c-con">
                            <a target="" class="gray" rel="nofollow" href="">It's very nice. There's no color difference with the picture. The quality is good.！！！！！</a>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <a target="_blank" rel="nofollow" href=""><img src="Images/zs/新款2011秋装女装加大码加肥显瘦MY595蕾丝娃娃衫长款上衣连衣裙.jpg" src="Images/blank.png" title="纯棉！秋装新款！男装男士中长款水洗休闲修身单排扣翻领风衣" class="comm-img" height="80" width="80"></a>
                    </div>
                    <div class="con">
                        <p class="info">
                            <strong class="fl">80470</strong><span class="star star-4"></span>
                        </p>
                        <p class="c-con">
                            <a target="_blank" class="gray" rel="nofollow" href="">
                               It's nice and beautiful, like the picture, and both sides are different. The front is very atmosphere, the opposite is very...
                            </a>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <a target="_blank" rel="nofollow" href=""><img src="Images/zs/新款精品商务正装 长袖衬衫 条纹男士衬衫 抗皱免烫 时尚休闲.jpg" src="Images/blank.png" title="[浪美]青春米拉系列牛皮单肩包 肉粉色" class="comm-img" height="80" width="80"></a>
                    </div>
                    <div class="con">
                        <p class="info">
                            <strong class="fl">mengx</strong><span class="star star-5"></span>
                        </p>
                        <p class="c-con">
                            <a target="_blank" class="gray" rel="nofollow" href="">

                                Finally, it can be evaluated, this quality is really super good, delivery speed is especially fast second days received...
                            </a>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <a target="_blank" rel="nofollow" href=""><img src="Images/zs/悠然大码女装2011秋装新款加大码2088翻领两穿假两件修身长袖衬衫.jpg" src="Images/blank.png" title="『米奇』  粉红色  斜挎包" class="comm-img" height="80" width="80"></a>
                    </div>
                    <div class="con">
                        <p class="info">
                            <strong class="fl">jill.</strong><span class="star star-5"></span>
                        </p>
                        <p class="c-con">
                            <a target="_blank" class="gray" rel="nofollow" href="">

                                The quality is good, the cloth is very good, work is also very neat, zipper is very delicate. A lot of small pockets...
                            </a>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="pic">
                        <a target="_blank" rel="nofollow" href=""><img src="Images/zs/胖mm 2011新款 加大码女装 高领蕾丝长袖打底衫 高品质T恤 秋装.jpg" src="Images/blank.png" title="[哈森]午夜奇葩系列时尚牛皮手提/斜挎包 咖啡色" class="comm-img" height="80" width="80"></a>
                    </div>
                    <div class="con">
                        <p class="info">
                            <strong class="fl">luozh</strong><span class="star star-5"></span>
                        </p>
                        <p class="c-con">
                            <a target="_blank" class="gray" rel="nofollow" href="">

                                The quality is very good. I'm very satisfied. I'll buy it here in the future.
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- footer -->
<?php
    require_once "include/foot.php"
?>

</body>
</html>
