<?php

class dbConnection{
protected $conn;
public $db_host = "localhost";
public $db_user = "root";
public $db_pass = "";
public $db_name = "test";

public function connect(){
    
    try{
    $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",
    $this->db_user, $this->db_pass);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $this->conn;    
    }
    catch(PDOException $e){
        return "MySQL error : " . $e->getMessage();
    }
}

}
















?>