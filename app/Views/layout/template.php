<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $tittle; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/animate.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/aos.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/icofont.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/slick.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css');?>">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.documentElement.classList.add("is_dark");
        } 
        if (localStorage.getItem("theme-color") === "light") {
          document.documentElement.classList.remove("is_dark");
        } 
    </script>

</head>


<body class="body__wrapper">
    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- Dark/Light area start -->
    <div class="mode_switcher my_switcher">
        <button id="light--to-dark-button" class="light align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512"><path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>

            <span class="light__mode">Light</span>
            <span class="dark__mode">Dark</span>
        </button>
    </div>
    <!-- Dark/Light area end -->

    <main class="main_wrapper">

        <!-- header section start -->
        <header>
            <div class="headerarea transparent__header header__sticky header__area">
                <div class="container desktop__menu__wrapper">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="headerarea__left">
                                <div class="headerarea__left__logo">

                                    <!-- <a href="index.html"><img src="<?= base_url('img/logo/logo_brileaf.png');?>" alt="logo"></a> -->
                                    <a href="/"><img src="https://brileaf.id/assets/img/logo_brileaf_fix.png" style="width: 150px;" alt="logo"></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 main_menu_wrap">
                            <div class="headerarea__main__menu">
                                <nav>
                                    <ul>
                                        <li><a class="headerarea__has__dropdown" href="/">Home
                                        <li><a class="headerarea__has__dropdown" href="/about">About
                                        <li><a class="headerarea__has__dropdown" href="/news">News
                                        <li><a class="headerarea__has__dropdown" href="/courses">Course
                                        <li><a class="headerarea__has__dropdown" href="instructor.html">Pages
                                        <i class="icofont-rounded-down"></i> </a>
                                            <ul class="headerarea__submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="about-dark.html">About (Dark)</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="contact-dark.html">Contact (Dark)</a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-dark.html">Instructor (Dark)</a></li>
                                                <li><a href="instructor-details.html">Instructor-Details</a></li>
                                                <li><a href="instructor-details-dark.html">Details (Dark)</a></li>
                                                <li><a href="event-details.html">Event-Details</a></li>
                                                <li><a href="event-details-dark.html">Details (Dark)</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="login-dark.html">Login (Dark)</a></li>
                                                <li><a href="error.html">Error</a></li>
                                                <li><a href="error-dark.html">Error (Dark)</a></li>
                                            </ul>

                                        </li>


                                        <li><a href="contact.html">Contact</a>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="headerarea__right">
                                <div class="headerarea__login">
                                    <a href="login.html">Login</a>
                                </div>


                                <div class="headerarea__button">
                                    <a href="#">Register Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="container-fluid mob_menu_wrapper">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <!-- <a class="logo__dark" href="#"><img src="<?= base_url('img/logo/logo_1.png');?>" alt="logo"></a> -->
                                <a class="logo__dark" href="/"><img src="https://brileaf.id/assets/img/logo_brileaf_fix.png" style="width: 150px;" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">

                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header section end -->

        <!-- Mobile Menu Start Here -->
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">

                    <div class="mobile-navigation">

                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="/">Home</a>                                    
                                <li class="menu-item-has-children "><a href="/about">About</a>
                                <li class="menu-item-has-children"><a href="/news">Article</a>
                                <li class="menu-item-has-children "><a href="/courses">Course</a>
                                <li><a class="menu-item-has-children" href="contact.html">Contact</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="single-mobile-curr-lang">
                        <a class="mobile-currency-active" href="#">Currency <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown curr-dropdown-active">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">Real</a></li>
                                <li><a href="#">BDT</a></li>
                            </ul>
                        </div>
                    </div> -->

                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login.html">Creat Account</a></li>
                                <li><a href="login.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                    <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end Here -->

        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->

        

        <?= $this->renderSection('content');?>
        
        <div class="footerarea">
            <div class="container">
                <div class="footerarea__newsletter__wraper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                            <div class="footerarea__logo">
                                <a href="#"><img src="<?= base_url('img/logo/logo_2.png');?>" alt="logophoto"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                            <div class="footerarea__newsletter">
                                <div class="footerarea__newsletter__input">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email here">
                                        <div class="footerarea__newsletter__button">
                                            <a href="#">SUBSCRIBE NOW</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footerarea__wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 " data-aos="fade-up">
                            <div class="footerarea__inner footerarea__about__us">
                                <div class="footerarea__heading">
                                    <h3>About us</h3>
                                </div>
                                <div class="footerarea__content">
                                    <p>orporate clients and leisure travelers has been relying on Groundlink for dependable safe, and professional chauffeured car end service in major cities across World.</p>
                                </div>
                                <div class="footerarea__icon">
                                    <ul>
                                        <li><a href="//facebook.com"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="//twitter.com"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="//vimeo.com"><i class="icofont-vimeo"></i></a></li>
                                        <li><a href="//linkedin.com"><i class="icofont-linkedin"></i></a></li>
                                        <li><a href="//skype.com"><i class="icofont-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 " data-aos="fade-up">
                            <div class="footerarea__inner">
                                <div class="footerarea__heading">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="footerarea__list">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Teachers</a>
                                        </li>
                                        <li>
                                            <a href="#">Partner</a>
                                        </li>
                                        <li>
                                            <a href="#">Room-Details</a>
                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 " data-aos="fade-up">
                            <div class="footerarea__inner footerarea__padding__left">
                                <div class="footerarea__heading">
                                    <h3>Course</h3>
                                </div>
                                <div class="footerarea__list">
                                    <ul>
                                        <li>
                                            <a href="#">Ui Ux Design</a>
                                        </li>
                                        <li>
                                            <a href="#">Web Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Business Strategy</a>
                                        </li>
                                        <li>
                                            <a href="#">Softwere Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Business English</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="footerarea__right__wraper footerarea__inner">
                                <div class="footerarea__heading">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="footerarea__right__list">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="footerarea__right__img">
                                                    <img src="<?= base_url('img/footer/footer__1.png');?>" alt="footerphoto">
                                                </div>
                                                <div class="footerarea__right__content">
                                                    <span>02 Apr 2023 </span>
                                                    <h6>Best Your Business</h6>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="footerarea__right__img">
                                                    <img src="<?= base_url('img/footer/footer__2.png');?>" alt="footerphoto">
                                                </div>
                                                <div class="footerarea__right__content">
                                                    <span>02 Apr 2023 </span>
                                                    <h6>Keep Your Business</h6>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="footerarea__right__img">
                                                    <img src="<?= base_url('img/footer/footer__3.png');?>" alt="footerphoto">
                                                </div>
                                                <div class="footerarea__right__content">
                                                    <span>02 Apr 2023 </span>
                                                    <h6>Nice Your Business</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerarea__copyright__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="footerarea__copyright__content">
                                <p>© 2023 Powered by <a href="#">Edurock</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="footerarea__copyright__list">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!-- JS here -->
    <script src="<?= base_url('js/vendor/modernizr-3.5.0.min.js');?>"></script>
    <script src="<?= base_url('js/vendor/jquery-3.6.0.min.js');?>"></script>
    <script src="<?= base_url('js/popper.min.js');?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('js/isotope.pkgd.min.js');?>"></script>
    <script src="<?= base_url('js/slick.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.meanmenu.min.js');?>"></script>
    <script src="<?= base_url('js/ajax-form.js');?>"></script>
    <script src="<?= base_url('js/wow.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.scrollUp.min.js');?>"></script>
    <script src="<?= base_url('js/imagesloaded.pkgd.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.magnific-popup.min.js');?>"></script>
    <script src="<?= base_url('js/waypoints.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.counterup.min.js');?>"></script>
    <script src="<?= base_url('js/plugins.js');?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="<?= base_url('js/main.js');?>"></script>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.getElementById("light--to-dark-button")?.classList.add("dark--mode");
        } 
        if (localStorage.getItem("theme-color") === "light") {
          document.getElementById("light--to-dark-button")?.classList.remove("dark--mode");
        } 
      </script>


</body>

</html>
