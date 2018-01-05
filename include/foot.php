
<?php
    require_once WEBDIR."/config/config.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .space {
                height: 150px;
            }
            /*-- newsletter --*/
            .newsletter {
                clear: both;
                text-align: center;
            }
            .newsletter form {
                margin-top: 1.2em;
                width: 70%;
                margin: 2em auto 0;
            }
            .newsletter input[type="text"] {
                width: 86%;
                padding: .8em;
                font-size: 1em;
                float: left;
                color: #999;
                outline: none;
                border: 1px solid #999;
                border-right: none;
                background: none;
                -webkit-appearance: none;
                -webkit-transition: 0.5s all;
                -moz-transition: 0.5s all;
                transition: 0.5s all;
            }
            .newsletter input[type="submit"] {
                float: left;
                color: #999;
                font-size: 1em;
                outline: none;
                padding: .8em 1.7em;
                border: 1px solid #999;
                -webkit-transition: 0.5s all;
                -moz-transition: 0.5s all;
                transition: 0.5s all;
                -webkit-appearance: none;
                background: none;
            }
            .newsletter form:hover input[type="text"] {
                border-color: #f30d60;
            }
            .newsletter form:hover input[type="submit"] {
                border-color: #f30d60;
                background: #f30d60;
                color:#fff
            }
            .newsletter .container h3 {
                color: #ff6b35;
                font-size: 25px;
            }
            .newsletter .container p{
                font-size: 18px;
            }
            /*-- //newsletter --*/
            /*-- footer start here --*/
            .footer-agile {
                background-color: #24202a;
                padding: 4em 0 3em;
                height: 45px;
            }



            .container {
                text-align: center;
            }
            .copy-right {
                font-size: 20px;
                color: white;
            }
            /*-- //footer end here --*/
        </style>
    </head>
    <div class="space">


    </div>
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <h3 class="agileits-title">Contact us </h3>
            <p>If you are interest in it, please contact us email.</p>
            <form action="#" method="post">
                <input type="text" name="email" placeholder="Enter your Email..." required>
                <input type="submit" value="Subscribe">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- footer start here -->
    <div class="footer-agile">
        <div class="container">
            <div class="copy-right">
                <p><?php echo $webcopy;?> </p>
            </div>
        </div>
    </div>

</html>