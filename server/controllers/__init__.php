<?php
session_start();
error_reporting();

if(isset($_SESSION['logged']) && $page != "index" && $page != "404"):
  header("location: index.php");
endif;

$name  = "Táchira en línea";
$title = "TáchiraEnLínea";

require './server/models/database.php';
require './server/models/user.php';

$DB   = new Database();
$user = new User();