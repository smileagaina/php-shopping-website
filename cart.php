<?php
require "public/init.php";


$cart = new cart();
$action=@$_GET["action"];

if($action=="up")
{
    $id=$_GET["id"];
    $sum=$_GET["sum"];
    if($sum==0){
        $cart->delCart($id);
        webAlter("Delete the product successfully",'cart.php');
    }
    $cart->addCart($id, $sum);

    webAlter("Update success",'cart.php');
}

$cartList=$cart->cartInfo();



//先注释
if(!ISLOGIN)
{
    webAlter("Please login first", "user/user_login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ShopCart - <?php echo $webtitle;?></title>
    <link rel="stylesheet" rev="stylesheet" href="css/cart_v1.css" type="text/css"/>
</head>
<body>
<div class="wrapper">
    <!-- start header -->
    <div class="header">

        <h1>ShopCart</h1>
        <img src="images/logo.gif" class="logo" alt="Our website" />
        <img src="product/show2_files/mbaobao.gif" height="1" width="1" /> <a href="help/index.php" target="_blank">Help</a>
    </div>
    <!-- end header -->
</div>
<div class="wrapper">
    <!-- start information -->
    <div class="info clearfix">
        <div class="title">
            <!--class="sprite mycart"-->
            <h2> <span style="font-family: sans-serif; font-size: 30px;" >My Cart</span> </h2>
            <div style="clear:both;padding: 0px 15px 15px 15px;overflow:hidden;zoom:1">
                <span style="float:left;color:#c00;">Note: please send the purchase order in time, the price of the goods shall be the price at the time of the order submission.</span>
                <div style="float:right;"> <span> </span></div>
            </div>
        </div>
    </div>
    <!-- end information -->
    <!-- start item grid -->
    <div class="items clearfix">
        <table class="grid" cellspacing="0">
            <thead>
            <tr>
                <td width="60">&nbsp;</td>
                <td style="text-align: left; padding: 0pt 0pt 0pt 5px;" width="*">Commodity name</td>
                <td width="90">Market price</td>
                <td width="100">Our price</td>
                <td width="70">Subtotal</td>
                <td width="80">Commodity quantity</td>

                <td width="60">Delete</td>
            </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($cartList))
            {
                foreach($cartList as $k=>$v)
                {
                    ?>
                    <tr>
                        <td><a href="product/show.php?id=<?php echo $k;?>" alt="" target="_blank"><img src="<?php echo str_replace("../", "",$v["picurl"])?>" alt="" class="item" /></a></td>
                        <td class="tal"><ul>
                                <li><a href="product/show.php?id=<?php echo $k;?>" target="_blank"><?php echo $v["title"]?></a></li>
                                <li><?php echo $v["numbers"]?></li>
                            </ul></td>
                        <td> ￥<?php echo $v["yPrice"]?> </td>
                        <td><div class="price">￥<?php echo $v["unitPrice"]?></div></td>
                        <td>￥<?php echo $v["Price"]?></td>

                        <td><div class="quantity"> <a href='?action=up&id=<?php echo $k;?>&sum=<?php echo $v["total"]-1;?>' class="reduce sprite icon_reduce" alt="减一">Minus one</a>
                                <input name="buy_quantity" ref="do/items/add/1206014002/1" class="input_quantity" value="<?php echo $v["total"]?>" type="text" />
                                <a href='?action=up&id=<?php echo $k;?>&sum=<?php echo $v["total"]+1;?>' class="subjoin sprite icon_subjoin" alt="加一">Add one</a></div></td>
                        <td><a onclick="del(<?php echo $k;?>)">Delete</a></td>
                    </tr>

                    <?php
                }
                ?>
                <tr>
                    <td colspan="2" class="info_left">
                    </td>
                    <td colspan="6" class="info_right">
                        <p> <span>Total value of goods (excluding freight charges):<span class="price f14">￥<?php echo $_SESSION["cartPrice"]?></span>yuan</span> </p></td>
                </tr>
                <?php

            } else{
                ?>
                <tr>
                    <td colspan="8"><p class="empty_item"> You have not added merchandise to the shopping cart! </p></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <!-- end item grid -->
    <!-- start action button -->
    <!--class="buttons clearfix" class="continue sprite" class="checkout sprite"-->
    <div style="position: relative; float: left;background-color: lightblue; width: 240px; height: 45px; border-radius: 5px; font-size: 25px;" >
        <a style=" cursor:pointer; color: black; width: 240px; line-height: 50px; text-align: center;"  href="index.php">Continue Shopping </a> 
    </div>
    <div style="position: relative; float: right;background-color: lightblue; width: 80px; height: 45px; border-radius: 5px; font-size: 25px;" >
            <?php if(!empty($cartList)) {?> 
        <a style="  cursor:pointer; color: black; width: 80px; line-height: 50px; text-align: center;" href="orderCart.php">Pay it.</a><?php }?>
    </div>
    <!-- end action button -->
</div>

<?php
require_once "include/foot.php"
?>


<script src="images/jquery.js" type="text/javascript"></script>
<script>
    function del(id)
    {
        jQuery.ajax({
            url:"ajax/ajaxDelcart.php",
            type:"POST",
            data:"id="+id,
            success:function(data){
//                if(data=="1")
//                {
//                    location.href="cart.php";
//                }
                location.href="cart.php";
            },
            error:function(){
                alert("error");
            }
        })
    }

</script>
</body>
</html>

