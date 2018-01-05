<?php
require "public/init.php";
//先注释
if(!ISLOGIN)
{
    weberror();
}


unset($_SESSION["productCart"]);
$orderID=$_GET["id"];
//echo $orderID;
$sql="select * from productOrder where orderID='$orderID'";
$orderInfo=$db->select($sql,1);
//var_dump($orderInfo);


if(empty($orderInfo))
{
    weberror();
}


$order = new order;

$orderList = $order->getOrderList($orderID);

 
?>
<!DOCTYPE html >
<html><head>
<meta  charset="utf-8"/>
<meta http-equiv="Content-Language" content="zh-CN"/>
<meta name="author" content="mshop-team"/>
<meta name="generator" content="mshop-1.6832-production"/>
<title>Select the payment method -</title>
<link rel="stylesheet" type="text/css" href="css/cart_payment_v3.css"/>
<link rel="stylesheet" type="text/css" href="css/passport_skin.css" media="all" />
</head>
<body>
 
<div class="wrapper">
	<!-- start cart_crumb -->
	<div class="cart_header">
		<h1>MY Cart</h1>
		<a href="">
		<img src="images/logo.gif" class="logo" alt="">		</a>
		 <img src="images/cart/g.gif" height="1" width="1">
				<div class="cart_steps cart_steps_3">
			<strong>My Cart</strong>
			<span>Fill in the check order information</span>
			<span>Successful submission of orders</span>
		</div>
	</div>
	<!-- end cart_crumb -->
</div>

<div class="wrapper">
	<form action="" method="post" id="form_payment" >
	<input name="payment_submit_sign" value="" type="hidden">	<div class="success_tips" style="margin: 45px auto 35px auto;width: 540px;">
		<p class="s_txt"><strong>
                        <?php
                        if($orderInfo["payment"]=='cash'){
                            echo "Congratulations, your order has been submitted successfully and will be shipped after confirmation. Please be patient!";
                        }else{
                             echo "Congratulations, your order has been successful. Please complete the payment as soon as possible";
                        }
                        ?>
                        
                           
                    
                        </strong></p>
	</div>
	<table class="order_info" cellspacing="0">
		<thead>
			<tr>
				<td width="13%">Order number</td>
				<td width="12%">Amount payable</td>
				<td width="11%">In distribution</td>
				<td width="21%">Orders for goods</td>
				 
			</tr>
		</thead>
		<tbody>
						<tr>
					<td rowspan="1" class="red f16"><?php echo $orderID;?></td>
				    <td rowspan="1" class="red f16">￥<?php echo $orderInfo["price"]?></td>
                    <Td class="red f16"> Urban distribution</td>
                    <td class="pro_hadbuy tal">
                        <?php
                        foreach($orderList as $rows)
                        {
                            echo "<img src='".str_replace("../","",$rows["picurl"])."' height='40' width='40' /> ";
                        }
                        ?>
                                
                                                                  
                                                           			
								</td>
				 
			</tr>
					</tbody>
	</table>
 
              <?php
                        if($orderInfo["payment"]=='cash'){
                            ?>
            <div class="kind_remind">
		<h3>Warm tips</h3>
				<p>Please deliver the goods to the delivery man upon receipt of the goods.</p>
		<p>Please check the goods before payment. If the delivery person does not allow the inspection, please contact customer service.</p>
					
	</div><?php
                        }else{?>
<div class="pay_tab">
		<h3 class="paychoose_t">Please choose payment method</h3>
		<h4 class="pay_tab_a now">Online payment</h4>
		<div class="cont_box show_box">
			<div class="paychoose onlinepay">
				
			<h3>Domestic bank card or credit card</h3>				<ul class="clearfix">	
																																													<li>
						<label for="input_bank_icbc_perbank_b2c">
							<input name="payment_id" value="icbc_perbank_b2c" id="input_bank_icbc_perbank_b2c" type="radio">							<img src="image/payment/logo_icbc_perbank_b2c.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_ccb_b2c">
							<input name="payment_id" value="ccb_b2c" id="input_bank_ccb_b2c" type="radio">							<img src="image/payment/logo_ccb_b2c.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_cmb">
							<input name="payment_id" value="cmb" id="input_bank_cmb" type="radio">							<img src="image/payment/logo_cmb.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_spdb">
							<input name="payment_id" value="alipay_spdb" id="input_bank_alipay_spdb" type="radio">							<img src="image/payment/logo_alipay_spdb.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_bocb2c">
							<input name="payment_id" value="alipay_bocb2c" id="input_bank_alipay_bocb2c" type="radio">							<img src="image/payment/logo_alipay_bocb2c.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_abc">
							<input name="payment_id" value="alipay_abc" id="input_bank_alipay_abc" type="radio">							<img src="image/payment/logo_alipay_abc.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_comm">
							<input name="payment_id" value="alipay_comm" id="input_bank_alipay_comm" type="radio">							<img src="image/payment/logo_alipay_comm.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_cib">
							<input name="payment_id" value="alipay_cib" id="input_bank_alipay_cib" type="radio">							<img src="image/payment/logo_alipay_cib.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_gdb">
							<input name="payment_id" value="alipay_gdb" id="input_bank_alipay_gdb" type="radio">							<img src="image/payment/logo_alipay_gdb.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_sdb">
							<input name="payment_id" value="alipay_sdb" id="input_bank_alipay_sdb" type="radio">							<img src="image/payment/logo_alipay_sdb.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_cmbc">
							<input name="payment_id" value="alipay_cmbc" id="input_bank_alipay_cmbc" type="radio">							<img src="image/payment/logo_alipay_cmbc.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_citic">
							<input name="payment_id" value="alipay_citic" id="input_bank_alipay_citic" type="radio">							<img src="image/payment/logo_alipay_citic.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_hzcbb2c">
							<input name="payment_id" value="alipay_hzcbb2c" id="input_bank_alipay_hzcbb2c" type="radio">							<img src="image/payment/logo_alipay_hzcbb2c.gif">						</label>
					</li>
																				<li>
						<label for="input_bank_alipay_cebbank">
							<input name="payment_id" value="alipay_cebbank" id="input_bank_alipay_cebbank" type="radio">							<img src="image/payment/logo_alipay_cebbank.gif">						</label>
					</li>
														</ul>
				
		                            
				<h3>Payment platform</h3>                  
				<ul class="clearfix">
		            			<li class="alipay_gg">
						<div class="alipay_gg_con">
<!--                                                    <img src="image/payment/alipay_1.png" alt="">-->
                                                </div>						<label for="input_bank_alipay">
							<input name="payment_id" value="alipay" id="input_bank_alipay" type="radio">							<img src="image/payment/logo_alipay.gif">						</label>
					</li>
																				<li>
												<label for="input_bank_99bill">
							<input name="payment_id" value="99bill" id="input_bank_99bill" type="radio">							<img src="image/payment/logo_99bill.gif">						</label>
					</li>
																				<li>
												<label for="input_bank_tenpay">
							<input name="payment_id" value="tenpay" id="input_bank_tenpay" type="radio">							<img src="image/payment/logo_tenpay.gif">						</label>
					</li>
																																																																								
																																																																								
										</ul>
								
				              
				<h3>Alipay quick payment, no need to open online banking, unlimited limit:</h3>
				<ul class="ul_pay_mtp clearfix">
										<li>
						<label for="input_bank_alipay_ccb_mtp">
															<input name="payment_id" value="alipay_ccb_mtp" id="input_bank_alipay_ccb_mtp" type="radio">								<img src="image/payment/logo_alipay_ccb_mtp.gif">													</label>
						
					</li>
										<li>
						<label for="input_bank_alipay_bocb2c_mtp">
															<input name="payment_id" value="alipay_bocb2c_mtp" id="input_bank_alipay_bocb2c_mtp" type="radio">								<img src="image/payment/logo_alipay_bocb2c_mtp.gif">													</label>
						
					</li>
										<li>
						<label for="input_bank_alipay_icbc_mtp">
															<input name="payment_id" value="alipay_icbc_mtp" id="input_bank_alipay_icbc_mtp" type="radio">								<img src="image/payment/logo_alipay_icbc_mtp.gif">													</label>
						
					</li>
										<li>
						<label for="input_bank_alipay_more_mtp">
															<input id="alipay_more_payment_id" name="alipay_more_payment_id" value="" type="hidden">								<img src="image/payment/logo_alipay_more_mtp.gif" onclick="cart.payment_form('alipay_more_mtp');">													</label>
						
					</li>
									</ul>
								 
			</div>
		</div>
		
		<h4 class="pay_tab_b">Bank remittance</h4>
		<div class="cont_box">
			<div class="remit_choose">
				<p>Tip: you must inform us in time when your payment is successful so that we can deliver the goods to you in time.</p>
		 <!--sss-->
			</div>
		</div>
	</div>
 
<?php
                        }
?>
		

		<div class="clearfix"></div>
                
		<!-- start action button -->
		<div class="action_buttons clearfix">
			<div id="id_action_submit" class="">
                            <a href="user/user_orderInfo.php?id=<?php echo $orderInfo['id'];?>">View order details</a>&nbsp;&nbsp;
                            <a href="product/index.php"> Continue shopping</a>
				 
			</div>
		</div>
		<!-- end action button -->

	</form></div>
	<!-- end message -->



<?php
require_once "include/foot.php"
?>
 

</body></html>