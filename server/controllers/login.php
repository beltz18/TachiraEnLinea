<?php
if (isset($_POST['btn-log'])) {
  $email = $_POST['email'];
  $pass  = md5($_POST['pass']);
  $user->login($email,$pass);
}