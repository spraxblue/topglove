<!doctype html>
<html lang="en">
<!-- Head -->
<?php @include('layouts/head.php') ?>
<!-- Head -->

<body class="invert-footer">
    <!-- Header -->
    <?php @include('layouts/header.php') ?>
    <!-- Header -->
    <main>
        <!-- breadcrumb -->
        <section id="breadcrumb">
            <div class="container-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="sustainability.php">Sustainability</a>
                        </li>
                        <li class="breadcrumb-item"><a href="governance.php">Governance</a>
                        </li>
                        <li class="breadcrumb-item"><a href="corporate-governance.php">Corporate Governance</a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
            </div>
        </section>
        <!-- breadcrumb -->
        <section id="hero-slider" class="career-slider">
            <!--Carousel Wrapper-->
            <div id="about-us-navigation" class="nav-bg-blue">
                <div class="container-wrapper">
                    <ul class="inner-nav">
                        <li><a href="governance-structure.php">Governance Structure</a></li>
                        <li><a href="#">Engagement between Board Committees & Management</a></li>
                        <li><a href="governance-manual.php">Corporate Manual</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- welcome IR message section -->
        <section id="shape-future-overview">
            <div class="cop-gov-head_container">
                <!-- <img class="d-block w-100 gov-head-img" src="../../images/Intersection 21.png"> -->
                <div class="gov-welcome" data-aos="fade-right" data-aos-offset="300" data-aos-easing="linear">
                    <h1 class="gov_heading gov-welcomw_msg">Corporate <br> GOVERNANCE</h1>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear">
                            <p class="cgov-welcom-msg">Our approach to Corporate Governance fosters a culture of <strong>appropriate risk taking and effective decision making, which is promoted beyond the boardroom by the close involvement of the Executive Directors</strong> in day-to-day operations. We remain committed to upholding the principles of good governance and complied with the provisions of the Malaysian Code on Corporate Governance (MCCG) and, the principles and listing requirements from Bursa Securities Main Listing Requirement</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cop-gov-quickLinks mt-5">
            <div class="row cop-gov-quickLinks-items">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4 pb-2">
                    <div class="social-point bg-red overflow-hidden" data-aos="fade-right" data-aos-offset="300" data-aos-easing="linear">
                        <a href="governance-structure.php">
                            <div class="social-point-img">
                                <img src="../../images/Mask Group 1325.png" alt="img" class="w-100">
                            </div>
                            <div class="social-point-heading d-flex justify-content-between align-items-end">
                                <h4>Governance Structure</h4><i class="fas fa-angle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4 pb-2">
                    <div class="social-point bg-red overflow-hidden" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear">
                        <a href="#">
                            <div class="social-point-img">
                                <img src="../../images/Mask Group 13273.png" alt="img" class="w-100">
                            </div>
                            <div class="social-point-heading d-flex justify-content-between align-items-end">
                                <h4>Engagement between Board Committees & Management</h4><i class="fas fa-angle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4 pb-2">
                    <div class="social-point bg-red overflow-hidden" data-aos="fade-left" data-aos-offset="300" data-aos-easing="linear">
                        <a href="governance-manual.php">
                            <div class="social-point-img">
                                <img src="../../images/Mask Group 13264.png" alt="img" class="w-100">
                            </div>
                            <div class="social-point-heading d-flex justify-content-between align-items-end">
                                <h4>Governance Manual</h4><i class="fas fa-angle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>



    </main>
    <!-- Footer -->
    <?php @include('layouts/footer.php') ?>
    <!-- Footer -->

    <script>
        $(document).ready(function() {
            var imgs = $('.footer-brands-container img')
            $(imgs[0]).attr('src', '../../images/Group 1915.png')
            $(imgs[2]).attr('src', '../../images/Group 2265.png')
        });
    </script>
</body>

</html>

<!-- Modal -->
<div id="policiesdetails" class="modal fade policiesdetails modal-white" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="img-fluid img-cross" src="<?php echo $img_path; ?>modal-close.png">
                </button>
                <p class="modal-content-heading">Policies</p>
                <div class="row doc-download-btns">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Whistleblowing Policy & Procedure</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Directors’ Code of Conduct and Ethics</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Succession Planning Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Corporate Disclosure Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Board Diversity Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>External Auditors Assessment Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Remuneration Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Related Party Transaction Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Independent Director Tenure Policy</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Training Policy for Directors</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Board Effectiveness Evaluation Framework</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>Business Partners’ Code of Conduct</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div id="manageSystemdetails" class="modal fade manageSystemdetails modal-white" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="img-fluid img-cross" src="<?php echo $img_path; ?>modal-close.png">
                </button>
                <p class="modal-content-heading">Management System</p>
                <div class="row doc-download-btns">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>ISO 37001:2016, Anti Bribery Management System</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <button type="button" class="doc-download-btn"><span>ISO 27001, Information Security Management System</span>
                            <span class="doc-download-icon"><img class="doc-download-img" src="../../images/event-download.png"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>