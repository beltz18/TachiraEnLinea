<?php
@session_start();
session_destroy();
$_SESSION['logged'] = FALSE;
header("location: ../../signin.php");