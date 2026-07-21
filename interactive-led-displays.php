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
                        <h4>Interactive Displays & LED Walls</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Interactive Displays & LED Walls</li>
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
                    <img src="assets/images/products/interactive-led-displays.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Interactive Display Panels &amp; LED Wall Systems</h2>
                        </div>

                        <p class="desc">
                            An Interactive Display is a large, touch-enabled screen that functions like a giant tablet, allowing users to interact with digital content through touch, stylus, or gestures, widely used in classrooms and boardrooms for real-time collaboration. An LED Wall is composed of small modular LED panels forming a seamless, scalable video screen suitable for advertising, events, and virtual production.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Touch-enabled real-time collaboration</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for classrooms &amp; boardrooms</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Seamless, scalable modular LED video walls</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Wireless screen mirroring support</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for indoor &amp; outdoor use</li>
                                        <li><i class="fa-solid fa-circle-check"></i>High brightness &amp; sharp visual clarity</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remote content management</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Schools, Corporates, Events &amp; Retail Spaces</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Interactive Display Panels &amp; LED Wall Systems">
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

                            <h3 class="mt-0">Why Choose Interactive Displays &amp; LED Walls?</h3>

                            <p class="project-details-desc">
                                Interactive Display Panels function like a giant tablet, enabling touch, stylus, and gesture-based interaction with annotation and wireless screen mirroring, making them ideal for classrooms and boardrooms. LED Walls combine modular LED panels into a seamless, scalable video screen suitable for both indoor and outdoor advertising, events, and virtual production.
                            </p>

                            <a class="project-details-text" href="#">
                                Engage, Collaborate &amp; Impress with Smart Visual Technology
                            </a>

                            <p class="project-details-desc">
                                Whether you require Interactive Panels for classrooms and boardrooms, or large-format LED Walls for events and advertising, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for schools, corporates, retail spaces, and event venues.
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