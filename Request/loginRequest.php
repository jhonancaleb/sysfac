<?php

$request = true;

require_once "../config/APP.php";

session_name(NAMESESSION);
session_start();
// !ANALIAZAR BIEN SI NECESITABSER POST O SESSION
if (isset($_POST['token'])) {
  require_once "../Controllers/LoginController.php";
  $login = new LoginController();

  echo $login->logoutController();
} else {
  session_unset();
  session_destroy();
  header("Location:" . SERVER_URL . "/login");
  exit();
}
