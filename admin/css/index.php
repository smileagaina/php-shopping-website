<?php
require_once 'islogin.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>

<frameset rows="64,*"  frameborder="NO" border="0" framespacing="0">
    <frame src="admin_top.php" noresize="noresize" frameborder="NO" name="topFrame" scrolling="no" marginwidth="0" marginheight="0" target="main" />
    <frameset cols="200,*"  rows="*" id="frame">
        <frame src="left.php" name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" target="main" />
        <frame src="right.php" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self" />
    </frameset>
    <noframes>
        <body></body>
    </noframes>
</html>