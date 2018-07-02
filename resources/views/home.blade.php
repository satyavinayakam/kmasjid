@extends('layout.app')

@section('header')
    @parent

@endsection

@section('content')

    <!-- TOP AREA -->
    <div class="top-area">
        <div>
            <div>
                <img src="img/slider/banner-home.jpg" alt="Image Alternative text" title="Bridge" />
                <div class="bg-mask"></div>

                <div class="bg-front vert-center">
                    <div class="container">
                        <div class="col-sm-12 text-center bg-search">
                            <h2 class="text-heroen">Carian Pantas Masjid</h2>
                        </div>
                        <div class="col-sm-offset-2 col-sm-3 padding-search">
                            <select class="selectpicker">
                                <option value="wilayah">Pilih Negeri</option>
                                <option value="wilayah">Wilayah Persekutuan</option>
                            </select>
                        </div>
                        <div class="col-sm-5 padding-search">
                            <div class="input-group">

                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                            Masjid Terdekat
                                          </span>
                                <input type="hidden" name="search_param" value="all" id="search_param">
                                <input type="text" class="form-control" name="x" placeholder="Taip nama masjid e.g. Masjid Ar-Rahman">
                                <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="search-carian">Carian Masjid Paling Popular</div>
                            <ul class="search-list-masjid">
                                <li><a href="#">Masjid Putrajaya</a></li>
                                <li><a href="#">Masjid Al Ubudiah Jalan Tanjong keling</a></li>
                                <li><a href="#">Masjid Putrajaya</a></li>
                                <li><a href="#">Masjid Putrajaya</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA -->

    <!-- SEARCH AREA -->

    <!-- END SEARCH AREA -->

    <div class="bg-grey"></div>

    <div class="event-new row-container light bg-parallax bg-scroll" style="background-image:url(img/bg-event.jpg); padding-bottom:80px;">
        <!--
                        <img src="img/bg-event.jpg" alt="Image Alternative text" title="Bridge" />
                        <div class="bg-mask"></div>
        -->
        <div class="container vert-center">
            <div class="col-sm-4">
                <div class="bg-event">
                    <h3>Kalendar Aktiviti</h3>
                    <ul>
                        <li>
                            <div class="event-date">
                                <h4>05</h4>
                                <span>Julai</span><br>
                                <span>Sabtu</span>
                            </div>
                            <div class="event-content">
                                <a href="#">Masjid Putra Putrajaya WP Putrajaya</a>
                                <br>
                                <span class="limit-car">Program Disayangi 2017 – Majlis Penyampaian Sumbangan Kepada Pertubuhan Kebajikan dan Pendidikan Raudhatul Nurr Jannah</span>
                            </div>
                        </li>
                        <li>
                            <div class="event-date">
                                <h4>05</h4>
                                <span>Julai</span><br>
                                <span>Sabtu</span>
                            </div>
                            <div class="event-content">
                                <a href="#">Masjid Putra Putrajaya WP Putrajaya</a>
                                <br>
                                <span class="limit-car">Program Disayangi 2017 – Majlis Penyampaian Sumbangan Kepada Pertubuhan Kebajikan dan Pendidikan Raudhatul Nurr Jannah</span>
                            </div>
                        </li>
                        <li>
                            <div class="event-date">
                                <h4>05</h4>
                                <span>Julai</span><br>
                                <span>Sabtu</span>
                            </div>
                            <div class="event-content">
                                <a href="#">Masjid Putra Putrajaya WP Putrajaya</a>
                                <br>
                                <span class="limit-car">Program Disayangi 2017 – Majlis Penyampaian Sumbangan Kepada Pertubuhan Kebajikan dan Pendidikan Raudhatul Nurr Jannah</span>
                            </div>
                        </li>
                    </ul>
                    <div class="text-right">
                        <a href="#" class="btn btn-primary">Lihat Senarai Aktiviti</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="statement-kmasjid">
                    <h3>Mengenai Portal Komuniti K-Masjid</h3>
                    <p><strong>Portal ini berfungsi untuk menyatukan masyarakat Islam di Malaysia secara amnya dan
                            mengeratkan silaturahim antara ahli qaryah sesebuah masjid secara khususnya.</strong> </p>
                    <p>iga perkara yang menjadi fokus utama di dalam portal k-Masjid ini adalah ianya dibangunkan untuk menjadi
                        sumber bagi pembangunan ummah, pusat penyebaran informasi yang tepat dan terkini dan juga sebagai
                        landasan untuk pengurusan masjid yang efisien.</p>

                    <p>Masjid yang berminat untuk menggunakan portal ini boleh menghubungi pihak pengurusan portal ini di alamat
                        dan nombor telefon yang tertera di menu Hubungi Kami di laman utama ini. Individu yang beragama Islam pula
                        boleh berdaftar untuk menjadi ahli qaryah kepada masjid yang telah berdaftar dengan portal ini. Sila klik di
                        ruangan daftar untuk tujuan pendaftaran tersebut.</p>
                    <div class="text-right">
                        <a href="#" class="btn btn-primary">Baca Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--END MAIN HEADER-->

    <!-- PAGE CONTENT-->
    <div>
        <div class="row">
            <div class="advertis">
                <div class="container">
                    <div class="col-sm-12 gmap">
                        <div class=" text-center">
                            <div class="title"><h2><strong>Perkhidmatan Online K-masjid</strong></h2></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="owl-carousel owl-slider owl-theme" id="owl-product" data-inner-pagination="true" data-white-pagination="true" data-nav="false">
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <div class="reban transaction"></div>
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/product/1.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">e-SEDEKAH</h5>
                                            <p class="product-desciption">Salurkan zakat anda melalui
                                                perkhidmatan pembayaran online
                                                yang disediakan</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <div class="reban"></div>
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/product/2.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">e-MUALLAF</h5>
                                            <p class="product-desciption">Salurkan zakat anda melalui
                                                perkhidmatan pembayaran online
                                                yang disediakan</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <div class="reban"></div>
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/product/3.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">e-PUSARA</h5>
                                            <p class="product-desciption">Salurkan zakat anda melalui
                                                perkhidmatan pembayaran online
                                                yang disediakan</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <div class="reban"></div>
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/product/4.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">e-FAKIR</h5>
                                            <p class="product-desciption">Salurkan zakat anda melalui
                                                perkhidmatan pembayaran online
                                                yang disediakan</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <div class="reban"></div>
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/product/4.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">e-FAKIR</h5>
                                            <p class="product-desciption">Salurkan zakat anda melalui
                                                perkhidmatan pembayaran online
                                                yang disediakan</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="bg-terkini">
                <div class="container">
                    <div class="col-sm-12 gmap">
                        <div class=" text-center">
                            <div class="title"><h2><strong>Terkini di Masjid</strong></h2></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <h3>KULIAH RABU DI MASJID PUTRA, PUTRAJAYA</h3>
                                <p>Pada setiap hari Rabu, minggu pertama dan ketiga, kuliah bersama Habib Ali Zaenal Abidin Al-Hamid akan diadakan pada pukul 10.30 pagi. Muslimin dan muslimat dijemput hadir. Tajuk kuliah rabu adalah mengenai sedekah dan amal jariah.</p>
                                <h4>16 Ogos 2017</h4>
                            </div>
                            <div class="col-sm-4">
                                <h3>KULIAH RABU DI MASJID PUTRA, PUTRAJAYA</h3>
                                <p>Pada setiap hari Rabu, minggu pertama dan ketiga, kuliah bersama Habib Ali Zaenal Abidin Al-Hamid akan diadakan pada pukul 10.30 pagi. Muslimin dan muslimat dijemput hadir. Tajuk kuliah rabu adalah mengenai sedekah dan amal jariah.</p>
                                <h4>16 Ogos 2017</h4>
                            </div>
                            <div class="col-sm-4">
                                <h3>KULIAH RABU DI MASJID PUTRA, PUTRAJAYA</h3>
                                <p>Pada setiap hari Rabu, minggu pertama dan ketiga, kuliah bersama Habib Ali Zaenal Abidin Al-Hamid akan diadakan pada pukul 10.30 pagi. Muslimin dan muslimat dijemput hadir. Tajuk kuliah rabu adalah mengenai sedekah dan amal jariah.</p>
                                <h4>16 Ogos 2017</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="bg-siaran">
                <div class="container">
                    <div class="col-sm-12 gmap">
                        <div class="col-sm-7">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!--                                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pgTObvNTJfI"></iframe>-->
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jRU1B6QjdMY" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <h3>Makkah Live HD</h3>
                            <span>K-Masjid Event</span><br>
                            <span>600 watching</span>
                        </div>
                        <div class="col-sm-5">
                            <div class="video-right">
                                <h3>SIARAN LANGSUNG AKTIVITI</h3>
                                <p class="siaran">Saksikan siaran langsung aktiviti yang dijalankan dari semasa ke semasa yang terkini dari K-Masjid kepada komuniti</p>
                                <div class="video-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="img/thum.jpg">
                                            <h5>Makkah Live HD</h5>
                                            <span>K-Masjid Event</span><br>
                                            <span>600 watching</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="img/thum.jpg">
                                            <h5>Makkah Live HD</h5>
                                            <span>K-Masjid Event</span><br>
                                            <span>600 watching</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="img/thum.jpg">
                                            <h5>Makkah Live HD</h5>
                                            <span>K-Masjid Event</span><br>
                                            <span>600 watching</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="bg-terkini">
                <div class="container">
                    <div class="col-sm-12 gmap">
                        <div class="text-center">
                            <div class="title"><h2><strong>Ruang Iklan</strong></h2></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="owl-carousel owl-slider owl-paging" id="owl-product-2" data-inner-pagination="true" data-white-pagination="true" data-nav="false">
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/pautan/ikalan-1.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">Home Financing-i</h5>
                                            <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/pautan/ikalan-2.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">Akaun Simpanan i-Tawarruq</h5>
                                            <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/pautan/ikalan-3.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">Ar-Rahnu</h5>
                                            <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                                <div><!--slide-->
                                    <a href="#" class="product-thumb list">
                                        <header class="product-header">
                                            <img title="Food is Pride" alt="Image Alternative text" src="img/pautan/ikalan-4.jpg">
                                        </header>
                                        <div class="product-inner">
                                            <h5 class="product-title">Unit Trust</h5>
                                            <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                                        </div>
                                    </a>
                                </div><!--end slide-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--map-->
    </div>


    <!-- END PAGE CONTENT-->

@endsection

@section('footer')

    @parent

    @endsection