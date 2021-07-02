<!doctype html>
<html lang="en">
<!-- Head -->
<?php @include('layouts/head.php') ?>
<!-- Head -->

<body>
    <!-- Header -->
    <?php @include('layouts/header.php') ?>
    <!-- Header -->
    <!-- Sidebar -->
    <nav id="side-menu" class="sidebar-menu">
        <div class="timeline">
            <div class="line">
                <div class="line-content">
                    <a class="content active" href="#news">
                        <div class="circle"></div>
                        <h1>News</h1>
                    </a>
                    <a class="content" href="#electronicMedia">
                        <div class="circle"></div>
                        <h1>Electronic Media</h1>
                    </a>
                    <a class="content" href="#pressRelease">
                        <div class="circle"></div>
                        <h1>Press Release</h1>
                    </a>
                    <a class="content" href="#chairmainsTalk">
                        <div class="circle"></div>
                        <h1>Chairman's Powertalks</h1>
                    </a>
                    <a class="content" href="#event">
                        <div class="circle"></div>
                        <h1>Event</h1>
                    </a>
                    <a class="content" href="#mediaKit">
                        <div class="circle"></div>
                        <h1>Media Kit</h1>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <main>
        <!-- breadcrumb -->
        <section id="breadcrumb">
            <div class="container-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="newsroom.php">Newsroom</a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
            </div>
        </section>
        <!-- breadcrumb -->
        <section id="news-profile" class="main-profile">
           
            <div id="about-us-navigation">
            <div class="container-wrapper">
                <ul role="tablist" class="nav nav-pills nav-justified inner-nav">
                    <li><a href="news.php">News</a></li>
                    <li><a href="electronicMedia.php">Electronic Media</a></li>
                    <li><a href="pressRelease.php">Press Release</a></li>
                    <li><a href="chairmanPowerTalk.php">Chairman's Powertalks</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="mediaKits.php">Media Kit</a></li>
                </ul>
            </div>
        </div>

            <div class="slider-conatiner">
                <ul class="custom-indicators">
                    <li class="next active"></li>
                    <li class="prev"></li>
                </ul>
                <div id="owl-newsSlider" class="owl-carousel owl-theme owl-loaded">
                    <div class="item"><img class="news-carousel-img" src="../../images/newsroom-bg.png" alt="News">
                        <div class="carousel-caption">
                            <h1 class="main-title text-blue"   data-aos-offset="200" data-aos-easing="linear">NEWSROOM</h1>
                            <p   data-aos-offset="200" data-aos-easing="linear">Stay up to date with the latest news on Top Glove’s performance and industry perspectives.</p>
                        </div>
                    </div>
                    <div class="item"><img class="news-carousel-img" src="../../images/newsroom-bg.png" alt="News2">
                        <div class="carousel-caption">
                            <h1 class="main-title text-blue"   data-aos-offset="200" data-aos-easing="linear">Content Awaited</h1>
                            <p>Stay up to date with the latest news on Top Glove’s performance and industry perspectives.</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section id="news" class="News mt-5 aos-all">
            <div class="section-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-heading">
                            <h1>News</h1>
                            <a href="news.php"><span class="viewAll">View All</span></a>
                        </div>
                    </div>
                </div>
                <div class="row content-container">
                    <div class="col-md-12">
                        <div class="row content-row">
                            <div class="col-sm-11 col-md-3 col-lg-3"  data-aos-offset="200" data-aos-easing="linear">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>img-1.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">THE SUN DAILY</h5>
                                        <p class="card-text">Top Glove’s R&D unit ranked second among Malaysian patent applicants in 2020
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3" >
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>img-2.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">THE EDGE MARKETS</h5>
                                        <p class="card-text">Top Glove R&D unit ranked second highest among Malaysian patent applicants for
                                            2020</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3" >
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>img-3.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">FOCUS MALAYSIA</h5>
                                        <p class="card-text">Top Glove is the second highest Malaysian patent applicant under MyIPO</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3" >
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>img-4.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">THE STAR</h5>
                                        <p class="card-text">Top Glove to emphasise more on ESG in business ops</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3" >
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>img-5.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">FOCUS MALAYSIA</h5>
                                        <p class="card-text">May the Ox Year bless Top Glove (and its shareholders) with bountiful harvest
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3" >
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>img-1.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">MALAY MAIL</h5>
                                        <p class="card-text">Malaysian Rating Corp upgrades Top Glove credit rating to AA+</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="electronicMedia" class="electronic mt-5">
            <div class="section-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-heading">
                            <h1>Electronic Media</h1>
                            <a href="electronicMedia.php"><span class="viewAll">View All</span></a>
                        </div>
                    </div>
                </div>
                <div class="row content-container">
                    <div class="col-md-12">
                        <div class="row content-row">
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">BFM 89.9</h5>
                                        <p class="card-text">WILL TOP GLOVE REMAIN TOP DOG IN RUBBER GLOVES?</p>
                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">MALAY MAIL</h5>
                                        <p class="card-text">Malaysian Rating Corp upgrades Top Glove credit rating to AA+</p>
                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">BFM 89.9</h5>
                                        <p class="card-text">TOP GLOVE NET PROFIT FOR 2020 FINANCIAL YEAR SURGED 1.9 BILLION RINGGIT</p>

                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">BFM 89.9</h5>
                                        <p class="card-text">TOP GLOVE HAS ALLOCATED RM8B CAPEX IN NEXT 6 YEARS</p>
                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">CNBC</h5>
                                        <p class="card-text">TOP GLOVE ‘SEES A LOT OF VALUE’ IN HONG KONG LISTING, SAYS MANAGING DIRECTOR
                                        </p>
                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">BLOOMBERG TV</h5>
                                        <p class="card-text">TOP GLOVE SAYS DEMAND VERY STRONG DURING PANDEMIC</p>
                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img_path; ?>board-member-6.png" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">CNA</h5>
                                        <p class="card-text">INTERVIEW ON INCREASING PRODUCTION TO MEET RISING DEMAND</p>
                                        <i class="fa fa-play play-btn" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="pressRelease" class="pressRelease mt-5">
            <div class="section-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-heading">
                            <h1>Press Release</h1>
                            <a href="pressRelease.php"><span class="viewAll">View All</span></a>
                        </div>
                    </div>
                </div>
                <div class="row content-container">
                    <div class="col-md-12">
                        <div class="row content-row">
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Top Glove’s R&D unit ranked second among Malaysian patent applicants in 2020
                                        </p>

                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Top Glove R&D unit ranked second highest among Malaysian patent applicants for
                                            2020</p>
                                            </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Top Glove is the second highest Malaysian patent applicant under MyIPO</p>
                                        </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Top Glove to emphasise more on ESG in business ops</p>
                                        </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">May the Ox Year bless Top Glove (and its shareholders) with bountiful harvest
                                        </p>
                                        </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Malaysian Rating Corp upgrades Top Glove credit rating to AA+</p>
                                        </div>
                                    <div class="card-footer">
                                        <h5 class="card-info">15 Feb 2021</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="chairmainsTalk" class="chairmainsTalk mt-5">
            <div class="section-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="left-heading">
                            <h1>Chairman's<br>PowerTalks</h1>
                            <a href="chairmanPowertalk.php"><p class="left-viewAll">View All</p></a>
                        </div>
                        <div class="msg-bottom text-blue text-right">
                            <p class="m-0">TAN SRI DR LIM WEE CHAI INTERNATIONAL ANTI <br> CORRUPTION DAY MESSAGE 2020</p>
                            <p class="text-grey">08 Dec 2020</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="img-container">
                            <img class="img-fluid" src="<?php echo $img_path; ?>chairman.png">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="event" class="investorRelations mt-5">
            <div class="section-container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="left-heading">
                            <h1>Upcomming<br>Investors Relations <br>Events</h1>
                            <p class="left-viewAll">View All</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div id="events-overflow" class="row overflow">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="card active">
                                    <div class="card-body">
                                        <p class="event-date"><strong>02</strong><br>March 2021</p>
                                        <p class="card-text">Nomura ASEAN Virtual Conference 2021
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="event-date"><strong>30</strong><br>March 2021</p>
                                        <p class="card-text">ICA The Future of Asia Conference
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="card no-upcoming ">
                                    <div class="card-body">
                                        <p class="card-text">No upcoming event
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 col-md-1 col-lg-1">
                                <div class="card no-last-event ">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mediaKit" class="mediaKit mediakit-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Media Kit</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Use of Top Glove Logo and other Top Glove Images by Journalists and Press Agencies</p>
                        <p>We recognise that press agencies and journalists often wish to use the Top Glove logo or other Top Glove images in connection with news stories. We have no objection to such use, but we do need to ensure that the logo and images are used correctly. </p>
                        <p>From this image library you can download up-to-date, high quality images of the Top Glove logo and other pictures, for journalistic use only. Any misuse may result in this permission being withdrawn; deliberate misuse could result in legal action against you.</p>
                        <p>The images on the following pages are not for use by suppliers and/or publishers. If you are a supplier and/or publisher and would like to use Top Glove images, please write to us at <email>media@topglove.com.my</email>
                        </p>
                    </div>
                </div>
                <div class="mediakit-images">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4 pb-2">
                            <div  class="social-point bg-red overflow-hidden">
                                <a href="mediakits.php">
                                    <div class="social-point-img">
                                        <img src="<?php echo $img_path; ?>media-1.png" alt="img" class="w-100"></div>
                                    <div class="social-point-heading d-flex justify-content-between align-items-end">
                                        <h4>Image Library</h4><i class="fas fa-angle-right"></i>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4 pb-2">
                            <div  class="social-point bg-red overflow-hidden">
                                <a href="mediakits.php">
                                    <div class="social-point-img">
                                        <img src="<?php echo $img_path; ?>media-2.png" alt="img" class="w-100"></div>
                                    <div class="social-point-heading d-flex justify-content-between align-items-end">
                                        <h4>Fact Sheet</h4><i class="fas fa-angle-right"></i>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-4 pb-2">
                            <div  class="social-point bg-red overflow-hidden">
                                <a href="mediakits.php">
                                    <div class="social-point-img">
                                        <img src="<?php echo $img_path; ?>media-3.png" alt="img" class="w-100"></div>
                                    <div class="social-point-heading d-flex justify-content-between align-items-end">
                                        <h4>Logo</h4><i class="fas fa-angle-right"></i>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php @include('layouts/footer.php') ?>
    <!-- Footer -->
    <script>
    </script>
    <script type="text/javascript">
        $(document).ready(function() {


        });
    </script>
</body>

</html>