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
                        <h4>Analog, IP & Wireless Cameras</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Analog, IP & Wireless Cameras</li>
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
                    <img src="assets/images/products/cctv-cameras.jpg" alt=">IP / Analog / Wireless Camera Image and DVR-NVR Systems">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>IP / Analog / Wireless Camera &amp; DVR-NVR Systems</h2>
                        </div>

                        <p class="desc">
                            Tech Next Systems provides comprehensive video surveillance solutions using IP, Analog and Wireless cameras integrated with DVR/NVR systems. Our surveillance solutions help businesses, residential complexes, and public institutions monitor their premises round the clock with reliable recording and remote viewing capabilities.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>24x7 real-time premise monitoring</li>
                                        <li><i class="fa-solid fa-circle-check"></i>High-definition video recording &amp; storage</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remote viewing via mobile app</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Motion detection &amp; smart alerts</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for indoor &amp; outdoor use</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Scalable multi-camera network support</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces theft &amp; unauthorized access</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Offices, Retail, Factories &amp; Residential Societies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="IP / Analog / Wireless Camera &amp; DVR-NVR Systems">
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

                            <h3 class="mt-0">Why Choose Our Surveillance Systems?</h3>

                            <p class="project-details-desc">
                                Our camera systems combine high-resolution IP and analog cameras with dependable DVR/NVR recording units to capture clear footage day and night. Whether wired or wireless, our cameras are engineered for durability and easy remote access from anywhere.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Complete Surveillance Coverage for Total Peace of Mind
                            </a>

                            <p class="project-details-desc">
                                Whether you require Dome, Bullet, or PTZ Cameras along with DVR/NVR recording units, Tech Next Systems delivers customized surveillance solutions with installation, configuration, deployment, and after-sales technical support, ideal for offices, shops, factories, godowns, and residential societies.
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