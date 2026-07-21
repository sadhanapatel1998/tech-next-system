<?php
ob_start();
?>

<!-- breadcumb Section-->
<div class="breadcumb-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 ">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h4>Smart Door & Wardrobe Locks</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Smart Door & Wardrobe Locks</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcumb Section-->

<!-- Product details area -->
<div class="team-details-area bg-white about-section-home2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="team-thumb">
                    <img src="assets/images/products/smart-door-locks.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Electronic / Digital Smart Door Locks</h2>
                        </div>

                        <p class="desc">
                            Digital door locks provide an easy-to-install security solution for buildings requiring reliable access control where allocating keys or cards is impractical. Simple and reliable in operation compared to high-tech biometric options, digital locks can be fitted on wooden, metal, glass, aluminium, and external doors.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy installation, no keys required</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reliable, long-lasting operation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Multiple unlock methods available</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Fits wooden, metal &amp; glass doors</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Enhanced building access security</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces risk of lost keys</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for high foot-traffic entries</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Homes, Offices &amp; Commercial Buildings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Electronic / Digital Smart Door Locks">
                                    Enquiry Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="project-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-details-content">

                            <h3 class="mt-0">Why Choose Smart Door Locks?</h3>

                            <p class="project-details-desc">
                                Digital door locks provide a reliable, easy-to-install security solution for buildings where allocating keys or cards to large numbers of people is impractical. With straightforward operation compared to high-tech biometric options, these locks are built to last for many years with minimal maintenance.
                            </p>

                            <a class="project-details-text" href="#">
                                Secure, Convenient &amp; Keyless Access Control
                            </a>

                            <p class="project-details-desc">
                                Whether you require locks for wooden, metal, glass, or aluminium doors, Tech Next Systems delivers customized smart door lock solutions with installation, configuration, deployment, and after-sales technical support, ideal for homes, offices, and commercial buildings.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include('include/cta-card.php'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Product details area -->





<?php
$content = ob_get_clean();
require 'layout.php';
?>