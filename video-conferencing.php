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
                        <h4>Video Conferencing Solutions</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Video Conferencing Solutions</li>
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
                    <img src="assets/images/products/video-conferencing.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Video Conferencing Systems</h2>
                        </div>

                        <p class="desc">
                            Tech Next Systems delivers Video Conferencing Solutions built around cameras, microphones, and speakers connected over high-speed internet, enabling real-time communication and collaboration between individuals in different locations. Our systems support remote work, meetings, and training sessions with integrated screen-sharing capabilities.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Real-time, synchronous audio-visual communication</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Works with popular platforms like Teams, Zoom, Meet</li>
                                        <li><i class="fa-solid fa-circle-check"></i>High quality camera, mic &amp; speaker components</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Built-in screen sharing &amp; collaboration tools</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Chat, file sharing &amp; session recording support</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces travel costs for meetings</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy to install &amp; configure</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Offices, Boardrooms &amp; Training Centers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Video Conferencing Systems">
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

                            <h3 class="mt-0">Why Choose Video Conferencing Solutions?</h3>

                            <p class="project-details-desc">
                                Video conferencing enables live, face-to-face communication between people at different locations using cameras, microphones and speakers connected over the internet. It supports popular platforms such as Microsoft Teams, Zoom, Google Meet and Webex, offering features like screen sharing, chat, file sharing and recording.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Bring Your Teams Together, No Matter the Distance
                            </a>

                            <p class="project-details-desc">
                                Whether you need conferencing solutions for small meeting rooms or large boardrooms, Tech Next Systems delivers customized setups with installation, configuration, deployment, and after-sales technical support, ideal for offices, corporate boardrooms, training centers, and educational institutions.
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