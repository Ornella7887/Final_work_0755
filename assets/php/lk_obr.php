<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$mysqli = mysqli_connect("localhost", "gngtqies_base", "base", "gngtqies_base");

if ($mysqli == false) {
  print("error");
} else {
  $inputValue = $_POST["value"];
  $item = $_POST["item"];
  $id = $_SESSION["id"];

}
