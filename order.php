<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once 'DbConnect.php';
         session_start();
        // put your code here
      //  $userid=$_SESSION['userid'];
        $userid=1;
        $pid=$_GET['pid'];
        $number=$_GET['number'];
        echo $pid;
        echo $number;
         $query1="select title,price,kucun from product where id=".$pid;
         $result= mysqli_query($link, $query1);
         $resultArray= mysqli_fetch_array($result);
         $stock=$resultArray["kucun"];
        // $price=$resultArray["price"];
         if($number<$stock){            
        $query="update cart set number ='".$number."'where pid='".$pid."'and userid='".$userid."'";        
        mysqli_query($link, $query);
       if(mysqli_affected_rows($link)>0){
              echo "<script>alert('modify successfully!');location.href='show.php';</script>";
             }
       else{
           echo "<script>alert('You do not modify!');location.href='show.php';</script>";                
             }
           }
           else{
             echo"<script>alert('failed to add!')</script>";
        }
        ?>
    </body>
</html>
