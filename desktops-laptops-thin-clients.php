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
                        <h4>Contact Us</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
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
                    <img src="assets/images/products/desktops-laptops-thin-clients.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6 about-item-box">
                <div class="team-details-right">
                    <div class="team-details-content">

                        <div class="team-member-title">
                            <h2>Desktop / Laptops / Thin Client System</h2>
                        </div>

                        <p class="desc">
                            Tech Next System provides reliable <strong>Desktop, Laptop & Thin Client Solutions</strong>
                            for businesses, educational institutions, healthcare, and government organizations.
                            Our centralized computing solutions reduce IT costs, simplify management, improve
                            security, and deliver efficient performance for modern workplaces.
                        </p>
                        <div class="project-details-area py-0">
                            <div class="project-details-content">
                                <div class="project-details-list-item">
                                    <h4>Key Benefits</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i>Reduces overall IT infrastructure
                                            cost</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Consumes significantly less power
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>No bulky CPU required at every
                                            workstation</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Remote administration & centralized
                                            support</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Enhanced security & data reliability
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Centralized software deployment &
                                            updates</li>
                                        <li><i class="fa-solid fa-circle-check"></i>Centralized data management & backup
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i>Ideal for Schools, Offices, Banks &
                                            Government Organizations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-info-box mt-25">
                            <div class="about-btn">
                                <a href="javascript:void(0)" class="enquiryBtn"
                                    data-subject="Desktop / Laptops / Thin Client System">
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

                            <h3 class="mt-0">Why Choose Thin Client Systems?</h3>

                            <p class="project-details-desc">
                                Thin Client technology enables organizations to centrally manage multiple
                                users through a secure server environment. Compared to traditional desktop
                                setups, it significantly reduces hardware maintenance, electricity
                                consumption, and software management efforts while improving overall
                                productivity.
                            </p>

                            <a class="project-details-text" href="javascript:void(0)">
                                Smart, Secure & Cost-Effective Computing Solution for Every Organization
                            </a>

                            <p class="project-details-desc">
                                Whether you require Desktop PCs, Business Laptops, or Thin Client Systems,
                                Tech Next System delivers customized solutions with installation,
                                configuration, deployment, and after-sales technical support. Our solutions
                                are ideal for offices, schools, colleges, hospitals, banks, BPOs,
                                government departments, and corporate environments.
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