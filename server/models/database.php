<?php

class Database {
  private $host;
  private $user;
  private $pass;
  private $dtbs;

  public function __construct() {
    $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->dtbs = "tachira_en_linea";
  }

  public function connect() {
    $conection = new mysqli($this->host,$this->user,$this->pass,$this->dtbs);
    if($conection->connect_errno):
      echo "<script>
              alert('Hay problemas para conectarse a la base de datos')
            </script>";
    endif;
    return $conection;
  }
}