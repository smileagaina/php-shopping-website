<!-- top -->
		<div class="top">
			<div id="1021"><div class="wrapper">

<div class="top-tel">
<span class="fl">Ordering hosline：</span><strong class="top-tel-num"><?php echo $webtel;?></strong>
</div>

<?php
if(!ISLOGIN){?>
<div   id="dom_top_welcome_unlogin" class="top-login">
<span class="gray">Welcome!!!</span>[<a class="a-login" id="login-path" href='<?php echo $webdir;?>user/user_login.php'>Login</a>/<a class="a-register" href="<?php echo $webdir;?>user/user_reg.php">Register</a>]</div>
<?php
                                }else{
?><div   id="dom_top_welcome_logined" class="top-login">Welcome，<a href="<?php echo $webdir;?>user/user_Main.php" id="dom_i_link"><?php echo UID;?></a> [<a href="<?php echo $webdir;?>user/loginOut.php" class="a-logout">EXIT</a>]</div>
<?php
                                }
?>
</div>
</div>
</div>

<!-- header -->
<div class="header">
    <div class="wrapper clearfix">
        <div class="header-search">
        <form action="<?php echo $webdir?>product/" class="header-search-form">
            <input maxlength="50" autocomplete="off" value="<?php echo $sk;?>" class="header-search-input" name="k" id="input_goods_search_keyword" type="text"><input value="Search" class="header-search-but" type="submit">
        </form>
        <div class="hot-keywords">
            <strong>Hot search words：</strong><span>shoes</span>
        </div>
    </div>
    </div>


<div class="main-nav">
<ul class="main-nav-l">
    <li class="m-n-i" style="width: 100px; height: 40px; line-height: 40px; text-align: center;">
        <a href="<?php echo $webdir;?>index.php" style="font-size: 18px; color: white; ">Home</a>
    </li>
    <li class="m-n-i" style="width: 100px; height: 40px; line-height: 40px; text-align: center;">
        <a href="<?php echo $webdir;?>product/list.php?id=1" style="font-size: 18px; color: white; ">Women</a>
        <div class="sub-nav">
        <div class="sub-nav-wrap">
            <?php
              $menu = $action->getProductType(" and tid='1'");
              foreach($menu as $rows){
               echo "<dl>";
                echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
                echo "<dd>";
                   $menus=$action->getProductType(" and tid='{$rows["id"]}'");
                   foreach($menus as $rows){
                       echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
                   }
                echo "</d>";
               echo "</dl>";
              }
            ?>
        </div>
        <div class="sub-link">
        <a rel="nofollow" target="_blank" href="">

            Hot selling goods
        </a><a rel="nofollow" target="_blank" href="">

            Price reduction
        </a>
        <a href="">Recommending Commodities</a>
        </div>
        </div>
    </li>
    <li class="m-n-i" style="width: 100px; height: 40px; line-height: 40px; text-align: center;">
        <a href="<?php echo $webdir;?>product/list.php?id=2" style="font-size: 18px; color: white; ">Men</a>
         <div class="sub-nav">
        <div class="sub-nav-wrap">
             <?php
              $menu = $action->getProductType(" and tid='2'");
              foreach($menu as $rows){
               echo "<dl>";
                echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
                echo "<dd>";
                   $menus=$action->getProductType(" and tid='{$rows["id"]}'");
                   foreach($menus as $rows){
                       echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
                   }
                echo "</d>";
               echo "</dl>";
              }
            ?>

        </div>
        <div class="sub-link">
        <a href="">Hot Commodities</a><a rel="nofollow" href="">
                Price reduction
            </a>
        <a href="">Recommending Commodities</a>
        </div>
        </div>
    </li>
    <li class="m-n-i" style="width: 100px; height: 40px; line-height: 40px; text-align: center;">
        <a href="<?php echo $webdir;?>product/list.php?id=3" style="font-size: 18px; color: white; ">Shoes</a>
         <div class="sub-nav">
        <div class="sub-nav-wrap">
            <?php
              $menu = $action->getProductType(" and tid='3'");
              foreach($menu as $rows){
               echo "<dl>";
                echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
                echo "<dd>";
                   $menus=$action->getProductType(" and tid='{$rows["id"]}'");
                   foreach($menus as $rows){
                       echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
                   }
                echo "</d>";
               echo "</dl>";
              }
            ?>

        </div>
        <div class="sub-link">
        <a rel="nofollow" target="_blank" href="">Hot Commodities</a><a rel="nofollow" target="_blank" href="">Price-Reduce</a>
        <a href="">Recommending Commodities</a>
        </div>
        </div>
    </li>

</ul>



</div><div class="header-bar">
<div class="top-notice">
<span>Announce：</span>One of the latest announcements is shown here.
</div>
<div class="head-quickbuy">
    <a target="_blank" href="<?php echo $webdir?>cart.php" class="head-quickbuy-a">
        There is a shopping cart.
    </a>
<div class="head-quickbuy-detail" id="top_cart_goods_list"></div>
</div>
</div>
 
</div>

