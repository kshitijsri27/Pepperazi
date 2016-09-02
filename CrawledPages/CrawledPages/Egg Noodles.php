<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <style>

p {
    color: orange;
    text-align: right;
}</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pepperazi</title>
        <meta name="description" content="Food And Restaurant HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <meta name="theme-color" content="#23292c"> <!-- Android 5.0 Tab Color -->
        <link rel="shortcut icon" href="p.jpg">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

        <!-- Icon Fonts -->
        <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="css/rev-slider-settings.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Template CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">

        <!-- Demo Purpose CSS -->
        <link rel="stylesheet" href="css/custom-bg.css">

        <!-- Head JS Libraries -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script><!-- REQUIRED FOR GOOGLE MAP -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Start mobile-nav -->
        <div class="mobile-nav-container clearfix">
            <div class="main-nav-trigger mobile-nav-trigger">
                <a href="#"></a>
            </div>
        </div>
        <!-- End mobile-nav -->

        <!-- Start main-nav-trigger -->
        <div class="main-nav-trigger">
            <a href="#">Menu</a>
        </div>
        <!-- End main-nav-trigger -->

        <!-- Start main-nav -->
        <div class="main-nav-container dark">
            <div class="main-nav-inner">            
                <div class="logo-container">
                    <a href="#">
                        <img src="img/logo/pepperazifull4.jpg" alt="Pepperazi" style="border-radius:10px;">
                    </a>
                </div><!-- /logo-container -->
                <nav class="main-nav">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">login</a></li>
                        <li class="active"><a href="about.html">about us</a></li>
                        <li><a href="chef.html">chefs</a></li>
                        <li><a href="recipe.html">recipes</a></li>
                       <!-- <li><a href="reservation.html">Reservation</a></li> -->
                    </ul>
                </nav>
               
             <!--   <div class="socials-container">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div><!-- /socials-container -->

                <div class="copyright">
                    <p>&copy; 2015 Pepperazi</p>
                    <p>All Rights Reserved</p>
                </div><!-- /copyright -->
            </div><!-- /main-nav-inner -->
        </div><!-- /main-nav-container -->
        <!-- End main-nav -->

        <!-- Start wrapper -->
        <div class="wrapper">
        
            <!-- Start main-header -->
            <header class="main-header" id="top">
                <div class="top-banner-container top-banner-container-style2">
                    <div class="top-banner-bg custom-bg4 parallax" data-stellar-background-ratio="0.5"></div>
                    <div class="top-banner">
                        <div class="top-image">
                            <img src="Recipes.png" alt="Pepperazi">
                        </div><!-- /top-image -->
                        
                    </div><!-- /top-banner -->
                    <div class="header-bottom-bar">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <ul class="category-filter blog-category-filter">
                                        <!--<li class="filter active" data-filter="all"><span>All</span></li>
                                        <li class="filter" data-filter=".news"><span>News</span></li>
                                        <li class="filter" data-filter=".recipes"><span>Recipes</span></li>
                                        <li class="filter" data-filter=".other"><span>Other</span></li>-->
                                    </ul>
                                </div><!-- col-md-9 -->
                                <div class="col-md-3">
                                    <form action="#" class="search-form">
                                        <input type="search" name="search" id="search" placeholder="Search Blog">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div><!-- /col-md-3 -->
                            </div><!-- /row -->
                        </div><!-- /container -->
                    </div><!-- /header-bottom-bar -->
                </div><!-- /top-banner-container -->
            </header>
            <!-- End main-header -->
            <?php
include_once('simple_html_dom.php');
$html = file_get_html('http://simpleindianrecipes.com/eggnoodles.aspx');
foreach($html->find('div#c_H1_Print') as $e)
    echo $e->innertext . '<br>';
?>

            <section class="latest-post blog-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="blog-post-container">
                                <div class="blog-post">
                                    <article class="mix news other">
                                        
                                          </article>
                                    <article class="mix recipes">
                                        
                                        
                                    </article>
                                </div><!-- /blog-post -->
                              <!--  <div class="load-more align-center">
                                    <a href="#" class="custom-button button-style2 load-more-button"><i class="icon-eye"></i>Load More</a>
                                </div><!-- /load-more -->
                            </div><!-- /blog-post-container -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </section>

            
            <section class="map">
                <div class="map-container wow fadeInDown">
                    <div id="google-map"></div>
                    <div id="cd-zoom-in"></div>
                    <div id="cd-zoom-out"></div>
                </div><!-- /map-container -->
            </section>

            <footer class="main-footer dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 align-center">
                            <div class="logo-container wow fadeInLeft">
                                <a href="#">
                                    <img src="img/logo/pepperazifull4.jpg" style="border-radius:10px;" alt="Pepperazi">
                                </a>
                            </div><!-- /logo-container -->
                            
                        </div><!-- /col-md-3 -->
                        <div class="col-md-6 wow fadeInDown">
                            <div class="contact-form-contaienr">
                                <div class="section-title">
                                    <h1><span>Contact</span> Us</h1>
                                </div>
                                <form id="contact-form" method="post" action="">
                                    <input type="text" id="name" name="name" placeholder="Name*" required>
                                    <input type="email" id="email" name="email" placeholder="Email*" required>
                                    <textarea id="message" name="message" rows="6" placeholder="Message" required></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                                <div id="form-messages"></div>
                            </div><!-- /contact-form-container -->
                        </div><!-- /col-md-6 -->
                        <div class="col-md-3 wow fadeInRight">
                            <div class="address-container">
                                <address>
                                    <img src="img/template-assets/map-pin.png" alt="Pepperazi">
                                    <p>
                                        <span>Pepperazi</span>
                                        <span>A-10,Sector-62</span>
                                        <span>Noida,U.P-201309</span>
                                        
                                    </p>
                                    <img src="img/template-assets/phone-icon.png" alt="Pepperazi">
                                    <p>
                                        <span>Phone: 8874609605</span>
                                       
                                    </p>
                                    <img src="img/template-assets/mail-icon2.png" alt="Pepperazi">
                                    <p>
                                        <span>support@pepperazi.com</span>
                                    </p>
                                </address>
                            </div><!-- /address-container -->
                        </div><!-- /col-md-3 -->
                        <div class="copyright col-md-12 wow fadeInUp" data-wow-delay="0.7s">
                            <p>&copy; 2015 Pepperazi. All Rights Reserved</p>
                        </div><!-- /copyright -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </footer>

        </div><!-- /wrapper -->
        <!-- End wrapper -->

        <script src="js/vendor/jquery-2.1.3.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/cd-google-map.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/tweetie.min.js"></script>
        <script src="js/jquery.scrollme.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
