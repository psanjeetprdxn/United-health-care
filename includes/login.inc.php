<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function __autoload($classname)
{
    include "../classes/$classname.php";
}
//OBJECT OF VALIDATION CLASS
$validator = new Validator();
//USERNAME VALIDATION
if (isset($_POST['email'])) {
    if ($validator->validateEmail($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        header("Location:../login.php?loginEmailError=wrongType");
        return;
    }
} else {
    header("Location:../login.php?loginEmailError=required");
}
//PASSWORD VALIDATION
if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    header("Location:../login.php?loginPasswordError=required");
}
//LOGIN
$user = new Users();
// $user->login($email, $password);
if($user->login($email, $password)) {
  header("Location:../index.php");
} else {
  header("Location:../login.php?login=wrongCreditentials");
}
