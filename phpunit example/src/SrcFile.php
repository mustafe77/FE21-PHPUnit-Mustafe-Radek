<?php
namespace TDD;

class SrcFile  {
   public $hostName = "localhost";
   public $userName = "root";
   public $password = "";
   public $dbName = "codefactory";
   public $conn;

   function __construct(){
     $this->connect();
   }

   private function connect(){
     $this->conn = mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbName);
   }

   public function insert($table, $fields,$values) {
     $sql = "INSERT INTO $table ($fields) VALUES ($values)";
     if($this->conn->query($sql)){
          return "Success";
     }else {
          return "Error";
     }
   }

}

