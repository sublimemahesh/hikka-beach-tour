<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ABOUT_US = new Page(1);
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Relax Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- Linking Bootstrap css file -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

    </head>


    <body>

        <div class="wrapper">

            <?php include './header.php'; ?>
            <div class="about-bg">
                <div class="container">
                    <div class="rl-banner">
                        <h2 class="tp">About us</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><span class="active">About Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>



            <section>
                <div class="pd90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="relax-history">
                                    <h3>Hikka Beach Tours - Since 1993</h3>
                                    <?php echo $ABOUT_US->description; ?>
                                    <!--                                    <ul>
                                                                            <li>
                                                                                <h5>200</h5>
                                                                                <span>Rooms</span>
                                                                            </li>
                                                                            <li>
                                                                                <h5>75</h5>
                                                                                <span>Staffs</span>
                                                                            </li>
                                                                            <li>
                                                                                <h5>8</h5>
                                                                                <span>Pools</span>
                                                                            </li>
                                                                            <li>
                                                                                <h5>5</h5>
                                                                                <span>Restaurant</span>
                                                                            </li>
                                                                        </ul>-->
                                </div><!--relax-history end-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--
                            <section>
                                    <div class="container">
                                            <div class="about-imgs">
                                                    <div class="row">
                                                            <div class="col-md-3">
                                                                    <div class="abt-img">
                                                                            <img src="images/resources/about1.jpg" alt="">
                                                                    </div>abt-img end
                                                            </div>
                                                            <div class="col-md-3">
                                                                    <div class="abt-img">
                                                                            <img src="images/resources/about2.jpg" alt="">
                                                                    </div>abt-img end
                                                            </div>
                                                            <div class="col-md-3">
                                                                    <div class="abt-img">
                                                                            <img src="images/resources/about3.jpg" alt="">
                                                                    </div>abt-img end
                                                            </div>
                                                            <div class="col-md-3">
                                                                    <div class="abt-img">
                                                                            <img src="images/resources/about4.jpg" alt="">
                                                                    </div>abt-img end
                                                            </div>
                                                    </div>
                                            </div>about-imgs end
                                            <div class="abt-links">
                                                    <div class="row no-gutter">
                                                            <div class="col-md-6">
                                                                    <ul>
                                                                            <li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></li>
                                                                            <li><p>Nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p></li>
                                                                            <li><p>Nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p></li>
                                                                            <li><p>Nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p></li>
                                                                    </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                    <ul>
                                                                            <li><p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p></li>
                                                                            <li><p>Duis autem vel eum iriure dolor in hendrerit</p></li>
                                                                            <li><p>Blandit praesent luptatum zzril delenit  te feugait nulla facilisi.</p></li>
                                                                            <li><p>Nam liber tempor cum soluta nobis eleifend possim assum</p></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    
                                                    
                                            </div>abt-links end
                                    </div>
                            </section>-->
            <!--
                            <section>
                                    <div class="video-popup style2">
                                            <div class="container">
                                                    <div class="video-text">
                                                            <h5>Watch the Video</h5>
                                                            <h2>Relax Hotel</h2>
                                                            <a class="html5lightbox" href="https://www.youtube.com/watch?v=jx3G0CoZjAc" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                                    </div>video-text end
                                            </div>
                                    </div>video-popup end
                            </section>	-->

            <section>
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="history-carousel">
                                    <div class="history-img">
                                        <img src="images/resources/ft-img2.jpg" alt="">
                                    </div><!--history-img end-->
                                    <div class="history-img">
                                        <img src="images/resources/ft-img3.jpg" alt="">
                                    </div><!--history-img end-->
                                </div><!--history-carousel end-->
                            </div>
                            <div class="col-md-6 col-md-offset-1 col-sm-6">
                                <div class="relax-accordion toggle">
                                    <!--                                    <div class="title">
                                                                            <h3>Core Value of Resort</h3>
                                                                        </div>title end-->
                                    <div class="toggle-item">
                                        <h2>Our Mission</h2>
                                        <div class="toggle-content">
                                            <img src="images/resources/toggle1.png" alt="">
                                            <div class="content-data">
                                                <h3>Our Delievery in all our country</h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                                <a href="#" title="">Adipis civelit <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div><!--toggle-item end-->
                                    <div class="toggle-item">
                                        <h2>Our Vision</h2>
                                        <div class="toggle-content">
                                            <img src="images/resources/toggle1.png" alt="">
                                            <div class="content-data">
                                                <h3>Our Delievery in all our country</h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                                <a href="#" title="">Adipis civelit <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div><!--toggle-item end-->
                                    <div class="toggle-item">
                                        <h2>About Us</h2>
                                        <div class="toggle-content">
                                            <img src="images/resources/toggle1.png" alt="">
                                            <div class="content-data">
                                                <h3>Our Delievery in all our country</h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                                <a href="#" title="">Adipis civelit <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div><!--toggle-item end-->
                                </div><!--relax-accordion end-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php include './footer.php'; ?>





        </div><!--wrapper end-->

        <!-- Including Jquery Js File -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Including Bootstrap js file -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>
        <!-- Custom Js file -->
        <script type="text/javascript" src="js/script.js"></script>


    </body>


    <!-- Mirrored from creativethemes.us/relax/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:27:54 GMT -->
</html>