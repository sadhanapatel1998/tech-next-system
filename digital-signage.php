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
                        <h4>Digital Signage & Outdoor LED Displays</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Digital Signage & Outdoor LED Displays</li>
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
                    <img src="assets/images/products/digital-signage.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Digital Signage &amp; Outdoor LED Display Systems</h2>
                        </div>

                        <p class="desc">
                            Digital Signage is a technology-driven, dynamic form of communication using LCD, LED, or projector screens to display multimedia content like videos, images, and live data in public and private spaces. Managed remotely via software, it replaces static posters and enhances engagement in retail, corporate, and transit environments.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Dynamic multimedia content display</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remote content management via software</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for retail, corporate &amp; transit spaces</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Replaces static posters &amp; banners</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Indoor &amp; outdoor display options</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Real-time content updates &amp; scheduling</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Increases customer engagement</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Retail, Corporate Lobbies &amp; Public Spaces</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Digital Signage &amp; Outdoor LED Display Systems">
                                   Enquiry Now  <i class="fa-regular fa-arrow-right-long"></i> 
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

                            <h3 class="mt-0">Why Choose Digital Signage Solutions?</h3>

                            <p class="project-details-desc">
                                Digital signage uses LCD, LED, or projector screens to display multimedia content such as videos, images, and live data, replacing static posters with dynamic, remotely managed communication. It enhances engagement across retail, corporate, and transit environments while allowing content to be updated instantly from anywhere.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Dynamic Visual Communication that Captures Attention
                            </a>

                            <p class="project-details-desc">
                                Whether you require indoor Digital Signage displays or Outdoor LED Displays for advertising and information, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for retail stores, corporate lobbies, and public spaces.
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