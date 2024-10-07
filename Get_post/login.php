<?php
session_start();
require_once './db/db.php';

if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['password']) && !empty($_POST['password'])) {
  $user_name = $_POST['user'];
  $pass = $_POST['password'];

  foreach ($users as $user) {
    if ($user['user'] == $user_name && $user['password'] == $pass) {
      $_SESSION['user'] = $user;
      setcookie('user', $user['user'], time() + 3600);
      header('Location: welcome.php');
      exit;
    }
  }

  echo "Usuario o contraseña incorrectos";
} else {
  echo "Los campos están vacíos";
}
?>