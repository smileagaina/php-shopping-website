<?php

class order {
    //put your code here
    private $db;
    function __construct(){
        $this->db = new DbMysql();
    }
    
    
    //获取订单清单
    function getOrderList($orderID){
        $sql="select * from orderList where orderID='$orderID'";
        return $this->db->select($sql);   
    }
    
    //支付状态
    function getPaymentState($state){
        
        switch ($state) {
            case 0:
                
                return "Unpaid";
                break;
            case 1:
                return "Already paid";
                break;
 
        }
    }
    
    //订单状态
    function getOrderState($state){
        switch ($state) {
            case 0:
                return "Unconfirmed";
                break;
            case 1:
                return "Pending delivery";
                break;
            case 2:
                return "Already shipped";
                break;
            case 3:
                return "Have finished";
                break;
            case 4:
                return "Have been cancelled";
                break;
        }
    }
}

?>

