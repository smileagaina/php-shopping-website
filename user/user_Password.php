<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>user_password</title>
    <link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css"/>
    <link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
    <link rel="stylesheet" rev="stylesheet" href="../css/user_reg.css" type="text/css"/>
</head>
<body>
<?php
include WEBDIR.'/include/top.php';
?>



<div id="container">
    <!-- member center start -->

    <div class="u_content">
        <div class="" style="height: 33px; width: 165px; text-align: center; line-height: 33px;">
            <h2 style="font-size: 20px; color: #ff6b35;">MyInfo Details</h2>
        </div>
        <div class="member">
            <!--会员中心菜单开始-->
            <?php
            include WEBDIR."/include/userLeft.php";
            ?>
            <!--会员中心菜单结束-->


            <div class="main">
                <div>
                    <form name="form_edit_profile" action="user_passwordSava.php" method="post" id="edit">

                        <!-- start 修改资料表单 -->
                        <h2 class="title">Change Password</h2>
                        <table class="edit_profile" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead><tr><td colspan="2">The follow details cannot empty</td></tr></thead>

                            <tbody><tr>
                                <td width="30%">Old Password：</td>
                                <td width="70%"><input name="yPassword" class="must" type="password" id="yPassword"><span id="ypwd_error">* </span></td></tr>
                            <tr>
                                <td>New Password：</td>
                                <td><input name="xPassword" class="must" type="password" id="xPassword"><span id="xpwd_error">* </span></td></tr>
                            <tr>
                                <td>Confirm Password：</td>
                                <td><input name="qPassword" value="" class="must" type="password" id="qPassword"><span id="qpwd_error">* </span></td></tr>
                            <Tr><td></td><td></td></Tr>
                            </tbody></table>



                        <fieldset style="border:0;text-align: center;margin-top:25px;">

                            <input value="Save" class="input_button" style="font-size: 18px;" type="submit">

                        </fieldset>
                        <!-- end 修改资料表单 -->

                    </form>

                </div>
            </div>



            <div style="clear:both;"></div>
        </div>
    </div>	<!-- member center end -->

</div>





<!-- footer -->

<?php
include WEBDIR.'/include/foot.php';
?>

<script type="text/javascript">
    $(function(){
        $('#edit').submit(function(){

            if(!$('#yPassword').val()){
                $('#ypwd_error').html('Please input the password');

                return false;
            }
            else
            {
                $('#ypwd_error').html('');
            }
            if(!$('#xPassword').val()){
                $('#xpwd_error').html('Please input the new password');

                return false;
            }
            else
            {
                $('#ypwd_error').html('');
            }

            if(!$('#qPassword').val()){
                $('#qpwd_error').html('Please input the confirm password');

                return false;
            }
            else
            {
                $('#qpwd_error').html('');
            }

            if($('#qPassword').val()!=$('#xPassword').val()){
                $('#qpwd_error').html('The two password should be the same');
                return false;
            }

        })

    })

</script>
<!--content ok--><!-- OK -->

</body>
</html>
