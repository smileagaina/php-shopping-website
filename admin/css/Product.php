<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';
require_once '../plus/productType.class.php';

$rights = $_SESSION["rights"]; // 当前登录的管理员权限
$username=$_SESSION["username"];
$sql="select product.*,productList.typename from product inner join productList on product.typeid=productList.id ";
$parm=" where 1 "; // 条件

//判断过程

// 管理员身份 
if($rights!=1)
{
    $parm.=" and inputer ='$username'";
}

//判断要查看的分类
$typeid=@$_GET["typeid"];
if($typeid!="")
{
    $parm.=" and typeid=$typeid";
}
else
{
    $typeid=0;
}

//判断关键词

$key=@$_GET["key"];
$ziduan=@$_GET["ziduan"];
if($key!="")
{
  //  echo $ziduan;
    $parm.=" and $ziduan like '%$key%'";
}


//判断热销

$ishot=@$_GET["ishot"];
if($ishot==1)
{
   $parm.=" and hot=1 ";
}

//判断推荐

$isrecommend=@$_GET["isrecommend"];
if($isrecommend==1)
{
   $parm.=" and recommend=1 ";
}


//判断降价

$isdrops=@$_GET["isdrops"];
if($isdrops==1)
{
    $parm.=" and drops=1 ";
}

$sql.=$parm;
 




$db= new DbMysql();

$db->sql($sql);
$pagesize = 10 ; // 每页数量
$infocount=$db->affected();      //信息总数量
$page = new page($infocount, $pagesize);
$sql.=" order by id desc ";

$sql.=$page->limit();

 
 
$result=$db->select($sql);

?> 
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods Management</title>
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
<script>
function test()
{
    if(document.formsearch.key.value=='')
        {
            alert('Please input the relative search keyword');
            return false;
        }
  return true;      
}
function goupdate(ziduan,zt)
{
	
	document.info.ziduan.value=ziduan;
	document.info.zt.value=zt;
	document.info.action="product_update.php";
	document.info.submit();
	//alert(ziduan);
}
</script>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
            <td class="left_txt">Current position：The list of products</td>
          </tr>
          <tr>
            <td height="20">
 <div style="font-size:12px;line-height:25px;">View：<a href="product.php">ALL</a> <a href="?ishot=1">Hot selling</a> <a href="?isdrops=1">On Sale</a> <A href="?isrecommend=1">Recommand</A></div>
                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td><div class="add"><A href='product_add.php'><img src="images/add.gif" width="16" height="16" /> Add new product</a></div></td>
                <td width="150" align="right"><label for="select"></label>
                 
<select name="select" id="select" onchange="javascript:location.href=this.options[selectedIndex].value">
<option value='product.php'>All product</option>
<?php
$ptype = new ProductType();
$menu = $ptype->floption(0,$typeid,1);
echo $menu;
?> 
</select>
                
                </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>
           <form action="product_alldel.php" method="post" name="info">
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                    <tr>
                <td class="left_bt2">&nbsp;</td>
                 <td class="left_bt2">ID</td>
                 <td class="left_bt2">Product number</td>
                <td class="left_bt2">Product name</td>
                <td class="left_bt2">Classification</td>
                <td class="left_bt2">Prodouct porperty</td>
                <td class="left_bt2">Stock</td>
                <td class="left_bt2">Number of views</td>
                <td class="left_bt2">Entry clerk</td> 
                <td class="left_bt2">Shelf time</td>
                
                <td class="left_bt2">Action</td>
              </tr>
             
       <?php
       if($infocount>=1)
       {
       foreach($result as $row)
       {
       ?>
       <tr class="left_txt2">
           <td bgcolor="#F2F2F2"><input type="checkbox" name="id[]" value="<?php echo $row["id"];?>"></td>  
           <td bgcolor="#F2F2F2"><?php echo $row["id"];?></td>
           <td bgcolor="#F2F2F2"><?php echo $row["numbers"];?></td>
           <td bgcolor="#F2F2F2"><?php echo $row["title"];?></td> 
           <td bgcolor="#F2F2F2"><?php echo $row["typename"];?></td> 
           <td bgcolor="#F2F2F2">
           <?php
           if($row["hot"]==1)
           {
               echo "Hot selling ";
           }
           if($row["drops"]==1)
               {
               echo "On Sale ";
               }
           if($row["recommend"]==1)
               {
               echo "Recommand ";
               }
               ?>
           </td> 
           <td bgcolor="#F2F2F2"><?php echo $row["kucun"];?></td> 
           <td bgcolor="#F2F2F2"><?php echo $row["hits"];?></td> 
           <td bgcolor="#F2F2F2"><?php echo $row["inputer"];?></td> 
           <td bgcolor="#F2F2F2"><?php echo date("Y-m-d h:i:s",$row["addtime"]);?></td> 
           <td bgcolor="#F2F2F2"><A href="product_del.php?id=<?php echo $row["id"];?>">Delete</a> <a href="product_edit.php?id=<?php echo $row["id"];?>">Modify</a> </td> 
       </tr>
        <?php
       }}
       else
       {
           echo "<tr><td colspan=8><div style='text-align:center;font-size:14px;color:red'>No data available</div></td></tr>";
       }
        ?>
               <tr><tD colspan="11"><input name="submit1" value="Delete all" type="submit" />
                 <input type="button" name="button" id="button" value="Set hot selling" onclick="goupdate('hot',1)" />
                 <input type="button" name="button2" id="button2" value="Set on sale" onclick="goupdate('drops',1)"/>
                 <input type="button" name="button3" id="button3" value="Set recommand"  onclick="goupdate('recommend',1)"/>
                 <input type="button" name="button4" id="button4" value="Cancel hot selling" onclick="goupdate('hot',0)"/>
                 <input type="button" name="button5" id="button5" value="Cancel on sale" onclick="goupdate('drops',0)"/>
<input type="button" name="button6" id="button6" value="Cancel recommand" onclick="goupdate('recommend',0)"/>
                 <label for="ziduan"></label>
                 <input type="hidden" name="ziduan" id="ziduan" />
                 <label for="zt"></label>
                 <input type="hidden" name="zt" id="zt" /></tD></tr>
            </table>
             </form>
            </td>
          </tr>
 
 
        </table>
        <div id="page">
          <?php
//          echo $page->show(1);
          echo $page->showStyle();
          ?>

        </div>
         <div style="font-size:12px;"><form action="product.php" method="get"  id="formsearch" name="formsearch" onsubmit="return test();">
          Product Keyword：
              <label for="ziduan"></label>
              <select name="ziduan" id="ziduan">
                <option value="numbers">Product number</option>
                <option value="title">Product name</option>
                <option value="inputer">Entry clerk</option>
              </select>
            <input name="key" type="text" /> <input name="" type="submit" value="Search" />
         </form></div>

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
 
