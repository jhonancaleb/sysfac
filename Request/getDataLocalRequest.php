<?php

$request = true;

require_once "../config/APP.php";

session_name(NAMESESSION);
session_start();

if (isset($_SESSION['token'])) {
  require_once "../Controllers/LocalController.php";
  $IL = new LocalController();

  echo $IL->getDataLocalController();
} else {
  session_unset();
  session_destroy();
  header("Location:" . SERVER_URL . "/login");
  exit();
}
