<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function __autoload($classname)
{
    include "../classes/$classname.php";
}
if (isset($_GET['p_id'])) {
  $p_id = $_GET['p_id'];
}
if (isset($_POST['name'])) {
  $name = htmlspecialchars($_POST['name']);
}
if (isset($_POST['client_name'])) {
  $client_name = htmlspecialchars($_POST['client_name']);
}
if (isset($_POST['status'])) {
  $status = htmlspecialchars($_POST['status']);
}
if (isset($_POST['type'])) {
  $type = htmlspecialchars($_POST['type']);
}
//update
$presentation = new Presentation;
// $user->login($email, $password);
if ($presentation->update($name, $client_name, $status, $type, $p_id)) {
  header("Location:../index.php");
} else {
  header("Location:../index.php?msg=notUpdated");
}
