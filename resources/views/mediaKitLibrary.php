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
                        <li class="breadcrumb-item"><a href="mediaKits.php">Media kits</a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
            </div>
        </section>
        <!-- breadcrumb -->
        <section id="news" class="News-page mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-heading">
                            <h1>Media kit</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs yr-links">
                            <li><a class="item-link active" data-toggle="tab" href="#imgliabrary">Image Library</a></li>
                            <li><a class="item-link" data-toggle="tab" href="#t-factSheet">Fact sheet</a></li>
                            <li><a class="item-link" data-toggle="tab" href="#t-logo">Logo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-5">
                    <div id="imgliabrary" class="tab-pane fade-in active">
                        <div class="lib-download-bar">
                            <span><strong class="text-grey">Selected:</strong> <span class="lib-img-selectd-count text-blue" data-val='0'>0</span>
                                <button class="lib-download-select lib-download-btn">Download</button>
                            </span>
                            <a href="javascript:void(0)" class="lib-img-download-all-main lib-img-download-all text-blue boder-bottom-b">Donwload All</a>
                        </div>
                        <p>Top Glove’s consistently strong performance is attributed to the astute leadership provided by its senior management. The key spokespersons for Top Glove Corporation are Tan Sri Dr. Lim Wee Chai, Executive Chairman; Dato’ Lee Kim Meow, Managing Director; and Mr Lim Cheong Guan, Executive Director.</p>
                        <div class="media-libaray-container mt-4">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <div class="media-lib-item">
                                        <img class="img-fluid media-libaray-img" src="<?php echo $img_path; ?>board-member-1.png">
                                        <p class="lib-img-dec">Dato’ Lee Kim Meow | Managing Director (Standing)</p>
                                        <div class="media-lib-item-action">
                                            <img class="media-lib-item-search" src="<?php echo $img_path; ?>Group 1075@2x.png">
                                            <div class="check-round media-lib-item-check ">
                                                <input type="checkbox" name="selectImage[]" id="checkbox1" />
                                                <label for="checkbox1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <div class="media-lib-item">
                                        <img class="img-fluid media-libaray-img" src="<?php echo $img_path; ?>board-member-2.png">
                                        <p class="lib-img-dec">Dato’ Lee Kim Meow | Managing Director (Standing)</p>
                                        <div class="media-lib-item-action">
                                            <img class="media-lib-item-search" src="<?php echo $img_path; ?>Group 1075@2x.png">
                                            <div class="check-round media-lib-item-check ">
                                                <input type="checkbox" name="selectImage[]" id="checkbox2" />
                                                <label for="checkbox2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <div class="media-lib-item">
                                        <img class="img-fluid media-libaray-img" src="<?php echo $img_path; ?>board-member-3.png">
                                        <p class="lib-img-dec">Dato’ Lee Kim Meow | Managing Director (Standing)</p>
                                        <div class="media-lib-item-action">
                                            <img class="media-lib-item-search" src="<?php echo $img_path; ?>Group 1075@2x.png">
                                            <div class="check-round media-lib-item-check ">
                                                <input type="checkbox" name="selectImage[]" id="checkbox3" />
                                                <label for="checkbox3"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <div class="media-lib-item">
                                        <img class="img-fluid media-libaray-img" src="<?php echo $img_path; ?>board-member-4.png">
                                        <p class="lib-img-dec">Dato’ Lee Kim Meow | Managing Director (Standing)</p>
                                        <div class="media-lib-item-action">
                                            <img class="media-lib-item-search" src="<?php echo $img_path; ?>Group 1075@2x.png">
                                            <div class="check-round media-lib-item-check ">
                                                <input type="checkbox" name="selectImage[]" id="checkbox4" />
                                                <label for="checkbox4"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <div class="media-lib-item">
                                        <img class="img-fluid media-libaray-img" src="<?php echo $img_path; ?>board-member-5.png">
                                        <p class="lib-img-dec">Dato’ Lee Kim Meow | Managing Director (Standing)</p>
                                        <div class="media-lib-item-action">
                                            <img class="media-lib-item-search" src="<?php echo $img_path; ?>Group 1075@2x.png">
                                            <div class="check-round media-lib-item-check ">
                                                <input type="checkbox" name="selectImage[]" id="checkbox5" />
                                                <label for="checkbox5"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <div class="media-lib-item">
                                        <img class="img-fluid media-libaray-img" src="<?php echo $img_path; ?>board-member-6.png">
                                        <p class="lib-img-dec">Dato’ Lee Kim Meow | Managing Director (Standing)</p>
                                        <div class="media-lib-item-action">
                                            <img class="media-lib-item-search" src="<?php echo $img_path; ?>Group 1075@2x.png">
                                            <div class="check-round media-lib-item-check ">
                                                <input type="checkbox" name="selectImage[]" id="checkbox6" />
                                                <label for="checkbox6"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="t-factSheet" class="tab-pane fade in">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="tile-bg-white">
                                    <h3 class="text-blue">THE COMPANY</h3>
                                    <p>Top Glove is the world’s largest manufacturer of gloves. Founded by Tan Sri Dr Lim Wee Chai and Puan Sri Tong Siew Bee in 1991, it was listed on the Second Board of Bursa Malaysia in March 2001, then promoted within 14 months to the Main Board in May 2002. On 28 June 2016, Top Glove was also listed on the Mainboard of the Singapore Exchange. The company exports to more than 2000 customers in over 195 countries worldwide.</p>
                                </div>
                                <div class="tile-bg-white">
                                    <h3 class="text-blue">IN-HOUSE BRANDS</h3>
                                    <table>
                                        <tr>
                                            <td>TOP GLOVE</td>
                                            <td>TG MEDICAL</td>
                                            <td>GREAT GLOVE</td>
                                        </tr>
                                        <tr>
                                            <td>MASTERGUARD</td>
                                            <td>TOP CARE</td>
                                            <td>TOP FEEL</td>
                                        </tr>
                                        <tr>
                                            <td>DURADAM</td>
                                            <td>DURABAND</td>
                                            <td>TOP MASK</td>
                                        </tr>
                                        <tr>
                                            <td>TOP APRON</td>
                                            <td>TOP CLEAN</td>
                                            <td>TOP BRIGHT</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tile-bg-white bod">
                                    <h3 class="text-blue">BOARD OF DIRECTORS</h3>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Executive Chairman</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Tan Sri Dr Lim Wee Chai</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Managing Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Dato’ Lee Kim Meow</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Non-Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Puan Sri Tong Siew Bee</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Lim Hooi Sin</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Lim Cheong Guan</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Senior Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Dato’ Lim Han Boon</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Tan Sri Rainer Althoff</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Datuk Noripah Kamso</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Sharmila Sekarajasekaran</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Lim Andy</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Datuk Dr Norma Mansor</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <p class="bordDL">Independent Non-Executive Director</p>
                                        </div>
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <p class="bordDR">: Azrina Binti Arshad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="tile-bg-white">
                                    <h3 class="text-blue">BUSINESS AND MANUFACTURING ACTIVITIES</h3>
                                    <p>Top Glove manufactures and exports the following glove and non-glove products:</p>
                                    <p><strong>Examination Gloves</strong></p>
                                    <ul class="summary-card-row-detail">
                                        <li>Latex Examination (Powdered Gloves)</li>
                                        <li>Latex Examination Online Chlorinated (Powder-Free Gloves)</li>
                                        <li>Latex Examination Polymer Coated (Powder-Free Gloves)</li>
                                        <li>Nitrile Examination (Powdered Gloves)</li>
                                        <li>Nitrile Examination Online Chlorinated (Powder-Free Gloves)</li>
                                        <li>Nitrile Examination Polymer Coated (Powder-Free Gloves)</li>
                                        <li>Nitrile Disposable Kids Gloves</li>
                                        <li>Nitrile Moisturising Gloves</li>
                                        <li>Soft Nitrile Examination Gloves</li>
                                        <li>Chemotherapy Nitrile Gloves</li>
                                        <li>Vinyl Examination Gloves</li>
                                        <li>Coloured Gloves (Latex/Nitrile)</li>
                                        <li>Flavoured Gloves (Mint)</li>
                                        <li>Chloroprene Examination Gloves</li>
                                        <li>Biodegradable Nitrile Examination Gloves</li>
                                    </ul>
                                    <p><strong>Surgical Gloves</strong></p>
                                    <ul class="summary-card-row-detail">
                                        <li>Latex Surgical Gloves</li>
                                        <li>Wet Donning Latex Surgical Gloves</li>
                                        <li>Double Donning Surgical Gloves</li>
                                        <li>Nitrile Surgical Gloves</li>
                                        <li>Polyisoprene Surgical Gloves</li>
                                        <li>Polychloroprene Surgical Gloves</li>
                                    </ul>
                                    <p><strong>Others Glove & Non-Glove Products</strong></p>
                                    <ul class="summary-card-row-detail">
                                        <li>Cleanroom Gloves (Latex/Nitrile)</li>
                                        <li>Supported & PE Gloves</li>
                                        <li>High Risk Gloves (Latex/Nitrile)</li>
                                        <li>CPE Gloves</li>
                                        <li>TPE Gloves</li>
                                        <li>Food Handling Gloves</li>
                                        <li>Radioactive Gloves </li>
                                        <li>Latex Condoms</li>
                                        <li>Latex Dental Dams</li>
                                        <li>Latex Exercise Bands</li>
                                        <li>Face Mask</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="tile-bg-white financial">
                                    <h3 class="text-blue">FINANCIAL INFORMATION</h3>
                                    <small class="text-light-grey">Issued & Paid-up Capital</small>
                                    <p><strong>RM 1,675,704,222 </strong> (as at 31 August 2020)</p>
                                    <small class="text-light-grey">Sales</small>
                                    <p><strong>RM 4.8 billion </strong> (as at 9 December 2020)</p>
                                    <small class="text-light-grey">Market Capitalisation</small>
                                    <p><strong>RM 53.2 billion </strong> (as at 13 January 2021)</p>
                                    <small class="text-light-grey">Component Stock</small>
                                    <p class="m-0">MSCI Global Standard Index, FTSE Bursa Malaysia KLCI Index, FBM 100 Index, FBM Emas Index, FBM Hijrah Syariah Index, FBM Emas Syariah Index, FTSE4Good Bursa Malaysia Index, Singapore Exchange and the Dow Jones Sustainability Index (DJSI) for Emerging Markets.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="tile-bg-white opetrational">
                                    <h3 class="text-blue">OPERATIONAL FIGURES</h3>
                                    <small class="text-light-grey">Workforce</small>
                                    <p><strong>21,000 employees for the whole Group </strong></p>
                                    <small class="text-light-grey">Factories</small>
                                    <p><strong>47 Factories </strong> (41 in Malaysia, 4 in Thailand, 1 in Vietnam & 1 in China)</p>
                                    <small class="text-light-grey">Number of Production Lines</small>
                                    <p><strong>765 production lines </strong></p>
                                    <small class="text-light-grey">Production Capacity</small>
                                    <p><strong>93 billion pieces per annum </strong></p>
                                    <small class="text-light-grey">Market Share</small>
                                    <p><strong>Approximately 26% of the estimated world consumption</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="t-logo" class="tab-pane fade in">
                        <div class="row mb-5">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="text-center"><img class="img-fluid" src="<?php echo $img_path; ?>Rectangle 3.png"></div>

                            </div>
                        </div>
                        <div class="row mt-2 tile-bg-white">
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                <div class="tile-bg-white">
                                    <h3 class="text-blue">TOP GLOVE LOGO</h3>
                                    <p>With its bold letters and clear blue color, the Top Glove logo is a clear reflection of the highest quality, long term reliability and consistency. In short, it represents the hallmark of premium quality rubber and synthetic gloves. Being the colour of the sea and sky, blue represents depth and stability. It is also a symbol of trust, loyalty, wisdom, confidence, intelligence, faith, truth and serenity.</p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                                <p class="text-grey logoDbtn-head"><strong>Top Glove Logo:</strong></p>
                                <button type="button" class="logoDbtn" data-toggle="modal" data-target="#logoDmodal">JPEG</button>
                                <button type="button" class="logoDbtn" data-toggle="modal" data-target="#logoDmodal">EPS</button>
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
        $(document).ready(function() {
            var imgarr = [];
            $('.media-lib-item-check').click(function(e) {
                if (e.target.tagName.toUpperCase() === "LABEL") {
                    return;
                }
                var img = this.closest('.media-lib-item');
                let imagePath = $(img).find('.media-libaray-img').attr("src");
                let index = imgarr.indexOf(imagePath);
                if (index > -1) {
                    imgarr.splice(index, 1);
                } else {
                    imgarr.push(imagePath)
                }
                $('.lib-img-selectd-count').text(imgarr.length);
            });
            $('.lib-download-select').click(function(e) {
                e.preventDefault();
                downloadImg(imgarr);
                imgarr = [];
            });
            $('.modal.lib-download-select').click(function(e) {
                e.preventDefault();
                $('#imgDmodal').modal('toggle');
                downloadImg(imgarr);
                imgarr = [];
            });
            $('.lib-img-download-all-main').click(function(e) {
                e.preventDefault();
                var imgarry = [];
                var allImgs = $('.media-libaray-img');
                for (i = 0; i < allImgs.length; i++) {
                    var src = $(allImgs[i]).attr('src');
                    imgarry.push(src);
                }
                $('.lib-img-selectd-count').text(imgarry.length);
                downloadImg(imgarry);
                imgarr = [];
            });

            $('.media-md-item-check').click(function(e) {
                if (e.target.tagName.toUpperCase() === "LABEL") {
                    return;
                }
                var cont = this.closest('.img-full-display-container');
                var img = $(cont).find('.img-full-display');
                let imagePath = img.attr("src");
                let index = imgarr.indexOf(imagePath);
                if (index > -1) {
                    imgarr.splice(index, 1);
                } else {
                    imgarr.push(imagePath)
                }
                $('.lib-img-selectd-count').text(imgarr.length);
            });

            $(document).on('click', '.media-lib-item-search', function(e) {
                if (e.target.tagName.toUpperCase() === "LABEL") {
                    return;
                }
                var parentEle = this.closest('.media-lib-item');
                var img = $(parentEle).find('.media-libaray-img');
                let imagePath = img.attr("src");
                let index = imgarr.indexOf(imagePath);
                if (index > -1) {
                    $('.media-md-item-check input').prop('checked', true);
                }
                $('#imgDmodal .img-full-display').attr('src', imagePath);
                $('#imgDmodal').modal('toggle');
                $('.lib-img-selectd-count').text(imgarr.length);

            });

            $(document).on('click', '.imgDmodal-arrows.img-next-arrow', function() {
                nextPrev('next', imgarr);
            })
            $(document).on('click', '.imgDmodal-arrows.img-prev-arrow', function() {
                nextPrev('prev', imgarr);
            })

            $('#imgDmodal').on('hidden.bs.modal', function() {
                var allImgs = $('.media-libaray-img');
                for (i = 0; i < allImgs.length; i++) {
                    var parentEle = $(allImgs[i]).closest('.media-lib-item');
                    var checkBox = $(parentEle).find('.media-lib-item-check input');
                    var imagePath = $(allImgs[i]).attr('src');
                    let index = imgarr.indexOf(imagePath);
                    if (index > -1) {
                        $(checkBox).prop('checked', true);
                    }
                }

            })
        });

        function nextPrev(ev,imgarr) {
            var imgPaths = [];
            var allImgs = $('.media-libaray-img');
            for (i = 0; i < allImgs.length; i++) {
                imgPaths.push($(allImgs[i]).attr('src'));
            }
            var currImg = $('.img-full-display').attr('src');
            let indexcur = imgPaths.indexOf(currImg);
            if (ev == 'next') {
                if(indexcur < imgPaths.length){
                    $('.img-full-display').attr('src', imgPaths[indexcur+1])
                    let index = imgarr.indexOf(imgPaths[indexcur+1]);
                    if (index > -1) {
                        $('.media-md-item-check input').prop('checked', true);
                    } else {
                        $('.media-md-item-check input').prop('checked', false);
                    }
                }
            } else {
                if(indexcur > -1 && indexcur != 0 ){
                    $('.img-full-display').attr('src', imgPaths[indexcur-1])
                    let index = imgarr.indexOf(imgPaths[indexcur-1]);
                    if (index > -1) {
                        $('.media-md-item-check input').prop('checked', true);
                    } else {
                        $('.media-md-item-check input').prop('checked', false);
                    }
                }
            }

        }

        function downloadImg(imgarr) {
            for (i = 0; i < imgarr.length; i++) {
                var a = document.createElement('a');
                a.href = imgarr[i];
                a.download = '';
                document.body.appendChild(a);
                a.click()
                a.remove();
                $('.media-lib-item-check').find('input').prop("checked", false);
                $('.media-md-item-check input').prop('checked', false);
                $('.lib-img-selectd-count').text(0);

            }
            imgarr = [];
        }

        function getFileName(str) {
            return str.substring(str.lastIndexOf('/') + 1)
        }
    </script>
</body>

</html>



<!-- Modal -->
<div id="imgDmodal" class="modal fade imgDmodal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="header">
                <h3> Tan Sri Dr. Lim Wee Chai | Exec. Chairman (Portrait)</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="img-fluid img-cross" src="<?php echo $img_path; ?>modal-close.png">
                </button>
            </div>
            <div class="modal-body">
                <div class="img-nex-prev-btn">
                    <img class="img-fluid imgDmodal-arrows img-prev-arrow" src="<?php echo $img_path; ?>left-arrow.png">
                    <img class="img-fluid imgDmodal-arrows img-next-arrow" src="<?php echo $img_path; ?>right-arrow.png">
                </div>
                <div class="img-full-display-container">
                    <div class="img-full-display-check">
                        <div class="check-round media-md-item-check ">
                            <input type="checkbox" name="selectImage[]" id="mcheckbox1" />
                            <label for="mcheckbox1"></label>
                        </div>
                    </div>
                    <img class="img-fluid img-full-display" src="">
                </div>
            </div>
            <div class="footer">
                <div class="imgDmodal-action-left">
                    <strong>Selected: <span class="text-blue lib-img-selectd-count">0</strong>
                    <button type="button" class="lib-download-select lib-download-btn">Download</button>
                </div>
                <a href="javascript:void(0)" class="lib-img-download-all lib-img-download-all-main text-blue boder-bottom-b">Donwload All</a>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div id="logoDmodal" class="modal fade logoDmodal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                        <div class="form-left">
                            <h2 class="text-uppercase text-white">Media Kit</h2>
                            <p class="text-white">For media enquiries or interview opportunities, please fill up the form.</p>
                            <p class="text-white">The images on the following pages are not for use by suppliers and/or publishers. If you are a supplier and/or publisher and would like to use Top Glove images, please write to us at media@topglove.com.my</p>
                        </div>

                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img class="img-fluid img-cross" src="<?php echo $img_path; ?>modal-close.png">
                        </button>
                        <form action="javascript:void(0)" class="mt-3">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-4 col-form-label">Contact Number*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="contact" id="contact" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email Address*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="sub-logoDbtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>