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
                        <h4>Electronic Wardrobe Locks</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Electronic Wardrobe Locks</li>
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
                    <img src="assets/images/products/smart-door-locks.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Electronic / Digital Wardrobe Lock Systems</h2>
                        </div>

                        <p class="desc">
                            Electronic Wardrobe Locks provide secure, keyless storage solutions for lockers, wardrobes, and cabinets in offices, gyms, hotels, and residential spaces. Compact and reliable, these locks eliminate the need for physical keys while offering durable, long-term performance.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Keyless, secure wardrobe access</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Compact design fits most cabinets</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Durable, long-lasting mechanism</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Multiple access methods available</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces risk of lost keys</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Easy retrofit installation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reliable performance over time</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Offices, Gyms, Hotels &amp; Homes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Electronic / Digital Wardrobe Lock Systems">
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

                            <h3 class="mt-0">Why Choose Electronic Wardrobe Locks?</h3>

                            <p class="project-details-desc">
                                Electronic wardrobe locks offer a compact, keyless security solution for lockers, cabinets, and wardrobes, eliminating the need for physical keys and reducing the risk of lost access. Their straightforward, reliable operation ensures long-lasting performance with minimal maintenance.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Compact, Secure &amp; Keyless Storage Solutions
                            </a>

                            <p class="project-details-desc">
                                Whether you require locks for office lockers, gym cabinets, or home wardrobes, Tech Next Systems delivers customized electronic wardrobe lock solutions with installation, configuration, deployment, and after-sales technical support, ideal for offices, gyms, hotels, and residential spaces.
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