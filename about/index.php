<?php
require '../public/init.php';
$id=$_GET["id"];
$info=$db->select("select * from article inner join articleType on article.typeid=articleType.id  where article.id='$id' and articleType.leixing='��������'",1);
if(empty($info))
{
    weberror();
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $info["title"]." - ".$webtitle;?></title>
    <link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css"/>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <link href="../css/aboutus.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include WEBDIR.'/include/top.php';
?>

<div class="wrapper">
    <!-- about_main start -->
    <div class="about_main">
        <div class="left_box">
            <h2 class="h2_about_menu_title"></h2>
            <div class="about_menu">
                <ul class="ul_about_menu">
                    <?php
                    $list=$action->getArticle(' and typeid=9 ',' order by id ');
                    foreach($list as $rows){
                        if($id==$rows["id"])
                        {
                            echo "<li class='now'><a href=\"{$webdir}about/?id={$rows["id"]}\">{$rows["title"]}</a></li>";
                        }else{
                            echo "<li><a href=\"{$webdir}about/?id={$rows["id"]}\">{$rows["title"]}</a></li>";
                        }

                    }
                    ?>

                    <li><a href="<?php echo $webdir;?>links.php">��������</a></li>
                </ul>
            </div>
        </div>
        <div class="right_box">
            <h2 class="h2_rb_about_us"><?php echo $info["title"];?></h2>
            <div class="right_box_cont">
                <?php
                echo $info["content"];
                ?>
            </div>
        </div>
    </div>
    <!-- about_main end -->
</div>
<!-- footer -->


<?php
include WEBDIR.'/include/foot.php';
?>
<!--content ok--><!-- OK -->

</body>
</html>
