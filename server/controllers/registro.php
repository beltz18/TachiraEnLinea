<?php
if (isset($_POST['btn-reg'])) {
  $nom_usr = ucwords($_POST['nom_usr']);
  $ced_usr = $_POST['ced_usr'];
  $ema_usr = $_POST['ema_usr'];
  $psw_usr = md5($_POST['psw_usr']);

  $sql = "INSERT INTO
            usuario
          (nom_usr,ced_usr,ema_usr,psw_usr)
            VALUES
          ('$nom_usr', '$ced_usr', '$ema_usr', '$psw_usr');";
  $user->register($sql,$ema_usr);
}