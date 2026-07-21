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
                        <h4>Wired & Wireless Mesh Networking</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Wired & Wireless Mesh Networking</li>
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
                    <img src="assets/images/products/mesh-networking.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Wired / Wireless Mesh Networking Solutions</h2>
                        </div>

                        <p class="desc">
                            Tech Next Systems designs and deploys robust wired and wireless mesh networking solutions for businesses, campuses, and residential complexes. Our networking solutions ensure seamless connectivity, eliminate dead zones, and provide reliable, high-speed data transmission across your entire premises.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Seamless whole-premise Wi-Fi coverage</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Eliminates dead zones and signal drops</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Centralized network management</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Scalable for growing business needs</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Supports high-density device connections</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Enhanced network security protocols</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduced cabling &amp; installation costs</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Offices, Campuses, Hotels &amp; Residential Complexes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Wired / Wireless Mesh Networking Solutions">
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

                            <h3 class="mt-0">Why Choose Mesh Networking Solutions?</h3>

                            <p class="project-details-desc">
                                Mesh networking uses multiple interconnected access points to blanket your premises with a strong, unified Wi-Fi signal instead of relying on a single router. This eliminates weak zones and ensures every corner of your building enjoys stable connectivity, ideal for large offices, hotels and multi-storey buildings.
                            </p>

                            <a class="project-details-text" href="#">
                                Reliable, Seamless &amp; Scalable Connectivity for Every Space
                            </a>

                            <p class="project-details-desc">
                                Whether you need a wired backbone network or a fully wireless mesh setup, Tech Next Systems delivers end-to-end solutions including site survey, installation, configuration, and after-sales support. Our solutions are ideal for offices, campuses, hotels, hospitals, and residential complexes requiring dependable connectivity.
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