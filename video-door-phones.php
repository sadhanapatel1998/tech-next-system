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
                        <h4>Video Door Phone Systems</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Video Door Phone Systems</li>
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
                    <img src="assets/images/products/video-door-phones.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>IP / Analogue Video Door Phone Systems</h2>
                        </div>

                        <p class="desc">
                            A Video Door Phone is a standalone intercom system used to manage calls at building entrances, with access controlled through audiovisual communication between inside and outside. IP-based video door phones use the IP/SIP protocol, connecting through standard WAN or WiFi interfaces without extra wiring, and can transmit signals to a smartphone from anywhere in the world.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Audio-visual entrance monitoring</li>
                                        <li><i class="fa-solid fa-circle-check"></i>IP/SIP based smartphone connectivity</li>
                                        <li><i class="fa-solid fa-circle-check"></i>No extra wiring required for IP systems</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remote access from anywhere in the world</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Enhanced entrance security &amp; control</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Two-way communication with visitors</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy integration with access control</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Homes, Offices &amp; Residential Complexes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="IP / Analogue Video Door Phone Systems">
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

                            <h3 class="mt-0">Why Choose Video Door Phone Systems?</h3>

                            <p class="project-details-desc">
                                Video door phones let you manage calls at your building's entrance with audiovisual communication controlled between inside and outside. IP-based systems use standard SIP protocol, connecting via WAN port or WiFi without the need for extra internal wiring.
                            </p>

                            <a class="project-details-text" href="#">
                                See, Speak &amp; Secure Your Entrance from Anywhere
                            </a>

                            <p class="project-details-desc">
                                Whether you require Analogue or IP Video Door Phone systems, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for homes, offices, residential complexes, and workplaces.
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