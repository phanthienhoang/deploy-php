<?php

class DBConnection
{
    public $con;
    private $servername = "ec2-54-160-120-28.compute-1.amazonaws.com";
    private $username = "zhelxwftazmksc";
    private $password = "888a4c12cf1cb020658368757d4ea0475abd9de46776833421e99bd74d54edca";
    private $dbname = "d3sqf7vu1hi6m4";
    // private $charset = "utf8";
    private $port = "5432";


    // public $con;
    // private $servername = "localhost";
    // private $username = "root";
    // private $password = "";
    // private $dbname = "coffee_shop_4.0";
    // private $charset = "utf8";

    public function __construct(){
        $this->con = $this->connection();
    }

    public function connection (){        
        try {
            $dsn = "pgsql:host=".$this->servername.";port=".$this->port.";dbname=".$this->dbname;
            $pdo =  new PDO($dsn,$this->username,$this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES , false);   
            $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);    
            return $pdo;
        } catch (\PDOException $e) {
            echo "connect failed " . $e->getMessage();
        }   
    }
}

?>