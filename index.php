<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<html>


    <head>
        <meta charset="UTF-8">
        <title>Relax Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Linking Bootstrap css file -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <!-- Revolution Css files -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

        <link href="js/owl-carousel/owl.carousel1.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>

        <link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>

        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './slider.php'; ?>

            <section>
                <div class="room-finding style2 style3 push-top">
                    <div class="container">
                        <div class="find-room">
                            <div class="search-room">
                                <form>
                                    <div>
                                        <label>	
                                            <h5>Select Tour Package</h5>
                                            <select>
                                                <option>Select Room Type</option>
                                                <option>Select Room Type 2</option>
                                                <option>Select Room Type 3</option>
                                                <option>Select Room Type 4</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </label>
                                    </div>

                                    <div>
                                        <label>
                                            <h5>Arrival Date</h5>
                                            <input type="text"  name="txtAdate" id="txtAdate" value="Arrival" class="datepicker">
                                            <i class="fa fa-calendar"></i>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <h5>Arrival Date</h5>
                                            <input type="text" name="txtDdate" id="txtDdate" value="Departure" class="datepicker">
                                            <i class="fa fa-calendar"></i>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <h5>Adults</h5>
                                            <select>
                                                <option>Adults</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                 <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                 <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <h5>Children</h5>
                                            <select>
                                                <option>Child</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <i class="fa fa-angle-down	"></i>
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <h5>Search Now</h5>
                                            <button type="button" class="searching">Search Now</button>
                                        </label>
                                    </div>
                                </form>
                            </div>				
                        </div><!--find-room end-->
                    </div><!-- container end -->
                </div><!--room-finding end-->
            </section>

            <section>
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-us">
                                    <div class="title">
                                        <h3>About Us</h3>
                                    </div><!--title end-->
                                    <h5><a href="about.php" title="">Discover what makes us a five star hotel</a></h5>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi.</p>
                                    <ul class="ab-links">
                                        <li><i class="fa fa-user-secret"></i>Dedicated Team</li>
                                        <li><i class="fa fa-user"></i>Best Advisors</li>
                                        <li><i class="fa fa-history"></i>24/7 Supports</li>
                                    </ul>
                                </div><!--about-us end-->
                            </div>
                            <div class="col-md-8">
                                <div class="fav-areas">
                                    <div class="title f2">
                                        <h3>Our Favorite Tour Packages</h3>
                                    </div><!--title end-->
                                    <div class="row">
                                        <!---Start test slider-->
                                        <div class="owl-carousel-custom product-row" data-items="2" data-items-sm="1" data-items-xs="1">
                                            <div class="product">
                                                <div class="product__top">
                                                    <!--                                                    <div class="product__badge product__badge--green">Galle</div>-->
                                                    <div class="product__img">
                                                        <a href="shop-single.html" class="product__img-link">
                                                            <img src="images/resources/1403102262_198404112362_1502704718_n.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__info">	
                                                    <div class="product__info-top">
                                                        <div class="product__name">
                                                            <a href="shop-single.html" class="product__link">Tour Package title1</a>
                                                        </div>
                                                        <div class="product__category">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>

                                                    </div>
                                                    <div class="product__info-bottom">

                                                        <div class="product__fl-r">
                                                            <div class="add-cart product__add-cart">
                                                                <a href="#" title="" class="index-view-btn">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>									
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__top">

                                                    <div class="product__img">
                                                        <a href="shop-single.html" class="product__img-link">
                                                            <img src="images/resources/1016441342_198017451442_1504087434_n.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__info">	
                                                    <div class="product__info-top">
                                                        <div class="product__name">
                                                            <a href="shop-single.html" class="product__link">Tour Package title2</a>
                                                        </div>
                                                        <div class="product__category">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>

                                                    </div>
                                                    <div class="product__info-bottom">

                                                        <div class="product__fl-r">
                                                            <div class="add-cart product__add-cart">
                                                                <a href="#" title="" class="index-view-btn">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>									
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__top">
                                                    <div class="product__img">
                                                        <a href="shop-single.html" class="product__img-link">
                                                            <img src="images/resources/1275916018_198276926118_1502687592_n.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__info">	
                                                    <div class="product__info-top">
                                                        <div class="product__name">
                                                            <a href="shop-single.html" class="product__link text-center">Tour Package title3</a>
                                                        </div>
                                                        <div class="product__category text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>

                                                    </div>
                                                    <div class="product__info-bottom">

                                                        <div class="product__fl-r">
                                                            <div class="add-cart product__add-cart">
                                                                <a href="#" title="" class="index-view-btn">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>									
                                                </div>
                                            </div>
                                        </div>
                                        <!---end test slider-->
                                    </div>
                                </div><!--fav areas end-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="pd2 bg bg1 overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 hidden-sm hidden-xs">
                                <div class="ft-img thumb-carousel" data-slider-id="1">
                                    <div>
                                        <figure>
                                            <img src="images/resources/ft-img3.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="images/resources/ft-img4.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="images/resources/ft-img.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="images/resources/ft-img2.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="our-services">
                                    <div class="title f2">
                                        <h3>Our Awesome Services</h3>
                                    </div><!--title end-->
                                    <div class="service-thumbs owl-thumbs" data-slider-id="1">
                                        <div class="service owl-thumb-item">
                                            <img src="images/icon1.png" alt="">
                                            <h4>Restaurant</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                        <div class="service owl-thumb-item">
                                            <img src="images/icon2.png" alt="">
                                            <h4>Spa - Beauty & Health</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                        <div class="service owl-thumb-item">
                                            <img src="images/icon3.png" alt="">
                                            <h4>Conference Room</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                        <div class="service owl-thumb-item">
                                            <img src="images/icon4.png" alt="">
                                            <h4>Swimming Pool</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                    </div>
                                </div><!--our-services end-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>	

            <!--
                        <section>
                            <div class="block remove-btm-gap">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="title f3">
                                                <h3>Our Gallery</h3>
                                            </div>
                                            <div class="options">
                                                <div class="option-isotop">
                                                    <ul id="filter" class="option-set filters-nav" data-option-key="filter">
                                                        <li><a class="selected" data-option-value="*">All show</a></li>
                                                        <li><a data-option-value=".rooms">Rooms</a></li>
                                                        <li><a data-option-value=".kitchen">Kitchen</a></li>
                                                        <li><a data-option-value=".dinning">Dining Room</a></li>
                                                        <li><a data-option-value=".bath">Bath Room</a></li>
                                                        <li><a data-option-value=".swimming">Swimming Pool</a></li>
                                                    </ul>
                                                </div>
                                            </div> FILTER BUTTONS 
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row gallery grid">
                                                <div class="col-md-5 col-sm-5 col-xs-5 rooms swimming">
                                                    <div class="grid-item2 width-auto">
                                                        <figure>
                                                            <img src="images/resources/01.jpg" alt="">
                                                            <figcaption>
                                                                <h5>Bed room</h5>
                                                                <ul>
                                                                    <li><a href="#" title=""><i class="fa fa-television"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
                                                                </ul>
                                                            </figcaption>
                                                            <div class="popup-icon">
                                                                <a class="html5lightbox" data-thumbnail="images/resources/gallery1.jpg" data-group="set1" href="images/resources/gallery1.jpg" title="home 1"><i class="fa fa-compress"></i></a>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
            
            
                                                <div class=" col-md-2 col-sm-2 col-xs-2  kitchen">
                                                    <div class="grid-item2 width-auto">
                                                        <figure>
                                                            <img src="images/resources/02.jpg" alt="">
                                                            <figcaption>
                                                                <h5>Bed room</h5>
                                                                <ul>
                                                                    <li><a href="#" title=""><i class="fa fa-television"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
                                                                </ul>
                                                            </figcaption>
                                                            <div class="popup-icon">
                                                                <a class="html5lightbox" data-thumbnail="images/resources/gallery2.jpg" data-group="set1" href="images/resources/gallery2.jpg" title="home 2"><i class="fa fa-compress"></i></a>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
            
            
                                                <div class="col-md-5 col-sm-5 col-xs-5 dinning bath">
                                                    <div class="grid-item2 width-auto">
                                                        <figure>
                                                            <img src="images/resources/03.jpg" alt="">
                                                            <figcaption>
                                                                <h5>Bed room</h5>
                                                                <ul>
                                                                    <li><a href="#" title=""><i class="fa fa-television"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
                                                                </ul>
                                                            </figcaption>
                                                            <div class="popup-icon">
                                                                <a class="html5lightbox" data-thumbnail="images/resources/gallery3.jpg" data-group="set1" href="images/resources/gallery3.jpg" title="home 3"><i class="fa fa-compress"></i></a>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
            
            
            
                                                <div class="col-md-5  col-sm-5 col-xs-5  bath rooms">
                                                    <div class="grid-item2 width-auto">
                                                        <figure>
                                                            <img src="images/resources/04.jpg" alt="">
                                                            <figcaption>
                                                                <h5>Bed room</h5>
                                                                <ul>
                                                                    <li><a href="#" title=""><i class="fa fa-television"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
                                                                </ul>
                                                            </figcaption>
                                                            <div class="popup-icon">
                                                                <a class="html5lightbox" data-thumbnail="images/resources/gallery4.jpg" data-group="set1" href="images/resources/gallery4.jpg" title="home 4"><i class="fa fa-compress"></i></a>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
            
            
            
                                                <div class=" col-md-7 col-sm-7 col-xs-7  swimming kitchen">
                                                    <div class="grid-item2 width-auto">
                                                        <figure>
                                                            <img src="images/resources/05.jpg" alt="">
                                                            <figcaption>
                                                                <h5>Bed room</h5>
                                                                <ul>
                                                                    <li><a href="#" title=""><i class="fa fa-television"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
                                                                    <li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
                                                                </ul>
                                                            </figcaption>
                                                            <div class="popup-icon">
                                                                <a class="html5lightbox" data-thumbnail="images/resources/gallery5.jpg" data-group="set1" href="images/resources/gallery5.jpg" title="home 5"><i class="fa fa-compress"></i></a>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
            
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>-->

            <section>
                <div class="block trip remove-btm-gap">
                    <div class="container-fluid">
                        <div class="title ta-center f3">
                            <h3>Excursions</h3>
                        </div><!--title end-->
                        <div class="row">
                            <div class="luxury-trip">
                                <div class="masonary">	
                                    <div class="grid-sizer"></div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tripp">
                                            <figure>
                                                <img src="images/resources/trip1.jpg" alt="">
                                                <figcaption>
                                                    <h3>Water Rafting</h3>
<!--                                                    <p><b>$93.00 /</b> Extra</p>-->
                                                </figcaption>
                                                <div class="overlay-data">
                                                    <h3>Water Rafting</h3>
<!--                                                    <span>Dinner Breakfast</span>
                                                    <h5>$29.00 / <small>Extra</small></h5>-->
                                                    <a href="#" title="" class="booking">View More</a>
                                                </div><!--overlay-data end-->
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="tripp">
                                            <figure>
                                                <img src="images/resources/trip2.jpg" alt="">
                                                <figcaption class="ta-center">
                                                    <h3>Water Rafting</h3>
                                                </figcaption>
                                                <div class="overlay-data">
                                                    <h3>Canyoning</h3>

                                                    <a href="#" title="" class="booking">View More</a>
                                                </div><!--overlay-data end-->
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="tripp">
                                            <figure>
                                                <img src="images/resources/trip3.jpg" alt="">
                                                <figcaption class="ta-center">
                                                </figcaption>
                                                <div class="overlay-data">
                                                    <h3>Canyoning</h3>

                                                    <a href="#" title="" class="booking">View More</a>
                                                </div><!--overlay-data end-->
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tripp fr">
                                            <figure>
                                                <img src="images/resources/trip4.jpg" alt="">
                                                <figcaption class="ta-center">
                                                    <h3>Water Rafting</h3>

                                                </figcaption>
                                                <div class="overlay-data">

                                                    <a href="#" title="" class="booking">View More</a>
                                                </div><!--overlay-data end-->
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tripp fr">
                                            <figure>
                                                <img src="images/resources/trip5.jpg" alt="">
                                                <figcaption class="ta-center">
                                                    <h3>Water Rafting</h3>
                                                </figcaption>
                                                <div class="overlay-data">
                                                    <h3>Canyoning</h3>
                                                    <a href="#" title="" class="booking">View More</a>
                                                </div><!--overlay-data end-->
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div><!--luxury-trip end-->
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="client-comment">
                                    <div class="title">
                                        <h3>Testimonial</h3>
                                    </div>
                                    <div class="owl-carousel-custom" data-items="1" data-items-sm="1" data-items-xs="1">
                                        <div class="comment">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br /> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. </p>
                                            <div class="client-info">
                                                <div class="client-picc">
                                                    <img src="images/resources/client-pic4.png" alt="">
                                                </div>
                                                <div class="client-dt">
                                                    <h5>Ken Lerer</h5>
                                                </div>
                                            </div>
                                        </div><!--comment end-->
                                        <div class="comment">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br /> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                                            <div class="client-info">
                                                <div class="client-picc">
                                                    <img src="images/resources/client-pic2.png" alt="">
                                                </div>
                                                <div class="client-dt">
                                                    <h5> Jon Doe</h5>
                                                </div>
                                            </div>
                                        </div><!--comment end-->
                                        <div class="comment">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br /> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim enim ad minim veniam, quis nostrud exercitation  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. </p>
                                            <div class="client-info">
                                                <div class="client-picc">
                                                    <img src="images/resources/client-pic3.png" alt="">
                                                </div>
                                                <div class="client-dt">
                                                    <h5>Lara Ditta</h5>
                                                </div>
                                            </div>
                                        </div><!--comment end-->
                                    </div><!--client-carousel end-->
                                </div><!--client-comment end-->
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
        <script type="text/javascript" src="js/isotope.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>
        <script type="text/javascript" src="js/wow.js"></script>

        <!-- Revolution Js Files -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- Revolution Slider Extensions -->
        <script type="text/javascript" src="revolution/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="revolution/js/revolution.initialize3.js"></script>
        <script type="text/javascript" src="js/wow.js"></script>
        <script type="text/javascript" src="js/upcounter.js"></script>
        <script src="js/scrollax.min.js" type="text/javascript"></script>
        <!-- Custom Js file -->
        <script type="text/javascript" src="js/script.js"></script>
        <script src="js/owl-carousel/owl.carousel.min1.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var dateToday = new Date();

            $(function () {

                $("[id=txtDdate]").datepicker({
//                    dateFormat: 'dd-mm-yy',
////                    minDate: dateToday
                }).val();
            });


            $(function () {

                $("[id=txtAdate]").datepicker({
//                    dateFormat: 'dd-mm-yy',
//                    minDate: dateToday
                }).val();
            });
        </script>


    </body>

</html>