<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!isset($_SESSION)) {
  session_start();
}
// checks if session is started or not
if (!isset($_SESSION['user_id'])) {
  header("Location:login.php?msg=illegalAccess");
  exit();
} else {
  if (isset($_GET['presentation_id'])) {
    $p_id = $_GET['presentation_id'];
  }
}

function __autoload($classname)
{
  include "classes/$classname.php";
}
$presentation = new Presentation;
$presentations = $presentation->getPresentationById($p_id);

?>
<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>United Health Care | Update Presentation</title>
	<!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Adding reference to font awesome -->
	<link rel="stylesheet" href="assets/vendor/font/fontawesome-all.css">
	<!-- Default style-sheet is for 'media' type screen (color computer display).  -->
	<link rel="stylesheet" media="screen" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<!-- Start of the header -->
		<header>
			<?php include 'includes/header.php'; ?>
		</header>
		<!-- end of header -->
		<!-- Start of main -->
		<main>
      <!-- start of registration -->
      <div class="registration">
        <img src="assets/images/background.png" alt="United Health Care">
        <div class="story" >
          <div class="wrapper cf">
            <div class="new-functionality">
              <div class="functionality-image-wrapper">
                <img src="assets/images/flagLabel.png" alt="New Functionality!">
              </div>
              <span class="uppercase">new functionality!</span>
            </div>
            <h2 class="first-letter">create your Value Story materials in minutes.</h2>
            <ul class="format">
              <li>
                <div class="format-wrapper">
                  <img src="assets/images/format.png" alt="Format">
                </div>
                <span class="first-letter">choose your format.</span>
              </li>
              <li>
                <div class="format-wrapper">
                  <img src="assets/images/content.png" alt="Content">
                </div>
                <span class="first-letter">choose your content.</span>
              </li>
              <li>
                <div class="format-wrapper">
                  <img src="assets/images/story.png" alt="Story">
                </div>
                <span class="first-letter">choose your story.</span>
              </li>
            </ul>
          </div>
          <div class="login">
            <div class="wrapper">
              <form action="includes/update.inc.php?p_id=<?php echo $p_id; ?>" method="post">
                <div class="form-group">
                  <input type="text" name="name" placeholder="Name" value="<?php echo $presentations['name'] ?>" title="Name">
                </div>
                <div class="form-group">
                  <input type="text" name="client_name" placeholder="Client Name" value="<?php echo $presentations['client_name'] ?>" title="Client Name">
                </div>
                <div class="form-group">
                  <input type="text" name="status" placeholder="Status" value="<?php echo $presentations['status'] ?>" title="Status">
                </div>
                <div class="form-group">
                  <input type="text" name="type" placeholder="type" value="<?php echo $presentations['type'] ?>" title="Type">
                </div>
                <div class="form-button">
                  <input type="submit" value="GO">
                </div>
                <label class="error-message">
                  <?php
                  if (isset($_GET['loginEmailError'])) {
                    if ($_GET['loginEmailError']=="wrongType") {
                      echo "Email format is wrong";
                    }
                    if ($_GET['loginEmailError']=="required") {
                      echo "Email required";
                    }
                    if ($_GET['loginPasswordError']=="required") {
                      echo "Password is required";
                    }
                  }
                  if (isset($_GET['login'])) {
                    if ($_GET['login']=="wrongCreditentials") {
                      echo "Email or Password is incorrect";
                    }
                  }
                  ?>
                </label>
                <span class="contact">Questions? Please contact <a href="mailto:florence.crumpler@uhc.com" >florence.crumpler@uhc.com</a></span>
                <span>Forgot your password? <a href="#FIXME" class="capitalize">click here</a></span>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end of registration -->
		</main>
		<!-- End of main -->
		<!-- start of footer -->
		<footer>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
