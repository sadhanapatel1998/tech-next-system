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

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link
		href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&family=Outfit:wght@100..900&display=swap"
		rel="stylesheet">

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

		<div class="popup-overlay" id="popupOverlay">
			<div class="popup-box">
				<span class="popup-close" id="closePopup">&times;</span>
				<div class="popup-header">
					<h3>Quick Enquiry</h3>
					<p>Fill your details and we'll contact you shortly.</p>
				</div>
				<div class="popup-body">
					<form action="send-enquiry.php" method="POST">
						<input type="text" name="name" placeholder="Your Name" required>
						<input type="tel" name="phone" placeholder="Mobile Number" required>
						<input type="email" name="email" placeholder="Email Address">
						<input type="text" id="popupSubject" name="subject" readonly>
						<textarea name="message" placeholder="Write your requirement..."></textarea>
						<button type="submit">Submit Enquiry</button>
					</form>
				</div>
			</div>
		</div>

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
		<script>
			document.addEventListener("DOMContentLoaded", function () {
				const popup = document.getElementById("popupOverlay");
				const subject = document.getElementById("popupSubject");
				const closeBtn = document.getElementById("closePopup");

				// Open popup
				document.querySelectorAll(".enquiryBtn").forEach(function (btn) {
					btn.addEventListener("click", function (e) {
						e.preventDefault();
						subject.value = this.getAttribute("data-subject");
						popup.style.display = "flex";
						document.body.style.overflow = "hidden";
					});
				});
				// Close by X
				closeBtn.addEventListener("click", function () {
					popup.style.display = "none";
					document.body.style.overflow = "auto";
				});
				// Close by clicking outside
				popup.addEventListener("click", function (e) {
					if (e.target === popup) {
						popup.style.display = "none";
						document.body.style.overflow = "auto";
					}
				});
				// Close by ESC key
				document.addEventListener("keydown", function (e) {
					if (e.key === "Escape") {
						popup.style.display = "none";
						document.body.style.overflow = "auto";
					}
				});
			});
		</script>
		<script>
			$(document).ready(function () {
				$('.gallery-section').magnificPopup({
					delegate: 'a',
					type: 'image',
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0, 1]
					},
					image: {
						titleSrc: 'title'
					},
					removalDelay: 300,
					mainClass: 'mfp-fade'
				});
			});
		</script>
	</div>
</body>

</html>