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
                        <h4>Audio & Public Address Systems</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Audio & Public Address Systems</li>
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
                    <img src="assets/images/products/audio-pa-system.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Audio / PA (Public Address) Systems</h2>
                        </div>

                        <p class="desc">
                            A Public Address (PA) System is an electronic sound amplification and distribution system comprising a microphone, amplifier, and loudspeakers, used to address large audiences. Commonly deployed at airports, rail terminals, and public venues, it delivers clear announcements and supports music playback through a mixer.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Clear, wide-area sound amplification</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for announcements &amp; music</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Wired &amp; wireless microphone options</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Multi-zone speaker distribution</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reliable amplifier &amp; mixer setup</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy installation &amp; operation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Scalable for large venues</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Airports, Auditoriums &amp; Public Venues</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Audio / PA (Public Address) Systems">
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

                            <h3 class="mt-0">Why Choose Audio &amp; PA Systems?</h3>

                            <p class="project-details-desc">
                                A Public Address System combines a microphone, amplifier, and loudspeakers to deliver clear sound amplification for large audiences, commonly used at busy transit terminals for announcements. Music can also be played through the system by routing audio through the mixer's channels.
                            </p>

                            <a class="project-details-text" href="#">
                                Clear, Powerful Sound for Every Announcement &amp; Occasion
                            </a>

                            <p class="project-details-desc">
                                Whether you require systems for announcements, background music, or emergency broadcasts, Tech Next Systems delivers customized Audio &amp; PA solutions with installation, configuration, deployment, and after-sales technical support, ideal for airports, auditoriums, schools, and public venues.
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