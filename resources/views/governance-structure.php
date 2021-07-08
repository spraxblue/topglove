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
                        <li class="breadcrumb-item"><a href="ir-overview.php">Investor Relations</a>
                        </li>
                        <li class="breadcrumb-item"><a href="committees-managements.php">Corporate Governance</a>
                        </li>
                        <li class="breadcrumb-item"><a href="governance-structure.php">Governance Structure</a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
            </div>
        </section>
        <!-- breadcrumb -->
        <!-- welcome IR message section -->
        <section id="shape-future-overview">
            <div class="gov-stru-head_container">
                <div class="gov-welcome" data-aos="fade-right" data-aos-offset="300" data-aos-easing="linear">
                    <h1 class="gov_heading gov-welcomw_msg">GOVERNANCE <br> Structure</h1>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="text-center">
                    <img class="img-fluid img-responsive" src="<?php echo $img_path?>structure_13112020.png">
                </div>
                </div>
            </div>
        </div>
        </section>



    </main>
    <!-- Footer -->
    <?php @include('layouts/footer.php') ?>
    <!-- Footer -->
</body>

</html>