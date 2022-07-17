<?php
session_start();
error_reporting();

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
}