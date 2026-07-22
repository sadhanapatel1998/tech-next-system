<?php
ob_start();
include('include/data.php');
?>

<!-- breadcumb Section-->
<div class="breadcumb-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 ">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h4>Gallery</h4>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcumb Section-->

<!-- Image Gallery area -->
<section class="gallery-section pt-80 pb-100 ">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <div class="section-sub-title">
                        <h1 class="sub-title">
                            <img src="assets/images/main-home/sub-title-icon.png" alt="sub-icon">
                            Our Gallery
                        </h1>
                    </div>
                    <div class="section-title">
                        <h1 class="title title-anim">
                            Explore Our Projects & Installations
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($gallery as $item) { ?>
                <div class="col-lg-3 col-md-3 col-6 mb-4">
                    <a href="<?= $item['image']; ?>" class="gallery-item" title="<?= $item['title']; ?>">
                        <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
                        <div class="gallery-overlay">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Image Gallery area-->





<?php
$content = ob_get_clean();
require 'layout.php';
?>