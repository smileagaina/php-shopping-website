<?php
include("includes/db.php");

if ($_POST) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    echo $email."<br>";
    echo $pass;

    $sql = mysqli_query($con,"select * from admin where emial = ".$email." and pass = ".$pass);

    $result = $sql->fetch_array();
    if ($sql) {
        echo "<a href='index.php'></a>";
    } else {
        echo "<a href='login.php'></a>";
    }


}


?>
