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
                        <h4>EPABX & Intercom Systems</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>EPABX & Intercom Systems</li>
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
                    <img src="assets/images/products/epabx-intercom.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>IP / Analogue EPABX, Intercom &amp; Voice Logger Systems</h2>
                        </div>

                        <p class="desc">
                            EPABX (Electronic Private Automatic Branch Exchange) is a private telephone network used by organizations for internal and external communication. IP Intercom Systems allow multiple locations to connect on a single system, enabling calls from any location including via smartphone or tablet, while Voice Logger Systems record audio from telephones and other sources for storage and review.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Centralized internal &amp; external calling</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Multi-location IP intercom connectivity</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Smartphone &amp; tablet call support</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Voice logging for calls &amp; records</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces communication costs</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Scalable for growing organizations</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reliable call quality &amp; routing</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Offices, Call Centers &amp; Enterprises</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="IP / Analogue EPABX, Intercom &amp; Voice Logger Systems">
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

                            <h3 class="mt-0">Why Choose EPABX &amp; Intercom Systems?</h3>

                            <p class="project-details-desc">
                                EPABX systems provide a private telephone network for internal and external organizational communication, while IP Intercom Systems connect multiple locations on a single system, enabling calls through smartphones or tablets from anywhere. Voice Logger Systems complement these by recording calls in either voice-activated or continuous mode for reliable record keeping.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Seamless Communication Across Every Location
                            </a>

                            <p class="project-details-desc">
                                Whether you require EPABX systems, IP Intercom setups, or Voice Logger integration, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for offices, call centers, and multi-location enterprises.
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