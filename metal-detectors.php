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
                        <h4>Handheld & Door Frame Metal Detectors</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Handheld & Door Frame Metal Detectors</li>
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
                    <img src="assets/images/products/metal-detectors.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Handheld &amp; Door Frame Metal / Temperature Detectors</h2>
                        </div>

                        <p class="desc">
                            A Handheld or Door Frame Metal Detector (DFMD) detects metal objects such as jewellery, guns, and other arms hidden on a person passing through, commonly known as a 'walk-through' detector. Door Frame Temperature Detectors use military-grade infrared technology to screen body temperature of people passing through, making them ideal for malls, business centres, and public buildings.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Detects hidden metal objects instantly</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Walk-through &amp; handheld options available</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Infrared body temperature screening</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Enhances premise security screening</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Fast, non-intrusive checks</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for high footfall areas</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reliable, low-maintenance operation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Malls, Offices, Hotels &amp; Public Buildings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Handheld &amp; Door Frame Metal / Temperature Detectors">
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

                            <h3 class="mt-0">Why Choose Metal &amp; Temperature Detectors?</h3>

                            <p class="project-details-desc">
                                Handheld and Door Frame Metal Detectors identify metal objects such as jewellery, guns and other arms hidden on a person passing through, commonly known as walk-through detectors. Door Frame Temperature Detectors use military-grade infrared technology to screen body temperature non-intrusively as people pass through.
                            </p>

                            <a class="project-details-text" href="#">
                                Fast, Reliable Security Screening for Every Entry Point
                            </a>

                            <p class="project-details-desc">
                                Whether you require Handheld Metal Detectors, Door Frame Metal Detectors, or Temperature Screening systems, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for malls, business centres, housing societies, and public buildings.
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