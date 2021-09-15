<?php
include_once "Connection.php";

class Register {
    public $conn;      
    function __construct(){
        $db_connection = new dbConnection();
        $this->conn = $db_connection->connect();   
        return $this->conn;
    }

   public function registerUsers($email, $message){
      $sql = "INSERT INTO users (name, message)
  VALUES (:e,:m)"; 
  $put = $this->conn->prepare($sql);  //prepare statement for execution
  $put->execute(array(":e"=>$email, ":m"=>$message));

  echo " success";
}
}

?>