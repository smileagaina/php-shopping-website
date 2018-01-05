<?php
 $host='localhost';
        $user='root';
        $password='root';
        $database='shop';
        $link= mysqli_connect($host, $user, $password, $database);
        if($link==NULL){
            echo mysqli_error($link);
        }
        mysqli_select_db($link, $database);

?>


