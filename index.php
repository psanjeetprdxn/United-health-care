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
			<!-- php function (getPresentation) to get all the presentation details -->
			<?php
			function __autoload($classname)
					{
							include "classes/$classname.php";
					}
					$presentation = new Presentation;
					$presentations = $presentation->getPresentation();
			 ?>
			 <!-- end of getPresentation() function -->
			<!-- start of main section heading -->
			<h3 class="capitalize">create, edit or delete a presentation below</h3>
			<div class="new-presentation">
				<a href="#FIXME" title="Create New Presentaion">create new presentaion</a>
			</div>
			<?php
			if (!empty($presentations)) {
			?>
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
				<!-- end of presentaion column name -->
				<!-- PRESENTAION DATA -->
				<?php
				foreach ($presentations as $ppt) {
				?>
				<div class="table-row-data">
					<div class="table-data"><?php echo $ppt['name'] ?></div>
					<div class="table-data"><?php echo $ppt['client_name'] ?></div>
					<div class="table-data"><?php echo $ppt['date_created'] ?></div>
					<div class="table-data"><?php echo $ppt['date_edited'] ?></div>
					<div class="table-data">add update delete</div>
					<div class="table-data"><?php echo $ppt['status'] ?></div>
					<div class="table-data"><?php echo $ppt['type'] ?></div>
				</div>
				<?php
				}
				?>
				<!-- end of presentation data -->
			</div><!-- end of presentation details -->
			<?php
			} else {
			?>
			<span class="presentaion-message">No data to show</span>
			<?php
			}//end of else
			?>
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
