<?php

class User extends Database {
  public function register($sql,$email) {
    $con = parent::connect();
    $row = $this->validate($email);
    if ($row>0) {
      echo "<script>alert('Este correo ya está registrado')</script>";
    }else{
      if($con->query($sql)) {
        echo "<script>alert('Usuario registrado')</script>";
        header("location: signin.php");
      }else{
        echo "<script>alert('Hubo un error en el registro')</script>";
      }
    }
  }

  public function login($email,$pass) {
    $con = parent::connect();
    $sql = "SELECT * FROM usuario WHERE ema_usr = '$email' AND psw_usr = '$pass';";
    if($con->query($sql)) {
      $_SESSION['logged'] = TRUE;
      $_SESSION['email']   = $email;
      header("location: index.php");
    }else{
      echo "<script>alert('El usuario o contraseña son incorrectos')</script>";
    }
  }

  public function validate($email) {
    $con = parent::connect();
    $sql = "SELECT idt_usr FROM usuario WHERE ema_usr = '$email';";
    if($a = $con->query($sql)):
      return $a->num_rows;
    endif;
  }
}