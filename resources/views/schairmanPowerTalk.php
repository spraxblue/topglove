<!doctype html>
<html lang="en">
<!-- Head -->
<?php @include('layouts/head.php') ?>
<!-- Head -->

<body>
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
                        <li class="breadcrumb-item"><a href="newsroom.php">Newsroom</a>
                        </li>
                        <li class="breadcrumb-item"><a href="chairmanPowerTalk.php">chairman's Powertalks</a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
            </div>
        </section>
        <!-- breadcrumb -->
        <section id="chairmainPowertalks" class="single-item mt-5">
            <div class="container">
                <div class="row single-item-conatiner">
                    <div class="col-md-12">
                        <h1>Tan Sri Dr Lim Wee Chai International Anti Corruption Day Message 2020</h1>
                        <p><strong class="text-grey">23 Sep 2020</strong></p>
                        <div class="eleMedia-video-conatiner">
                            <video controls="" autoplay="" muted="" loop="" id="myVideo1">
                                <source src="videos/demo-video.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <small>Tan Sri Dr Lim reiterates Top Glove’s commitment to Anti Corruption for the year 2020. Top Glove Company was the first Malaysian private company to receive the ISO 37001 Anti Bribery Management in 2017.</small>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="main-heading">
                            <h1>MORE Powertalks</h1>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <a href="schairmanPowerTalk.php">
                                            <div class="card">
                                                <div class="card-overlay-container">
                                                    <div class="card-top-overlay"></div><img class="card-img-top" src="../../images/cht-1.png" alt="Card image" style="width:100%"><i class="fa fa-play play-btn" aria-hidden="true"></i>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">WILL TOP GLOVE REMAIN TOP DOG IN RUBBER GLOVES?</p>
                                                </div>
                                                <div class="card-footer">
                                                    <h5 class="card-info">15 Feb 2021</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <a href="schairmanPowerTalk.php">
                                            <div class="card">
                                                <div class="card-overlay-container">
                                                    <div class="card-top-overlay"></div><img class="card-img-top" src="../../images/cht-2.png" alt="Card image" style="width:100%"><i class="fa fa-play play-btn" aria-hidden="true"></i>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">TOP GLOVE HAS ALLOCATED RM8B CAPEX IN NEXT 6 YEARS</p>
                                                </div>
                                                <div class="card-footer">
                                                    <h5 class="card-info">15 Feb 2021</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <a href="schairmanPowerTalk.php">
                                            <div class="card">
                                                <div class="card-overlay-container">
                                                    <div class="card-top-overlay"></div><img class="card-img-top" src="../../images/cht-3.png" alt="Card image" style="width:100%"><i class="fa fa-play play-btn" aria-hidden="true"></i>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">TOP GLOVE NET PROFIT FOR 2020 FINANCIAL YEAR SURGED 1.9 BILLION RINGGIT</p>
                                                </div>
                                                <div class="card-footer">
                                                    <h5 class="card-info">15 Feb 2021</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
        var track = document.getElementById('track');

        var controlBtn = document.getElementById('play-pause');

        function playPause() {
            if (track.paused) {
                track.play();
                //controlBtn.textContent = "Pause";
                controlBtn.className = "pause";
            } else {
                track.pause();
                //controlBtn.textContent = "Play";
                controlBtn.className = "play";
            }
        }

        controlBtn.addEventListener("click", playPause);
        track.addEventListener("ended", function() {
            controlBtn.className = "play";
        });
    </script>
    <script type="text/javascript">
    </script>
</body>

</html>