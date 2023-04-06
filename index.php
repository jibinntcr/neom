<?php
session_start()
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home | Neom Building Solutions</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favi.png" />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css" />
    <link rel="stylesheet" href="assets/css/gijgo.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/animated-headline.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center" style="min-height: 45px">
                                <div class="header-info-left">
                                    <ul>
                                        <li>
                                            <i class="fas fa-phone"></i><a href="tel:+91 89210 31275">+91 89210
                                                31275</a>
                                        </li>
                                        <li>
                                            <i class="far fa-envelope"></i><a href="mailto:neomindia22@gmail.com ">
                                                neomindia22@gmail.com </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <a href="https://bit.ly/NeomProducts" class="genric-btn primary e-large"
                                        target="_blank">Product
                                        Catalogue</a>
                                    <!-- <a href="#" class="send-btn">Product Catelogue<i class="ti-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png"
                                            style="width: 180px; height: auto" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 leftall">
                                <div class="menu-wrapper">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="product.html">Product</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <?php
    if (isset($_SESSION["mailstatus"]) == "success") {
    ?>
    <script>
    swal({
        title: "Success!",
        text: "Our team will contact you soon!",
        icon: "success",
        button: "OK",
    });
    </script>
    <?php
        unset($_SESSION["mailstatus"]);
    } else if (isset($_SESSION["mailstatus"]) == "not") {
    ?>
    <script>
    swal("Something went wrong !", "Please try after some time!", "error");
    </script>
    <?php
        unset($_SESSION["mailstatus"]);
    }
    ?>

    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9"></div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <!-- <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">
                                        Market leading <span>Manufacturer</span>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">
                                        The right candidate may exist, but talented people
                                    </p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Learn
                                        More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Video icon -->
            <!-- <div class="video-icon">
          <a
            class="popup-video btn-icon"
            href="https://www.youtube.com/watch?v=up68UAfH0d0"
            data-animation="bounceIn"
            data-delay=".4s"
            ><i class="fas fa-play"></i
          ></a>
        </div> -->
        </div>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding40" id="about">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <!-- <span class="element">About Us</span> -->
                                <h2>ABOUT US</h2>
                            </div>
                            <p class="text-justify">

                                The promoters of Neom Building Solutions had begun with a rich professional experience
                                of twenty years plus in the building material industry. We work closely with the
                                projects of all major architects, designers, engineers, builders and contractors across
                                the state. Our vision is to provide the best in quality value added & sustainable
                                products and after sale services in order to create more satisfied customers as well as
                                to inspire eco friendly living.<br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NEOM is at the forefront of delivering
                                new and innovative
                                infrastructure
                                solutions. NEOM
                                is leading a team of the brightest minds in architecture, engineering and construction
                                to make the idea of building upwards a reality.<br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Neom provides infrastructure products
                                and services such as
                                plywood, block board,
                                decorative laminates, decorative veneers, medium-density fiberboards (MDF), Laminate
                                flooring , Glass and Hand rail works.
                            </p>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span>454 m</span>
                                    <p>Delivery Packages</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span>127</span>
                                    <p>Countries Covered</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-9 offset-md-1 offset-sm-1">
                        <div class="about-right-cap">
                            <div class="about-right-img">
                                <img src="assets/img/gallery/about1.png" alt="" />
                            </div>
                            <div class="img-cap">
                                <span>20</span>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!--? Gallery Area Start -->
        <!-- Gallery Area End -->
        <!--? Categories Area Start -->
        <section id="features">
            <div class="categories-area section-padding40 gray-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-tittle text-center mb-100">
                                <!-- <span class="element">PRODUCTS</span> -->
                                <h2>PRODUCTS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="home-blog-area">
                                <div class="home-blog-single mb-30">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="assets/img/gallery/pro2.png" alt="" />
                                        </div>
                                        <div class="blog-cap">
                                            <h3>
                                                <a>MDF & HDF </a>
                                            </h3>
                                            <p class="text-justify">
                                                MDF boards is generally denser than plywood. It is made
                                                up of separated fibers, but can be used as a building
                                                material similar in application to plywood. It is
                                                stronger and much denser than particle board.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="home-blog-area">
                                <div class="home-blog-single mb-30">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="assets/img/gallery/pro4.png" alt="" />
                                        </div>
                                        <div class="blog-cap">
                                            <h3>
                                                <a>WPC Board </a>
                                            </h3>
                                            <p class="text-justify">
                                                Neom WPC is a .7 density board manufactured in
                                                state-of-the-art European machineries, Incorporating
                                                European technology and using very high quality raw
                                                materials to ascertain Good strength that lasts a
                                                lifetime
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="home-blog-area">
                                <div class="home-blog-single mb-30">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="assets/img/gallery/pro5.png" alt="" />
                                        </div>
                                        <div class="blog-cap">
                                            <h3>
                                                <a>Particle Board</a>
                                            </h3>
                                            <p class="text-justify">
                                                Particle board – also known as particleboard, low density
                                                fibreboard (LDF), and chipboard – is an engineered wood
                                                product manufactured from wood chips, sawmill shavings,
                                                or even sawdust, and a synthetic resin or other suitable
                                                binder, which is pressed and extruded.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="section-tittle text-center">
                        <a href="product.html" class="genric-btn primary e-large">More Products</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cat End -->
        <!-- Services Area start -->
        <!-- <div
        class="service-area section-bg"
        data-background="assets/img/gallery/section_bg01.png"
      >
        <div class="container">
          <div class="row align-items-end no-gutters">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single-main position-relative">
                <div class="single-wrapper active">
                  <div class="single-services">
                    <span>01.</span>
                    <h4>Building Yead</h4>
                    <p>
                      We collect and analyze information about your general
                      usage of the website to the products services and courses.
                    </p>
                  </div>
                  <div class="services-btn">
                    <a href="project.html">View More</a>
                  </div>
                </div>
                <span class="transparrent-btn active position-absolute"
                  >02. Meghna Bridge</span
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single-main position-relative">
                <div class="single-wrapper hide">
                  <div class="single-services">
                    <span>02.</span>
                    <h4>Meghna Bridge</h4>
                    <p>
                      We collect and analyze information about your general
                      usage of the website to the products services and courses.
                    </p>
                  </div>
                  <div class="services-btn">
                    <a href="project.html">View More</a>
                  </div>
                </div>
                <span class="transparrent-btn position-absolute"
                  >02. Meghna Bridge</span
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single-main position-relative">
                <div class="single-wrapper hide">
                  <div class="single-services">
                    <span>03.</span>
                    <h4>Kalis Vadru</h4>
                    <p>
                      We collect and analyze information about your general
                      usage of the website to the products services and courses.
                    </p>
                  </div>
                  <div class="services-btn">
                    <a href="project.html">View More</a>
                  </div>
                </div>
                <span class="transparrent-btn position-absolute"
                  >03. Kalis Vadru</span
                >
              </div>
            </div>
          </div>
        </div>
      </div> -->
        <!-- Services Area End -->
        <!-- Want To work -->
        <!-- <section class="wantToWork-area gray-bg">
        <div class="container">
          <div class="wants-wrapper w-padding2">
            <div class="row align-items-center justify-content-between">
              <div class="col-xl-8 col-lg-9 col-md-8">
                <div class="wantToWork-caption wantToWork-caption2">
                  <h2>Up to 40% Off</h2>
                  <p>
                    We collect and analyze information about your general usage
                    of the website, products, services, and courses.
                  </p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4">
                <a href="#" class="btn w-btn wantToWork-btn"
                  >Learn More <i class="ti-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section> -->
        <!-- Want To work End -->
        <!-- Contact form Start -->
        <section id="contact">
            <div class="contact-form testimonial-area section-padding40 mb-40">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                            <div class="section-tittle text-center mb-100">
                                <!-- <span class="element">Contact</span> -->
                                <h2>Get in Touch</h2>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial  -->
                    <div class="row no-gutters">
                        <div class="col-lg-12 col-md-12">
                            <!-- galary -->
                            <div class="single-gallery">
                                <div class="gallery-img"><iframe class="position-relative rounded w-100 h-100"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.729209875355!2d76.21824!3d10.5219814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef2701a50ef3%3A0xbe22b5bb9c036060!2sInfinio%20Technical%20Solutions!5e0!3m2!1sen!2sin!4v1668663346162!5m2!1sen!2sin"
                                        frameborder="0" style="min-height: 300px; border: 0" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe></div>
                                <!-- <div class="thumb-content-box">
                                    <div class="thumb-content"> -->
                                <!-- <h3>
                                            <a href="#">Need to make<br />
                                                an enquiry?</a>
                                        </h3> -->
                                <!-- <p>
                                            We collect and analyze information about your general
                                            usage of the website products.
                                        </p>
                                        <a href="services.html">Learn More</a> -->
                                <!-- </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-12">
                            <div class="form-wrapper">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="section-tittle section-tittle2 mb-30">
                                            <h2>Drop your message</h2>
                                        </div>
                                    </div>
                                </div>
                                <form id="contact-form" action="mail.php" method="POST" enctype="multipart/form-data"
                                    autocomplete="off">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-box user-icon mb-15">
                                                <input type="text" name="name" id="name" placeholder="Your Name"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-box email-icon mb-15">
                                                <input type="email" name="email" id="email" required
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-box email-icon mb-15">
                                                <input type="text" name="phone" id="phone" required
                                                    placeholder="Phone no." />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-box email-icon mb-15">
                                                <input type="text" name="subject" id="subject" placeholder="Subject" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-box message-icon mb-15">
                                                <textarea name="message" id="message" placeholder="Message"
                                                    required></textarea>
                                            </div>
                                            <div class="submit-info">
                                                <button class="submit-btn2" type="submit" name="submit" id="submit">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact form End -->
        <!--? Blog Area Start -->
        <!-- <section class="home-blog-area pb-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="section-tittle mb-100">
                <span class="element">From News</span>
                <h2>News & Media center</h2>
                <p>
                  We collect and analyze information about your general usage of
                  the website products services and courses.
                </p>
                <a href="blog_details.html" class="all-btn">View All</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="home-blog-single mb-30">
                <div class="blog-img-cap">
                  <div class="blog-img">
                    <img src="assets/img/gallery/home-blog1.png" alt="" />
                  </div>
                  <div class="blog-cap">
                    <p>22 Apr 2020</p>
                    <h3>
                      <a href="blog_details.html"
                        >We might track your usage patterns to see</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="home-blog-single mb-30">
                <div class="blog-img-cap">
                  <div class="blog-img">
                    <img src="assets/img/gallery/home-blog2.png" alt="" />
                  </div>
                  <div class="blog-cap">
                    <p>22 Apr 2020</p>
                    <h3>
                      <a href="blog_details.html"
                        >The massive stadium screens at the MCG</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
        <!-- Blog Area End -->
        <!--?  Map Area start  -->
        <!-- <section class="Map-area">
            <div class="col-12 pb-5">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.729209875355!2d76.21824!3d10.5219814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef2701a50ef3%3A0xbe22b5bb9c036060!2sInfinio%20Technical%20Solutions!5e0!3m2!1sen!2sin!4v1668663346162!5m2!1sen!2sin"
                    frameborder="0" style="min-height: 300px; border: 0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </section> -->
        <!-- Map Area End -->
        <!-- Want To work 2-->
        <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <div class="logo">
                                    <img src="assets/img/logo/logo.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="double-btn f-right">
                                <!-- <a href="#" class="btn w-btn wantToWork-btn mr-20">Learn More <i
                                        class="ti-arrow-right"></i></a> -->
                                <!-- <a href="#" class="btn2 w-btn wantToWork-btn"
                    >Learn More <i class="ti-arrow-right"></i
                  ></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End 2-->
    </main>
    <footer>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright ©2022 All rights reserved | Designed by
                                    <a href="https://infinio.co.in/" target="_blank">Infinio Technology Solutions</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/neombuildingsolutions/"><i
                                        class="fab fa-facebook-f"></i></a> <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key....." />
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top">
        <a href="https://wa.me/+918921031275" title="Go to Top"> <i class="fab fa-whatsapp"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>