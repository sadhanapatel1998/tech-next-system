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
                        <h4>Home Automation Solutions</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Home Automation Solutions</li>
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
                    <img src="assets/images/products/home-automation.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Home Automation / Motorized Curtain Systems</h2>
                        </div>

                        <p class="desc">
                            Tech Next Systems offers RetroFit and Touch Panel Home Automation solutions along with Motorized Curtains. RetroFit automation modules fit behind existing switch boards without altering electrical wiring, converting switches for manual or mobile app control, while Touch Panels replace manual switch boards entirely for a modern smart-home interface.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy RetroFit installation, no rewiring needed</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Touch Panel replaces manual switch boards</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Control via Smartphone, Remote or Voice</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Motorized curtains for effortless ambiance</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Two-way manual &amp; app-based operation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Customizable per interior aesthetics</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Protects curtains from wear &amp; tear</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Homes, Offices &amp; Smart Interiors</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Home Automation / Motorized Curtain Systems">
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

                            <h3 class="mt-0">Why Choose Home Automation Solutions?</h3>

                            <p class="project-details-desc">
                                RetroFit Automation modules fit behind existing switch boards without altering electrical wiring or interior décor, converting standard switches into app-controllable two-way switches. Touch Panel Automation replaces manual switch boards entirely, while Motorized Curtains let you control curtains via smartphone, remote control, or voice command.
                            </p>

                            <a class="project-details-text" href="#">
                                Smarter Living with Effortless Home Control
                            </a>

                            <p class="project-details-desc">
                                Whether you require RetroFit modules, Touch Panel systems, or Motorized Curtains, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for homes, offices, and modern smart interiors.
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