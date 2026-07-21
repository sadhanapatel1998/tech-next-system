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
                        <h4>Boom Barriers & Turnstiles</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Boom Barriers & Turnstiles</li>
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
                    <img src="assets/images/products/boom-barriers-turnstiles.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Automatic Boom Barrier &amp; Turnstile Systems</h2>
                        </div>

                        <p class="desc">
                            A Boom Barrier is a pivoted bar or pole that blocks vehicular or pedestrian access through a controlled point, typically rising in a vertical arc and often counterweighted for easy operation. A Turnstile is a gate that allows one person to pass at a time, enforcing one-way traffic and restricting passage to authorized individuals through access control, tickets, or passes.
                        </p>
                        <div class="project-details-area pt-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Controlled vehicle &amp; pedestrian access</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Counterweighted for smooth operation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>One-way traffic enforcement via turnstiles</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Integrates with access control systems</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Durable for high-frequency use</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces unauthorized entry risk</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Suitable for indoor &amp; outdoor use</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Malls, Parking Areas &amp; Toll Plazas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Automatic Boom Barrier &amp; Turnstile Systems">
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

                            <h3 class="mt-0">Why Choose Boom Barriers &amp; Turnstiles?</h3>

                            <p class="project-details-desc">
                                Boom Barriers use a pivoted bar to block vehicular or pedestrian access at controlled points, typically counterweighted for smooth, easy operation. Turnstiles allow only one authorized person to pass at a time, enforcing one-way traffic through access control, tickets, or passes.
                            </p>

                            <a class="project-details-text" href="#">
                                Controlled, Secure Access for Vehicles &amp; Pedestrians
                            </a>

                            <p class="project-details-desc">
                                Whether you require Boom Barriers for parking and toll areas or Turnstiles for controlled pedestrian access, Tech Next Systems delivers customized solutions with installation, configuration, deployment, and after-sales technical support, ideal for malls, residential buildings, parking areas, and toll plazas.
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