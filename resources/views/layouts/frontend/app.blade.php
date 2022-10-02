<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $getHeader->title ?? 'MY-PFOLIO' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/ionicons/css/ionicons.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('templates/frontend/devfolio') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: DevFolio - v2.4.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">{{ $getHeader->navbar_title ?? 'MY-PFOLIO' }}</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image"
        style="background-image: url({{ asset('storage/uploads/image/header/' . $getHeader->image ?? 'gambar') }}">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="intro-title mb-4">{{ $getHeader->up_text ?? 'I am Rahmat Hidayatullah' }}</h1>
                    <p class="intro-subtitle"><span
                            class="text-slider-items">{{ $getHeader->down_text ?? 'Iam Student,Gamer' }}</span><strong
                            class="text-slider"></strong></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="{{ asset('storage/uploads/image/about/' . $getAbout->image ?? 'gambar') }}"
                                                    style="height: 200px; object-fit: cover; object-position: center;"
                                                    class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p><span class="title-s">Name: </span>
                                                    <span>{{ $getAbout->name ?? 'Rahmat Hidayatullah' }}</span></p>
                                                <p><span class="title-s">Profile: </span>
                                                    <span>{{ $getAbout->role ?? 'Student' }}</span></p>
                                                <p><span class="title-s">Email: </span>
                                                    <span>{{ $getAbout->email ?? 'ratuaddil432@gmail.com' }}</span></p>
                                                <p><span class="title-s">Phone: </span>
                                                    <span>{{ $getAbout->phone ?? '0859987263' }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($getSkill->count() > 0)
                                        <div class="skill-mf">
                                            <p class="title-s">Skill</p>
                                            <ul class="list-group col-md-8">
                                                @foreach ($getSkill as $skill)
                                                    <li class="list-group-item">{{ $skill->name }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                {{ $getAbout->title ?? 'About Me' }}
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            {{ $getAbout->description ?? 'This is about description ok' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Portfolio Section ======= -->
        @if ($getPortfolio->count() > 0)
            <section id="work" class="portfolio-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Portfolio
                                </h3>
                                <p class="subtitle-a">
                                    Web Yang Pernah Dikerjakan
                                </p>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($getPortfolio as $portfolio)
                            <div class="col-md-4">
                                <div class="work-box">
                                    <a href="{{ asset('storage/uploads/image/portfolio/' . $portfolio->image) }}"
                                        data-gall="portfolioGallery" class="venobox">
                                        <div class="work-img">
                                            <img src="{{ asset('storage/uploads/image/portfolio/' . $portfolio->image) }}"
                                                alt="" class="img-fluid">
                                        </div>
                                    </a>
                                    <div class="work-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h2 class="w-title">{{ $portfolio->title }}</h2>
                                                <div class="w-more">
                                                    <span class="w-ctegory"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
        @endif

        <!-- ======= Contact Section ======= -->
        <section class="paralax-mf footer-paralax bg-image sect-mt4 route">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6 mx-auto">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                {{ $getFooter->title ?? 'Footer Title' }}
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                {{ $getFooter->description ?? 'Footer desription here' }}
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="ion-ios-location"></span>
                                                    {{ $getFooter->address ?? 'Footer Address' }}</li>
                                                <li><span class="ion-ios-telephone"></span>
                                                    {{ $getFooter->phone ?? 'Footer Phone' }}</li>
                                                <li><span class="ion-email"></span>
                                                    {{ $getFooter->email ?? 'Footer Email' }}</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="javascript:void(0)"
                                                        onclick="window.open('https://web.facebook.com/profile.php?id=100050205264012')"><span
                                                            class="ico-circle"><i
                                                                class="ion-social-facebook"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright
                            <strong>{{ $getFooter->copyright ?? 'Footer Copyright' }}</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/typed.js/typed.min.js"></script>
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('templates/frontend/devfolio') }}/assets/js/main.js"></script>

</body>

</html>
