<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>United Health Care | Home</title>
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
			<!-- start of main section heading -->
			<h3 class="capitalize">create, edit or delete a presentation below</h3>
			<div class="new-presentation">
				<a href="#FIXME" title="Create New Presentaion">create new presentaion</a>
			</div>
			<div class="presentaion-details">
				<!-- PRESENTAION COLUMN NAME -->
				<div class="table-row-header">
						<div class="table-header">Name</div>
						<div class="table-header">Client Name</div>
						<div class="table-header">Date Created</div>
						<div class="table-header">Date Updated</div>
						<div class="table-header">Edit, Delete or clone</div>
						<div class="table-header">Status</div>
						<div class="table-header">Type</div>
				</div>
				<!-- PRESENTAION DATA -->
				<div class="table-row-data">
						<div class="table-data">FIXME</div>
						<div class="table-data">FIXME</div>
						<div class="table-data">FIXME</div>
						<div class="table-data">FIXME</div>
						<div class="table-data">FIXME</div>
						<div class="table-data">FIXME</div>
						<div class="table-data">FIXME</div>
				</div>
				<span class="presentaion-message"></span>
			</div>
			<!-- end of main section heading -->
		</main>
		<!-- End of main -->
		<!-- start of footer -->
		<footer>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
