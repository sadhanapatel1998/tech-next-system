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
                        <h4>Fire Alarm & Intrusion Systems</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Fire Alarm & Intrusion Systems</li>
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
                    <img src="assets/images/products/fire-alarm-system.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Intrusion / Anti-Theft &amp; Fire Alarm Systems</h2>
                        </div>

                        <p class="desc">
                            Intrusion and Anti-Theft Alarm Systems protect valuable property and business premises like shops, factories and godowns from theft, using sensors such as motion, door contact, vibration, shutter and glass break detectors, combined with fire and smoke detection to provide complete premise safety.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Motion, door contact &amp; vibration sensors</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Instant mobile alerts via call &amp; SMS</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remote system activation via app or remote</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Early fire &amp; smoke detection</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces risk of theft &amp; burglary</li>
                                        <li><i class="fa-solid fa-circle-check"></i>24x7 automated premise monitoring</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy installation &amp; integration</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Shops, Factories, Godowns &amp; Offices</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Intrusion / Anti-Theft &amp; Fire Alarm Systems">
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

                            <h3 class="mt-0">Why Choose Intrusion &amp; Fire Alarm Systems?</h3>

                            <p class="project-details-desc">
                                Intrusion and anti-theft alarm systems protect valuable property using sensors such as motion, door contact, vibration, shutter, and glass break detectors. Once activated via remote control or mobile app, any intrusion triggers an alarm and notifies the owner instantly through call and SMS on multiple mobile phones.
                            </p>

                            <a class="project-details-text" href="#">
                                Round-the-Clock Protection for Your Property &amp; People
                            </a>

                            <p class="project-details-desc">
                                Whether you require intrusion detection, anti-theft alarms, or fire and smoke alarm systems, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for shops, factories, godowns, offices, and residential premises.
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