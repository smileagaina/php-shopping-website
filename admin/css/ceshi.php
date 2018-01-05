<?php
session_start();
foreach($_SESSION["urlfile_info"] as $row=>$v)
{
    echo $row;
    echo "<br>";
    echo $v;
    echo "<hr>";
}
?>
