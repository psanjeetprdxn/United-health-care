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
			<!-- start of presentation section -->
      <div class="presentation">
        <div class="wrapper">
          <h3 class="capitalize">create, edit or delete a presentation below</h3>
          <div class="new-presentation">
              <a href="#FIXME" title="Create New Presentaion">create new presentaion</a>
          </div>
          <?php
          if (!empty($presentations)) {
          ?>
          <div class="presentation-details">
            <!-- PRESENTAION COLUMN NAME -->
            <div class="table-row-header">
              <div class="table-header"><strong>Name</strong></div>
              <div class="table-header"><strong>Client Name</strong></div>
              <div class="table-header"><strong>Date Created</strong></div>
              <div class="table-header"><strong>Date Updated</strong></div>
							<?php
							if (isset($_SESSION['user_id'])) {
							?>
								<div class="table-header"><strong>Edit, Delete or clone</strong></div>
							<?php
							}
							?>
              <div class="table-header"><strong>Status</strong></div>
              <div class="table-header"><strong>Type</strong></div>
            </div>
            <!-- end of presentaion column name -->
            <!-- PRESENTAION DATA -->
            <?php
            foreach ($presentations as $ppt) {
            ?>
            <div class="table-row-data">
              <div class="table-data"><span><?php echo $ppt['name'] ?></span></div>
              <div class="table-data"><span><?php echo $ppt['client_name'] ?></span></div>
              <div class="table-data"><span><?php echo date('d-m-Y', strtotime($ppt['date_created'])); ?></span></div>
              <div class="table-data"><span><?php echo date('d-m-Y', strtotime($ppt['date_edited'])); ?></span></div>
							<?php
							if (isset($_SESSION['user_id'])) {
							?>
              <div class="table-data">
                <a class="edit" href="update.php?presentation_id=<?php echo $ppt['presentation_id']; ?>" title="Update">Update</a>
								<?php if ($_SESSION['role'] == 'admin') { ?>
                <a class="delete" href="delete.php?presentation_id=<?php echo $ppt['presentation_id']; ?>" title="Delete">Delete</a>
								<?php } ?>
              </div>
							<?php
							}
							?>
              <div class="table-data"><span><?php echo $ppt['status'] ?></span></div>
              <div class="table-data"><span><?php echo $ppt['type'] ?></span></div>
            </div>
              <?php
              }//end of foreach loop
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
        </div>
      </div>
			<!-- end of presentation section -->
		</main>
		<!-- End of main -->
		<!-- start of footer -->
		<footer>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
