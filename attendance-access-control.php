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
                        <h4>Attendance & Access Control Systems</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Attendance & Access Control Systems</li>
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
                    <img src="assets/images/products/attendance-access-control.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Attendance &amp; Access Control Systems</h2>
                        </div>

                        <p class="desc">
                            An Attendance System monitors employee work duration, tracking late arrivals, early
                            departures, breaks and absenteeism, while an Access Control System restricts entry of
                            unauthorized persons into the premises. Authentication methods include face detection,
                            fingerprint, palm detection, RFID cards, and mobile apps.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Accurate employee attendance
                                            tracking</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Restricts unauthorized premise entry
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Multiple authentication methods
                                            available</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Face, fingerprint &amp; palm
                                            detection support</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Mobile app with geo-location &amp;
                                            selfie verification</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Centralized attendance &amp; access
                                            reporting</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces manual HR administration
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Offices, Factories,
                                            Schools &amp; Institutions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Attendance & Access Control Systems">
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

                            <h3 class="mt-0">Why Choose Attendance &amp; Access Control Systems?</h3>

                            <p class="project-details-desc">
                                Attendance systems help organizations monitor employee work hours, late arrivals, early
                                departures, and absenteeism, while access control systems restrict entry to unauthorized
                                individuals. Authentication options include face detection, fingerprint, palm detection,
                                RFID cards and mobile apps, with field staff able to use mobile app-based geo-location
                                and selfie verification.
                            </p>

                            <a class="project-details-text" href="#">
                                Accurate Attendance Tracking &amp; Secure Premise Access
                            </a>

                            <p class="project-details-desc">
                                Whether you require biometric attendance devices, RFID-based access control, or mobile
                                app-based tracking for field staff, Tech Next Systems delivers customized solutions with
                                installation, configuration, deployment, and after-sales technical support, ideal for
                                offices, factories, schools, and institutions.
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