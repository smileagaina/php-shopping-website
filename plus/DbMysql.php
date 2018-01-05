<?php

class DbMysql {
    public  $conn;
    //创建构造函数
    
    function __construct() {
        $this->conn = new mysqli("localhost","root","root","shop");
//        $this->conn=mysql_connect("localhost","root","niit") or die("error connecting") ; 
//       $this->conn->mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
//       $this->conn->mysql_select_db('shop');
        $this->conn->query("set names 'utf-8'");        
    }
    
    function select($sql,$fanhui=2)
    {
        $result=$this->conn->query($sql);
        if($result)
            {
              $array = array();
              if($fanhui==1)
              {
               $array=$result->fetch_array();
              }
              else{
              while($row=$result->fetch_array())
                  {
                    $array[]= $row; 
                  }
              }
               return $array;  
            }
            else
            {
                return false;
            }
    }
    
    function sql($sql)
    {
         return $this->conn->query($sql);
    }
    //数据库返回影响了多少行
    function affected()
    {
        return $this->conn->affected_rows;
    }
    
    
    
}
date_default_timezone_set("PRC");
?>
