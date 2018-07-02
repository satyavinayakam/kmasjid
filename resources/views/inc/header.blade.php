@section('header')


<head>
    <title>K-masjid</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="K-Masjid" />
    <meta name="description" content="K-Masjid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <!--
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    -->
    <!-- Bootstrap styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="libs/html5shiv.js"></script>
    <script src="libs/respond.min.js"></script>
    <![endif]-->

</head>

<body class="bg-cover">


<div class="global-wrap">
    <!-- /MAIN HEADER/-->
    <header class="main main-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <button class="btn btn-primary waktu-solat"><img src="img/ico-mos.png" > Waktu Solat</button>
                    <a href="#" class="btn btn-logo"><img src="img/logo/fb.png" ></a>
                    <a href="#" class="btn btn-logo"><img src="img/logo/tw.png" ></a>
                    <a href="#" class="btn btn-logo"><img src="img/logo/in.png" ></a>
                </div>
                <div class="col-xs-4">
                    <!-- Begin nav search form -->

                    <!-- End nav search form -->
                </div>
                <div class="hidden-xs col-sm-8">
                    <div class="pull-right">
                        <ul class="top-section-menu">
                            <li><a href="#">Maklumbalas</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                        </ul>
                        <ul class="top-section-menu light">
                            <li><a href="register.html">Log Masuk</a></li>
                            <li><a href="register.html">Daftar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form class="search-area form-group">
            <div class="container">
                <div class="row">
                    <!--
                                            <div class="col-sm-2">
                                                <div>
                                                    <select class="selectpicker">
                                                        <option value="United States">Waktu Solat</option>
                                                    </select>
                                                </div>
                                            </div>
                    -->
                    <div class="col-sm-12 clearfix">
                        <ul class="nav nav-pills waktu">
                            <li>IMSAK  5:56</li>
                            <li>SUBUH  6:06</li>
                            <li>SYURUK  7:22</li>
                            <li>ZUHUR  13:27</li>
                            <li>ASAR  16:35</li>
                            <li>MAGHRIB  19:29</li>
                            <li>ISYAK   20:38</li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </header>
    <!-- LOGIN REGISTER LINKS CONTENT -->
    <!-- BEGIN Mobile Menu -->
    <div class="sidebar-left sidebar-nicescroller">
        <ul class="sidebar-menu">
            <li class="active"><a href="/">Utama</a>

            </li>
            <li><a href="/mengenai">Mengenai Kmasjid</a></li>
            <li><a href="#">Aktiviti &amp; Berita</a></li>
            <li><a href="#"><i class="fa fa-angle-right chevron-icon-sidebar"></i>Ruang Ilmiah</a>
                <ul class="submenu">
                    <li><a href="#">K-Centre</a></li>
                    <li><a href="#">K-Khutbah</a></li>
                    <li><a href="#">Al-Hadith</a></li>
                    <li><a href="#">Tazkirah &amp; Artikel</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Bancian</a></li>
                    <li><a href="#">Majlis Agama</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right chevron-icon-sidebar"></i>Media</a>
                <ul class="submenu">
                    <li><a href="#">Takwim</a></li>
                    <li><a href="#">Kalender Aktiviti Umum</a></li>
                    <li><a href="#">Aktiviti</a></li>
                    <li><a href="#">Pengumuman</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Foto</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right chevron-icon-sidebar"></i>ePerkhidmatan</a>
                <ul class="submenu">
                    <li><a href="#">e-Zakat</a></li>
                    <li><a href="#">e-Pusara</a></li>
                    <li><a href="#">e-Sedekah</a></li>
                    <li><a href="#">e-Fakir</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /. end Mobile Meu -->
    <div class="side-menu">
        <!-- END LOGIN REGISTER LINKS CONTENT -->
        <div class="navbar top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 visible-xs">
                        <div class="toggle-menu">
                            <a class="menu-left" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-10 col-sm-5">
                        <a href="index.html" class="logo">
                            <img src="img/logo-p.png" alt="Image Alternative text" title="Image Title" />
                            <span class="title">Portal Interaktif Komuniti Masjid Malaysia</span>
                        </a>
                    </div>
                    <!-- BEGIN Menu Desktop -->
                    <div class="col-sm-7 hidden-xs">
                        <nav>
                            <ul class="nav nav-pills flexnav navbar-right" id="flexnav" data-breakpoint="800">
                                <li class="active"><a href="/">Utama</a></li>
                                <li><a href="mengenai">Mengenai Kmasjid</a></li>
                                <li><a href="#">Aktiviti &amp; Berita</a></li>
                                <li><a href="#">Ruang Ilmiah</a>
                                    <ul class="submenu">
                                        <li><a href="#">K-Centre</a></li>
                                        <li><a href="#">K-Khutbah</a></li>
                                        <li><a href="#">Al-Hadith</a></li>
                                        <li><a href="#">Tazkirah &amp; Artikel</a></li>
                                        <li><a href="#">Forum</a></li>
                                        <li><a href="#">Bancian</a></li>
                                        <li><a href="#">Majlis Agama</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Media</a>
                                    <ul class="submenu">
                                        <li><a href="#">Takwim</a></li>
                                        <li><a href="#">Kalender Aktiviti Umum</a></li>
                                        <li><a href="#">Aktiviti</a></li>
                                        <li><a href="#">Pengumuman</a></li>
                                        <li><a href="#">Berita</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Foto</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">ePerkhidmatan</a>
                                    <ul class="submenu">
                                        <li><a href="#">e-Zakat</a></li>
                                        <li><a href="#">e-Pusara</a></li>
                                        <li><a href="#">e-Sedekah</a></li>
                                        <li><a href="#">e-Fakir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End Menu Desktop -->
                    <div class="clearfix"></div>
                    <div class="col-sm-12 visible-xs main-black text-center">
                        <div class="login-register">
                            <div class="pull-right">
                                <ul class="top-section-menu">
                                    <li><a href="#">Maklumbalas</a></li>
                                    <li><a href="#">Hubungi Kami</a></li>
                                </ul>
                                <ul class="top-section-menu light">
                                    <li><a href="#" data-target="#login-dialog" data-toggle="modal">Log Masuk</a></li>
                                    <li><a href="#" data-target="#register-dialog"  data-toggle="modal">Daftar</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- TOP AREA -->

@show

