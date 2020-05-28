<!DOCTYPE html>
<?php
    session_start();
    session_destroy();
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dream Game Room</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Paragraf-Text-Effects.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <header class="d-lg-flex justify-content-lg-center align-items-lg-center header-dark"
            style="margin: 0px;padding: -27px;">
            <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
                <div class="container"><a class="navbar-brand text-center" href="#"><img
                            class="rounded-circle img-fluid" src="./assets/img/DREAM%20GAME%20ROOM.jpeg" width="80px"
                            height="100px" alt="Logo">Dream Game Room</a>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                                    aria-expanded="false" href="#">Informasi&nbsp;</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                        href="#">Harga Rental & Spesifikasi</a><a class="dropdown-item"
                                        role="presentation" href="#">Tata Tertib</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                                    aria-expanded="false">Games&nbsp;</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                        href="#">List Game</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                                    aria-expanded="false" href="#">Event&nbsp;</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                        href="#">Turnamen</a><a class="dropdown-item" role="presentation"
                                        href="#">Member</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                                    aria-expanded="false" href="#">Hubungi Kami</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                        href="#">Operator</a></div>
                            </li>
                        </ul><span class="navbar-text actions"> <a class="login" href="./Login/Login_User.html"
                                target="_blank">Log
                                In</a><a class="btn btn-light action-button" role="button"
                                href="./SignUp/Sign%20Up.html" target="_blank">Sign
                                Up</a></span>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <section id="carousel">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-nature carousel-hero">
                        <h1 class="hero-title">WELCOME</h1>
                        <p class="hero-subtitle1">SELAMAT DATANG DI DREAM GAME ROOM</p>
                        <p><a class="btn btn-primary hero-button plat" role="button"
                                href="./SignUp/Sign%20Up.html">DAFTAR SEKARANG !!!</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-photography carousel-hero">
                        <h1 class="hero-title">EVENT TURNAMENT GAME </h1>
                        <p class="hero-subtitle2">Menyelenggarakan Event Turnamen Daftar untuk info lebih lanjut </p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Game</a></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-technology carousel-hero" style="padding: -126px;">
                        <h1 class="hero-title">Tentang Kami</h1>
                        <p class="hero-subtitle3">Sebuah Mimpi yang hanya sekedar Mimpi</p>
                        <p> <button type="button" class="btn btn-primary hero-button plat " data-toggle="modal"
                                data-target="#myModal">About Us</button>
                        </p>
                    </div>
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content dark">
                            <!-- heading modal -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tentang Kami</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                                src="assets/img/fixs.png">
                                            <div class="card-body info">
                                                <h4 class="card-title">Piqih Aditiya</h4>
                                                <p class="card-text">Hanya Seorang Manusia yang sedang bernafas
                                                </p>
                                                <div class="icons"><a class="text" href="https://www.instagram.com/qih_a/" target="blank"><i
                                                            class="icon-social-instagram"></i></a><a class="text"
                                                        href="#" target="_blank"><i class="icon-social-github"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                                src="assets/img/teasas2.jpeg">
                                            <div class="card-body info">
                                                <h4 class="card-title">M Raihan Fais Sya'bani</h4>
                                                <p class="card-text">Manusia yang pasti </p>
                                                <div class="icons"><a class="text" href="https://www.instagram.com/mraihanfs/" target="blank"><i
                                                            class="icon-social-instagram"></i></a><a class="text"
                                                        href="#"><i class="icon-social-github"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                    class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                    class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
        </ol>
        
    </section>
    <footer id="footer">

        <div style="background: black; text-align: center; margin: 0px; padding:10px">
            <p style="color:grey; font-family: raleway">Copyright (c) 2020 Dream Team</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Customizable-Carousel-swipe-enabled.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Slider_Carousel_webalgustocom.js"></script>
</body>

</html>