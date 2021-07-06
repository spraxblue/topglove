<!doctype html>
<html lang="en">
  
    <!-- Head -->
    <?php
      @include('layouts/head.php')
    ?>
    <!-- Head -->

  <body>
      <!-- Header -->
      <?php
        @include('layouts/header.php')
      ?>
      <!-- Header -->

        <!-- breadcrumb -->
        <section id="breadcrumb">
            <div class="container-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="career-overview.php">Career</a></li>
                        <li class="breadcrumb-item"><a href="#">Career Opportunity</a></li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- breadcrumb -->
        
        <!-- shape future section -->
        <section id="shape-future">
            <div class="shape-future_container">
                <img class="d-block w-100 career-img" src="../../images/joinus.png">
                <div class="shape-future_p" >
                    <h1 class="shape-future_heading">JOIN US NOW</h1>
                </div>
            </div>
        </section>

        <!-- join us content -->
    <section id="join-us-career">
        <div class="container-wrapper">
            <p>Shaping the future in Top Glove requires consistent application of innovation and creativity that goes
                beyond any one job, department or brand. Career opportunities await you in many areas both technically
                or non-technically. If you’ve got what it takes, we would like to hear from you.</p>
            <a href="" class="btn btn-journey">Begin Your Journey with Top Glove</a>
        </div>

    </section>

    <!-- check out section -->

    <section id="check-out">

        <div class="container-wrapper">
            <div class="fast-facts-header">
                <h2 data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear">CHECK OUT WHAT WE DO IN TOP GLOVE</h2>
            </div>

            <div class="corporate-tab">


                <ul class="row nav nav-pills check-out-tab" id="pills-tab" role="tablist">
                    <li class="col-8 col-lg-4 nav-item "  data-aos="fade-right" data-aos-offset="300" data-aos-easing="linear">
                        <a  class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-one" data-toggle="pill"
                            href="#content-one" role="tab" aria-controls="video-english" aria-selected="true">

                            <img src="../../images/engineering.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">ENGINEERING <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>


                        </a>
                    </li>
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear">
                        <a   class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-two" data-toggle="pill"
                            href="#content-two" role="tab" aria-controls="video-mandarin" aria-selected="false">
                            <img src="../../images/Mask Group 35.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">Marketing <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>

                        </a>
                    </li>
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-left" data-aos-offset="300" data-aos-easing="linear">
                        <a  class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-three" data-toggle="pill"
                            href="#content-three" role="tab" aria-controls="video-malay" aria-selected="false">
                            <img src="../../images/Mask Group 12.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">RESEARCH & DEVELOPMENT <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>

                        </a>
                    </li>
                </ul>



                <div class="tab-content tab-term-content" id="pills-tabContent">

                    <div class="tab-pane tab-job-pane" id="content-one" role="tabpanel" aria-labelledby="check-tab-one">
                        <img class="bi" onclick="secondFunc(this);" src="../../images/Group 919.png" alt="">
                        <div class="row">


                            <div class="col-lg-6 col-12" >
                                <img src="../../images/engineering.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">Engineering</h3>
                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="tab-pane tab-job-pane" id="content-two" role="tabpanel" aria-labelledby="check-tab-two">
                        <img onclick="secondFunc(this);" src="../../images/Group 919.png" class="bi" alt="">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 35.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">Marketing</h3>

                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="tab-pane tab-job-pane" id="content-three" role="tabpanel" aria-labelledby="check-tab-three">
                        <img onclick="secondFunc(this);" src="../../images/Group 919.png" class="bi" alt="">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 12.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">RESEARCH & DEVELOPMENT</h3>

                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
            <div class="corporate-tab">


                <ul class="row nav nav-pills check-out-tab" id="pills-tab" role="tablist">
                    <li class="col-8 col-lg-4 nav-item "  data-aos="fade-right" data-aos-offset="300" data-aos-easing="linear">
                        <a class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-four" data-toggle="pill"
                            href="#content-four" role="tab" aria-controls="video-english" aria-selected="true">

                            <img src="../../images/Mask Group 13.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">Finance <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>


                        </a>
                    </li>
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear">
                        <a class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-five" data-toggle="pill"
                            href="#content-five" role="tab" aria-controls="video-mandarin" aria-selected="false">
                            <img src="../../images/Mask Group 11.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">INFORMATION TECHNOLOGY <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>

                        </a>
                    </li>
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-left" data-aos-offset="300" data-aos-easing="linear">
                        <a class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-six" data-toggle="pill"
                            href="#content-six" role="tab" aria-controls="video-malay" aria-selected="false">
                            <img src="../../images/Mask Group 31.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">MANUFACTURING <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>

                        </a>
                    </li>
                </ul>



                <div class="tab-content tab-term-content" id="pills-tabContent">

                    <div class="tab-pane tab-job-pane" id="content-four" role="tabpanel" aria-labelledby="check-tab-four">
                        <img class="bi" onclick="secondFunc(this);" src="../../images/Group 919.png" alt="">
                        <div class="row">


                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 13.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">FINANCE</h3>
                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="tab-pane tab-job-pane" id="content-five" role="tabpanel" aria-labelledby="check-tab-five">
                        <img onclick="secondFunc(this);" src="../../images/Group 919.png" class="bi" alt="">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 11.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">Information Technology</h3>

                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="tab-pane tab-job-pane" id="content-six" role="tabpanel" aria-labelledby="check-tab-six">
                        <img onclick="secondFunc(this);" src="../../images/Group 919.png" class="bi" alt="">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 31.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">MANUFACTURING</h3>

                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
            <div class="corporate-tab">


                <ul class="row nav nav-pills check-out-tab" id="pills-tab" role="tablist">
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-right" data-aos-offset="300" data-aos-easing="linear">
                        <a class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-seven" data-toggle="pill"
                            href="#content-seven" role="tab" aria-controls="video-english" aria-selected="true">

                            <img src="../../images/Mask Group 10.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">QUALITY ASSURANCE <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>


                        </a>
                    </li>
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear">
                        <a class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-eight" data-toggle="pill"
                            href="#content-eight" role="tab" aria-controls="video-mandarin" aria-selected="false">
                            <img src="../../images/Mask Group 12.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">HEALTH & MEDICAL <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>

                        </a>
                    </li>
                    <li class="col-8 col-lg-4 nav-item" data-aos="fade-left" data-aos-offset="300" data-aos-easing="linear">
                        <a class="nav-link nav-link-job" onclick="myFunction(this);" id="check-tab-nine" data-toggle="pill"
                            href="#content-nine" role="tab" aria-controls="video-malay" aria-selected="false">
                            <img src="../../images/Mask Group 4.png" alt="Engineering Image">
                            <div class="check-para-effect">
                                <p class="hidden-check_head text-uppercase">SUPPORT <span><i
                                            class="fas fa-chevron-right"></i></span></p>
                            </div>
                            <div class="overlay"></div>

                        </a>
                    </li>
                </ul>



                <div class="tab-content tab-term-content" id="pills-tabContent">

                    <div class="tab-pane tab-job-pane" id="content-seven" role="tabpanel" aria-labelledby="check-tab-seven">
                        <img class="bi" onclick="secondFunc(this);" src="../../images/Group 919.png" alt="">
                        <div class="row">


                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 10.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">QUALITY ASSURANCE</h3>
                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="tab-pane tab-job-pane" id="content-eight" role="tabpanel" aria-labelledby="check-tab-eight">
                        <img onclick="secondFunc(this);" src="../../images/Group 919.png" class="bi" alt="">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 12.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">HEALTH & MEDICAL</h3>

                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="tab-pane tab-job-pane" id="content-nine" role="tabpanel" aria-labelledby="check-tab-nine">
                        <img onclick="secondFunc(this);" src="../../images/Group 919.png" class="bi" alt="">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="../../images/Mask Group 4.png">
                            </div>
                            <div class="terms-condition col-lg-6 col-12">
                                <div class="term-heading">

                                    <h3 class="text-uppercase">SUPPORT</h3>

                                </div>
                                <div class="term-content">
                                    <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat sed leo
                                            euismod iaculis eget nec est.
                                        </li>


                                    </ul>
                                </div>
                                <div class="term-accept">
                                    <a href="#" class="btn btn-term-accept">Apply Now</a>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- Footer -->
    <?php 
      @include('layouts/footer.php')
    ?>
    <!-- Footer -->   
  </body>
  
</html>