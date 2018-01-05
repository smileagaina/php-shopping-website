<?php
require '../public/init.php';
//先注释
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

$order = new order();

$sql="select * from productOrder  where username='".UID."'";
$result=$db->select($sql);
$infocount=$db->affected();

?>
<!DOCTYPE html >
<html >
<head>
    <meta charset="utf-8" />
<title>My Order - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css"/>
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user.css" type="text/css" />
</head>
<body>		 	 <?php
   include WEBDIR.'/include/top.php';
?> 
		<div class="wrapper">
	 
		  <!--会员中心通栏-->
		  <div class="u_top_gg u_m_bottom"></div>
		  <div class="" style="height: 33px; width: 165px; text-align: center; line-height: 33px;">
		    <h2 style="font-size: 20px; color: #ff6b35;">MyInfo Details</h2>
	      </div>
		  <div class="u_content">
<!--会员中心菜单-->
    			<div class="u_wrap_l">
   <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
	           </div>
             <!--会员中心菜单结束-->  
		    <div class="u_wrap_r2">
		       
		      <div class="u_con_box">
		        <div class="u_c_header">
		          <h3>My order</h3>
	            </div>
		        <form name="orderForm" id="orderForm" method="post" action="">
		          <div class="u_c_main">
		            <div class="u_list">
		              <div class="u_l_body">
		                <table class="list_base def_list_2">
		                  <thead>
		                    <tr>
		                      <th width="10%">Order number</th>
		                      <th>Orders for goods</th>
		                      <th width="11%">Receiver</th>
		                      <th width="11%">The order amount</th>
		                      <th width="10%">Place the order of time</th>
		                      <th width="12%"> Payment status </th>
		                      <th width="12%"> The order status </th>
		                      <th width="12%">Action</th>
	                        </tr>
	                      </thead>
		                  <tbody>
  <?php
  if($result){
  foreach($result as $rows)
  {
  ?>                                    
 <tr>
    											<td><?php echo $rows["orderID"]?></td>
    											<td class="l">
  <div class="pics">
  <?php
    $infos=$order->getOrderList($rows["orderID"]);
    foreach($infos as $rowsd)
    {
        echo "<img src='{$rowsd["picurl"]}' height='60' width='60'/>";
    }
  ?>
<!--      <a href='' title=''><img src='' alt='' height='60' width='60' /></a>-->
  </div></td>
    											<td class="l"> <?php echo $rows["shren"]?> </td>
    											<td><span class="red"><strong>￥<?php echo $rows["price"]?></strong></span><br></td>
    											<td><span class="cbrown"><?php echo date("Y-m-d",$rows["addtime"])?><br> <?php echo date("H:i:s",$rows["addtime"])?></span></td>
    											<td>
                                                                                        <?php
                                                                                        if($rows["payment"]=='cash')
                                                                                        {
                                                                                            echo "Cash on delivery";
                                                                                        }else{
                                                                                            echo $order->getPaymentState($rows["paymentState"]);
                                                                                        }
                                                                                        ?>
                                                                                        </td>
    											<td>
    											     <?php
                                                                                             echo $order->getOrderState($rows["orderState"]);
                                                                                             ?>
    											</td>
    											<td class="nobr">
                                                                                            <a class="blue2" target="_blank" href="user_orderInfo.php?id=<?php echo $rows["id"];?>">The order details</a></td>
    										</tr>
                                      <?php
  }}else{
                                      ?>
                      <tr><td colspan='8' class='nobr'><div class=\"list_msg\">No order</div></td></tr> 
		            <?php
  }
                            ?>    
	                      </tbody>
	                    </table>
	                  </div>
		              <div class="u_l_active">
		                <!-- 分页 -->
		                <span class="u_list_pages fr" style="color: #DB770E; font-size: 18px;"> Have    <?php echo $infocount;?>   orders </span> </div>
	                </div>
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
		  <!--我的订单----end-->
</div>
		<!-- footer -->
		 

 <?php
   include WEBDIR.'/include/foot.php';
?>
 
	<!--content ok--><!-- OK -->

</body>
</html>
