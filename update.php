<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
} else {
  if (isset($_GET['presentation_id'])) {
    $p_id = $_GET['presentation_id'];
  }
}
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
		</main>
		<!-- End of main -->
		<!-- start of footer -->
		<footer>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
