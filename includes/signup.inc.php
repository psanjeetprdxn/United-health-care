<?php
function __autoload($classname)
{
    include "../classes/$classname.php";
}
//OBJECT OF VALIDATION CLASS
$validator = new Validator();
//NAME VALIDATION
if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    header("Location:../signup.php?signupNameError=required");
    return;
}

//PASSWORD VALIDATION
if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
  header("Location:../signup.php?signupPasswordError=required");
  return;
}
//EMAIL VALIDATION
if (isset($_POST['email'])) {
    if ($validator->validateEmail($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        header("Location:../signup.php?signupEmailError=required");
        return;
    }
}
if ($validator->isEmailExists($email)) {
    header("Location:../signup.php?signupEmailError=exists");
    return;
}
//USER REGISTRATION
$user = new Users();
$user->register($name, $email, $password);
if ($user) {
    header("Location:../signup.php?signupResult=success");
    return;
} else {
    header("Location:../signup.php?signupResult=fail");
}

?>
