<?php

session_start();
require_once '../plus/DbMysql.php';
require_once '../plus/UserInfo.class.php';



if(empty ($_POST))
{
    echo "";
    exit;
}

$userinfo = new UserInfo();
$username=$_POST["login_username"];
$password=$_POST["login_password"];



$i= $userinfo->islogin($username, $password);
switch ($i) {
	case "-1":
			    echo"<script>alert('There is no account');location.href='user_login.php'</script>";

			    break;	
			  case "-2":
			  echo"<script>alert('Wrong Password');location.href='user_login.php'</script>";
				break;
			  case "1":
			     		    
     echo"<script>alert('Account not examined');location.href='user_login.php'</script>";
				 break;
    case "3":
			    
     echo"<script>alert('Account is locked');location.href='user_login.php'</script>";
			     
				 break;	 
	case '2':
		header('Location:user_Main.php');
		break;
	
	default:
		# code...
		break;
}






?>
