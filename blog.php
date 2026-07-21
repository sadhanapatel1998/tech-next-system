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
                        <h4>Latest Blog</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Latest Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcumb Section-->

<!-- latest blog section -->
 <div class="latest-blog-section-home2-classic mt-0">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <div class="section-sub-title">
                        <h1 class="sub-title">
                            <img src="assets/images/main-home/sub-title-icon.png" alt="sub-icon">Latest Blog
                        </h1>
                    </div>

                    <div class="section-title">
                        <h1 class="title title-anim">Insights & Innovations from</h1>
                        <h1 class="title title-anim">Our Security Experts</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="single-blog-box">
                    <div class="blog-thumb reveal">
                        <img src="assets/images/blog/blog-1.jpg" alt="thumb">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title">How Modern CCTV
                            Systems
                            Improve Business Security</h2>
                        <p>Discover how AI-powered CCTV surveillance enhances monitoring,
                            reduces security risks, and provides real-time protection for
                            homes, offices, and commercial properties.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-blog-box">
                    <div class="blog-thumb reveal">
                        <img src="assets/images/blog/blog-2.jpg" alt="thumb">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title">Access Control
                            Solutions
                            for Smarter Workplaces</h2>
                        <p>Learn how biometric, RFID, and smart access control systems
                            improve workplace security while providing convenient and
                            efficient entry management.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-blog-box">
                    <div class="blog-thumb reveal">
                        <img src="assets/images/blog/blog-3.jpg" alt="thumb">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title">Fire Alarm Systems:
                            Protecting Lives & Assets</h2>
                        <p>Understand the importance of advanced fire alarm systems,
                            early detection technology, and how they help safeguard
                            people and valuable infrastructure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- latest blog section -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>