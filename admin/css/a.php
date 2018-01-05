<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 2017/12/8
 * Time: 14:51
 */
include "../public/init.php";
$info = new UserInfo();
echo $info->islogin('22', 'ddsds', '222');
?>