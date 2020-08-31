<?php

class DB{

    public $con;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "test";
    private $charset = "utf8";

    // private $servername = "ec2-54-160-120-28.compute-1.amazonaws.com";
    // private $username = "d3sqf7vu1hi6m4";
    // private $password = "888a4c12cf1cb020658368757d4ea0475abd9de46776833421e99bd74d54edca";
    // private $dbname = "zhelxwftazmksc";
    // private $charset = "utf8";

    public function __construct(){
        $this->con = $this->connection();
    }


    public function connection (){        
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname .";charset=".$this->charset;
            $pdo =  new PDO($dsn,$this->username,$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);         
            return $pdo;
        } catch (\PDOException $e) {
            echo "connect failed " . $e->getMessage();
        }
      
    }
}

