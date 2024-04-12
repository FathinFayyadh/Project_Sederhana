<?php
session_start();

class Database{

  private  $hostname ="localhost";
  private  $username="root";
  private  $password="";
  private  $database_name="acadmey_ubd";
  private $sql;


  public function __construct()
  {
    $this->sql= $this->connectDB();
  }
    
  private function connectDB(){

    $sql= mysqli_connect($this->hostname,$this->password,$this->username,$this->database_name);
    if(mysqli_connect_errno()){
        die("Koneksi database Gagal :".mysqli_connect_error());

    }
    return $sql;
  }
  public function getConnetion(){
        return $this->sql;
  }
   
}
?>