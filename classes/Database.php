<?php
require_once "./config.php";

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $con;
    private  $error;
    private $stmt;
    private $dbconnected = false;


    public function __construct(){
    //   set PDO Connection
       $dns = 'mysql:host='. $this->host . ';dbname=' .$this->dbname;
       $options = array(
           PDO::ATTR_PERSISTENT => true,
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       );

       try{
         $this->con = new PDO ($dns, $this->user, $this->pass, $options);
       } catch(PDOException $e) {
         $this->error = $e->getMessage() . PHP_EOL;
       }
    }

    public function getError(){
        return $this->error;
    }
    
    public function isConnected(){
        return $this->dbconnected;
    }

    // prepare satement with query
    public function query($query){
        $this->stmt = $this->con->prepare($query);
    }
  
    // execute prepared the query
    public function execute(){
        return $this->stmt->execute();
    }
   
    //et the resultset
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_BOTH);
    }
    //  Get row count
    public function rowCount(){
         $this->stmt->execute();
        return $this->stmt->rowCount();
    }

    // get single result
    public function singleResult(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function bind($param, $value, $type = null){
      if(is_null($type)){
          switch(true){
              case is_int($value);
               $type = PDO::PARAM_INT;
               break;
              case is_bool($value);
               $type = PDO::PARAM_BOOL;
               break;
              case is_null($value);
               $type = PDO::PARAM_NULL;
               break; 
               default:
               $type = PDO::PARAM_STR;
          }
      }


       $this->stmt->bindValue($param, $value, $type);
    }
}

?>