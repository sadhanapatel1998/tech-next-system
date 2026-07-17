<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Technet IT Solution HTML5 Template</title>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/site.webmanifest">

<!-- Core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Plugins CSS -->
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/swiper.min.css" rel="stylesheet">
<link href="assets/css/magnific.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">

<!-- Icons -->
<link href="assets/css/fontawesome-free.css" rel="stylesheet">
<link href="assets/css/fontawesome-all.css" rel="stylesheet">
<link href="assets/css/fontawesome.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/theme-default.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- Utility -->
<link href="assets/css/tm-bs-mp.css" rel="stylesheet">
<link href="assets/css/tm-utility-classes.css" rel="stylesheet">
<link href="assets/css/odometer-theme-default.css" rel="stylesheet">
<link href="assets/css/cusor-text.css" rel="stylesheet">

</head>

<body>

	<div class="page-wrapper style-bg">
		<!-- Preloader -->
		<!-- <div class="preloader">
			<div class="loader"></div>
		</div> -->

        <?php require_once("include/header.php"); ?>
        <?= $content ?? ''; ?>
        <?php require_once('include/footer.php') ?>

		<!-- Scroll To Top -->
		<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

		<script src="assets/js/jquery-3.7.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/magnific.js"></script>
		<script src="assets/js/wow.js"></script>
		<script src="assets/js/appear.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/nice-select.js"></script>
		<script src="assets/js/knob.js"></script>
		<script src="assets/js/gsap.min.js"></script>
		<script src="assets/js/ScrollTrigger.min.js"></script>
		<script src="assets/js/SplitText.js"></script>
		<script src="assets/js/cusor-text.js"></script>
		<script src="assets/js/main.js"></script>
	</div>
</body>

</html>