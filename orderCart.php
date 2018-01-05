<?php
require "public/init.php";
//先注释
if(!ISLOGIN)
{
    webAlter("Please login", "user/user_login.php");
}
if(empty($_SESSION["productCart"]))
{
     webAlter("Please choose the goods", "index.php");
}

$cart = new cart();
$cartList=$cart->cartInfo();
$orderID=  time().rand(100, 999);
 
?>
<html>
<head>
    <meta charset="utf-8"/>
 <title>Confirm the order - <?php echo $webtitle;?></title>
<link rel="stylesheet" type="text/css" href="css/cart_v3.css"/>
<link rel="stylesheet" type="text/css" href="css/passport_skin.css" media="all"/>
</head>
<body>
<div class="wrapper">
	<!-- start cart_crumb -->
	<div class="cart_header">
		<h1>Cart</h1>
		<a href="">
		<img src="images/logo.gif" class="logo" alt="">		</a>
			 <img src="images/cart/g.gif" height="1" width="1">
			<div class="cart_steps cart_steps_2">
			<strong>My Cart</strong>
                        
			<span>Fill out check order information</span>
			<span>Successful order submission</span>
		</div>
	</div>
	<!-- end cart_crumb -->
</div>
<div >
    <span style="font-family: sans-serif;font-size: 20px; color: red; position: relative; left: -80px;"  ><i>Fill in the verification information</i></span>
    <span class="tip">Fill in and confirm the following information and submit the order</span>
</div>

<div class="wrapper checkout_form">
 

<form method="post" id="form_checkout"  action="orderCartOK.php">
	<fieldset>
<div  id="consignee_tag">
	<h3 style="font-family: sans-serif;font-size: 20px; color: gray; font-style: italic">1.Receiving address</h3>
        <!--链接点击之后却不跳转-->
    <span class="tip"><a href="javascript:void(0);" id="edit_but_addrss" class="edit_but blue"></a></span>
</div>

<div class="checkout_box">
	 
        <div id="consignee_area_select"></div>
        <div style="display: block;" id="consignee_area" class="consignee_area">
        <div style="display: block;" id="address_area" class="address_area">
		</div>
            <div style="padding-left: 40px;">
              <?php
              $sql="select * from receive where username='".UID."'";
              $receive=$db->select($sql);
              foreach($receive as $rows)
              {
                  echo "<div class='receive' style=\"line-height: 30px;\" shren='{$rows["shren"]}' shdizhi='{$rows["shdizhi"]}' youbian='{$rows["youbian"]}' tel='{$rows["tel"]}' mobile='{$rows["mobile"]}' ><b>Receiver</b>：{$rows["shren"]} Address：{$rows["shdizhi"]} {$rows["youbian"]} {$rows["tel"]} {$rows["mobile"]}</div>";
              }  
               ?> 
            </div>
		<div style="display:block;" id="div_consignee" class="">
		  <dl class="clearfix">
			    <dt><span class="red">*</span> Receiver：</dt>
			    <dd><input type="hidden" value="<?php echo $orderID;?>" name="orderid"/>
			        <input name="shren" type="text" id="shren" size="20" maxlength="20"><span class="red" id="shren_error">&nbsp;</span>
			    </dd>
			</dl>
 
		  <dl class="clearfix">
			    <dt><span class="red">*</span>Receiver's Address：</dt>
			    <dd>
			        <input name="shdizhi" type="text" id="shdizhi" size="40" maxlength="100">
					<span class="red" id="shdizhi_error">&nbsp;</span>
			    </dd>
			</dl>
			<dl class="clearfix">
			    <dt><span class="red">*</span> Postcode</dt>
			    <dd>
			        <input name="youbian" type="text" id="youbian" size="12" maxlength="6">
					<span class="red" id="youbian_error">&nbsp;</span>
			        <span class="tip gray" >Please fill in the six-digit postcode</span>
			    </dd>
			</dl>
			<dl class="clearfix"> 
			    <dt><span class="red">*</span> TEL Number</dt>
			    <dd>
		          <input name="mobile" type="text" class="focusInput focusTxt" id="mobile" value="" size="26" maxlength="20" rel="固定电话和手机中必填一项">Fixed telephone：<input name="tel" type="text" class="focusInput focusTxt" id="tel" value="" size="26" maxlength="20" />
					<span class="red" id="dianhua_error">&nbsp;</span>
			    </dd>
			</dl>
	 
		</div>
	</div>
        
</div>
	<!-- end consignee -->

	<!-- start choose payment method -->
	
<!-- start choose payment method -->
<div id="pay_tag">
    <h3 style="font-family: sans-serif;font-size: 20px; color: gray; font-style: italic">2.Pay and Distribution</h3>
	<span class="tip"><a href="javascript:void(0);" id="edit_but_pay" class="edit_but blue"></a></span>
	<span class="tip">
			    <span>Shopping hall free of mail</span>
				<span>Shopping over <b class="price">50.00</b> Available on demand payment (excluding overseas area)</span>
			</span>
</div>
<div class="checkout_box">
 
    <div id="pay_delivery_set" style="display: block;">
    	<dl class="pay_delivery_set" id="pay_list">
    	    
    	    <dd>
    	    	<ul id="ul_pay_list" class="delivery">
                    <!--货到付款-->
                    <li><label for="delivery_item_7_cod"><input name="delivery_id" value="cash" id="delivery_item_7_cod" class="pay_item" type="radio"> <strong>Cash on Delivery</strong></label>
                        <span class="pay_tip">Inspection before payment, pay in cash</span></li>
                    <!--在线支付-->
                    <li><label for="delivery_item_1_online"><input name="delivery_id" value="online" id="delivery_item_1_online" class="pay_item" type="radio"> <strong>Online pay</strong></label>
                        <span class="pay_tip">Online silver or credit card pay of Alipay, Tenpay, ICBC, CMB, CCB, etc.</span></li>
                    <!--银行汇款-->
                    <li><label for="delivery_item_1_offline"><input name="delivery_id" value="bank" id="delivery_item_1_offline" class="pay_item" type="radio"> <strong>Bank remittance</strong></label>
                        <span class="pay_tip">Support post offices, ICBC, CMB, CCB and other banks to remit pay</span></li></ul>
    	    </dd>
        </dl>
        <dl class="pay_delivery_set" id="delivery_list" style="display: none;">
    	    <dt>Distribution mode</dt>
    	    <dd>
    	    
    	        <ul id="ul_delivery_area" class="delivery"><li><label><em>Cash on Delivery</em></label><span class="delivery_tip"></span></li></ul>
    	    </dd>
        </dl>
        <dl class="pay_delivery_set" id="sendtime_list" style="display: block;">
    	    <dt>Delivery time</dt>
    	    <dd>
    	    	<ul id="ul_delivery_time" class="delivery">
    	            <li>
    	                <label for="delivery_time2">
                            <!--工作日、双休日和假日均可送货-->
    	                    <input id="delivery_time2" value="weekdays and weekends" name="delivery_time" type="radio">
    	                    <strong>Delivery is available on weekdays, weekends and holidays</strong> 
    	                </label>
    	            </li>
    	            <li>
    	                <label for="delivery_time1">
                            <!--只工作日送货（双休日、假日不送）-->
    	                    <input id="delivery_time1" value="weekdays only" name="delivery_time" type="radio">
    	                    <strong>Delivery on weekdays only (not on weekends or holidays)</strong>
    	                </label>
    	            </li>
    	            <li>
    	                <label for="delivery_time3">
                            <!--只双休日、假日送货（工作日不送）-->
    	                    <input id="delivery_time3" value=" holidays only" name="delivery_time" type="radio">
    	                    <strong>Delivery on weekends and holidays only (not on weekdays)</strong>
    	                </label>
    	            </li>
    	        </ul>
    	    </dd>
    	</dl>
 
    </div>
 <!--END-->
</div>
<!-- end choose payment method -->
	<!-- end choose payment method -->

	<!-- start product list -->
	

    <div >
    <h3  style="font-family: sans-serif;font-size: 20px; color: gray; font-style: italic">3.List of goods</h3>
    <span class="tip"><a href="cart.php" class="blue">[Go back to the shopping cart, modify the order item]</a></span>
    <span id="js_warehouse_tip" class="tip tip_fr "><span class="red"> </span> </span>
    </div>
		<!-- start item grid -->
		<div class="items clearfix">
			<table class="grid" style="width: 917px;" cellspacing="0">
				<thead>
					<tr>
						<td width="70">&nbsp;</td>
						<td style="text-align: left; padding-left: 5px;" width="*">Commodity name</td> 
						<td width="130">Our price</td>
						<td width="100">Quantity</td>
 
						<td width="90">Subtotal</td>
 
					</tr>
				</thead>
				<tbody>
                         <?php
                               foreach($cartList as $k=>$v)
                                {
                         ?>
                        <tr>
                            <td><a href="product/show.php?id=<?php echo $k;?>" alt="" target="_blank"><img src="<?php echo str_replace("../", "",$v["picurl"])?>" alt="" class="item" /></a></td>
                          <td class="tal"><ul>
                            <li><a href="product/show.php?id=<?php echo $k;?>" target="_blank"><?php echo $v["title"]?></a></li>
                            <li><?php echo $v["numbers"]?></li>
                          </ul></td>

                          <td><div class="price">￥<?php echo $v["unitPrice"]?></div></td>
                          <td><?php echo $v["total"]?></td>

                          <td><?php echo $v["Price"]?></td>

                        </tr>
                                <?php
                                }
                                ?>
                </tbody>
			</table>
		</div>
		<!-- end item grid -->

	<!-- end product list -->

	
	
	<!--start dm_card-->
     
    <!--end dm_card-->
	
	<!-- start order total -->
    <div ><h3 style="font-family: sans-serif;font-size: 20px; color: gray; font-style: italic" >4.Payment information</h3></div>
	<div class="checkout_box ordertotal">
		<p>
<span><em>Number of goods：</em><font id="font_total_count"><?php echo $_SESSION["cartCount"];?>number</font></span>
 
<span><em>Commodity amount：</em>￥<font id="font_total_price"><?php echo $_SESSION["cartPrice"];?></font></span> + 
<span><em>Freight：</em>￥<font id="font_freight">0.00</font></span> - 
            <span><em>Preferential treatment：</em>￥<font id="font_total_cashback">00</font></span>
		</p>
		<p>
			<span class="total_amount"><span class="price f14"><em>Total amount payable：</em>￥<font id="font_total_amount"><?php echo $_SESSION["cartPrice"];?></font></span></span>
		</p><input name="price"  value="<?php echo $_SESSION["cartPrice"];?>" type="hidden" />
	</div>
	<!-- end order total -->
	

	<div class="checkout_sub">
   
    <!-- start message -->
    	<div class="checkout_sub_title" rel="message_panl" id="message_panl_box">
    		<button class="open_panl_but" id="message_but" type="button"></button>
                <h3 class="open_panl_but">Order message</h3><span class="tip"><a style="display: none;" href="javascript:void(0);" id="edit_but_message" class="edit_but blue">[Modify]</a></span>
                <span class="tip" id="message_tip" style="">Please limit the number of words to less than 100</span>
    	</div>
        <div class="checkout_sub_body get_message_body" id="message_panl_return">
        </div>
        <div class="checkout_sub_body get_message_body" id="message_panl"  >
<!--            <input type="text"  name="message"  >-->
            <textarea class="focusTxt" name="message" id="message" rel=""></textarea>
    
        </div>
	<!-- end message -->
    </div>
	</fieldset>
	
	<!-- start action button -->
	<div class="action_buttons clearfix">
			<div class="action_wrap">
				<div id="id_action_submit" class="">
					<input name="按钮" type="button" id="orderOK" style="color: white; background-color: #ff6b35; border-radius: 5px; font-size: 20px; margin-left: 15px; height: 40px; width: 178px; border: none; cursor: pointer;" value="Confirm and Submit">
                                        <!--Confirm, submit order-->
			  </div>
				<div id="id_action_waiting" class="action_waiting">
					<img src="images/cart/loading.gif">				<span>System in process, please wait&hellip;&hellip;</span>
				</div>
			</div>
	</div>
	<!-- end action button -->

	</form>
</div>

<!-- start hidden box -->
<div class="hidden">
	<font id="font_hidden_freight_type">0</font>
	<font id="font_hidden_meet_free_freight">0</font>
	<font id="font_hidden_font_total_cashback">20.00</font>
	<font id="font_hidden_total_amount">3865.00</font>
</div>
<!-- end hidden box -->

<!-- start footer -->
<?php
require_once "include/foot.php"
?>
<!-- end footer -->
<script src="images/jquery.js" type="text/javascript"></script> 
<script>
$(function(){
    
        $('.receive').click(function(){
             $('#shren').val($(this).attr('shren'));
             $('#shdizhi').val($(this).attr('shdizhi'));
             $('#youbian').val($(this).attr('youbian'));
             $('#tel').val($(this).attr('tel'));
             $('#mobile').val($(this).attr('mobile'));
          //   alert(); 
        });
    
     //提交
     $('#orderOK').click(function(){
         if(!$('#shren').val()){
             alert('Please fill in the receiver！');
             return false;
         }
         if(!$('#shdizhi').val())
             {
                 alert('Please fill in the receiving address');
                 return false;
             }
         if(!$('#youbian').val())
             {
                 alert('Please fill in the postcode');
                 return false;
             }
         if(!$('#tel').val()){
             alert('Please fill in the tel number');
             return false;
         }    
         if(!$('#mobile').val())
             {
                 alert('Please fill in mobile number');
                 return false;
             }
       
         if($('input[name=delivery_id]:checked').length<1){
             alert('Please choose the mode of payment!');
             return false;
         }
         
         if($('input[name=delivery_time]:checked').length<1){
             alert('Please select delivery time!');
             return false;
         }
         $('#id_action_submit').hide();
         $('#id_action_waiting').show();
         
         
        jQuery.ajax({
            url:"ajax/orderSava.php",
            type:"POST",
            data:$('#form_checkout').serialize(),
            success:function(data){
//                alert(data);
//                alert('hi');
                location.href="orderCartOK.php?id=<?php echo $orderID;?>";
                //实现不了跳转
//                if(data=="1")
//                    {
//                        alert('h1');
//                        location.href="orderCartOK.php?id=<?php //echo $orderID;?>//";
//                    }a
            },
            error:function(){
                alert('error');
            }
        })
       
       return false;
     });
})
</script>
</body></html>