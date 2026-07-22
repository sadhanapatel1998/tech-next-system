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
                        <h4>Short & Long Throw Projectors</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Short & Long Throw Projectors</li>
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
                    <img src="assets/images/products/projectors.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Short / Long Throw Projector Systems</h2>
                        </div>

                        <p class="desc">
                            Tech Next Systems supplies and installs a wide range of Short and Long Throw Projectors from leading brands, designed to deliver bright, sharp, and reliable projection for classrooms, boardrooms, auditoriums, and event spaces of all sizes.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Bright, sharp projection quality</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for small &amp; large venues</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Short throw options for compact rooms</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Long throw options for auditoriums</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Energy-efficient lamp technology</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Wide screen size compatibility</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy ceiling or wall mounting</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Classrooms, Boardrooms &amp; Auditoriums</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Short / Long Throw Projector Systems">
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

                            <h3 class="mt-0">Why Choose Short/Long Throw Projectors?</h3>

                            <p class="project-details-desc">
                                Short throw projectors are designed for compact spaces, projecting large, bright images from a very close distance, while long throw projectors are ideal for larger auditoriums and halls requiring greater projection distance. Both options deliver sharp image quality suited to classrooms, boardrooms, and event spaces.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Bright, Clear Projection for Every Space &amp; Occasion
                            </a>

                            <p class="project-details-desc">
                                Whether you require Short Throw Projectors for compact classrooms or Long Throw Projectors for large auditoriums, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for schools, colleges, offices, and event venues.
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