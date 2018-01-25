<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
include("./simplestats/simplestats.inc"); 
?>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <title>Hikka Beach Tours | Tours in sri lanka</title>
        <meta name="description" content="Hikka beach tours is a perfect and superb platform to arrange your dreamed tours with an adventurous, luxurious, serene and exciting moments!">
        <meta name="keywords" content="Hikka Beach Tours, tour guides in hikkaduwa, tourist guide hikkaduwa, surfing hikkaduwa, hikka surf, surfing srilanka, hikkaduwa surfing,tour company in hikkaduwa, hikkaduwa, travel to hikkaduwa, hikkaduwa tourism,hikkaduwa tour,travel to hikkaduwa,visit hikkaduwa,visit hikkaduwa holidays,trip to hikkaduwa,tourist in hikkaduwa,hikkaduwa travel and tours,lanka holidays,tours in galle,travel and tours,about galle, travel sri lanka,sri lanka,sri lanka tourism,sri lanka tour,travel to sri lanka,visit sri lanka,visit sri lanka holidays,trip to srilanka,tourist in sri lanka,sri lanka travel and tours,lanka holidays,tours in sri lanka,travel and tours,about sri lanka,travel websites,srilankan,srilanka" />

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
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
        <style>
            .client-comment.owl-pagination{
                bottom: 0px;
            }

            @media(max-width:744px){
                .client-comment.owl-pagination{
                    bottom: -50px;
                }  
            }
        </style>
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
                                <form id="tourBookingForm" method="POST" action="booking.php">
                                    <div>

                                        <h5>Select Tour Package</h5>
                                        <label>
                                            <select id="txtTourPackage" name="txtTourPackage">
                                                <option> -- Select -- </option>
                                                <?php
                                                if (count(TourPackage::all()) > 0) {
                                                    foreach (TourPackage::all() as $key => $package) {
                                                        ?>

                                                        <option value="<?php echo $package["title"]; ?>"><?php echo $package["title"]; ?></option>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <b style="padding-left: 15px;">No packages in the database.</b> 
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </label>
                                    </div>

                                    <div>

                                        <h5>Arrival Date</h5>  <label>
                                            <input type="text"  name="txtAdate" id="txtAdate" value="Arrival Date" class="datepicker">
                                            <i class="fa fa-calendar"></i>
                                        </label>
                                    </div>
                                    <div>

                                        <h5>Departure Date</h5>
                                        <label>
                                            <input type="text" name="txtDdate" id="txtDdate"  value="Departure Date" class="datepicker">
                                            <i class="fa fa-calendar"></i>
                                        </label>
                                    </div>
                                    <div>
                                        <h5>Adults</h5>
                                        <label>
                                            <input type="number" min="0" name="txtAdults"  class="form-control" value="Adults">

                                        </label>
                                    </div>
                                    <div>
                                        <h5>Children</h5>
                                        <label>
                                            <input type="number" min="0" name="txtChild"  class="form-control"  value="Children">
                                        </label>
                                    </div>
                                    <div>
                                        <h5>Send Your Inquiry</h5>
                                        <label>
                                            <button type="submit" id="btnSubmit" class="searching">Send Your Inquiry</button>
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
                                            <?php
                                            $TOUR_PACKAGES = TourPackage::all();
                                            foreach ($TOUR_PACKAGES as $tour_package) {
                                                ?>
                                                <div class = "product">
                                                    <div class = "product__top">
                                                        <!--<div class = "product__badge product__badge--green">Galle</div> -->
                                                        <div class = "product__img">
                                                            <a href = "view-tour-package.php?id=<?php echo $tour_package['id']; ?>" class = "product__img-link">
                                                                <img src = "upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt = "img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class = "product__info">
                                                        <div class = "product__info-top">
                                                            <div class = "product__name">
                                                                <a href = "view-tour-package.php?id=<?php echo $tour_package['id']; ?>" class = "product__link"><?php echo $tour_package['title']; ?></a>
                                                            </div>
                                                            <div class = "product__category"><?php echo substr($tour_package['short_description'], 0, 150) . '...'; ?></div>

                                                        </div>
                                                        <div class = "product__info-bottom">

                                                            <div class = "product__fl-r">
                                                                <div class = "add-cart product__add-cart">
                                                                    <a href = "view-tour-package.php?id=<?php echo $tour_package['id']; ?>" title = "" class = "index-view-btn">View More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
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
                <div class = "pd2 bg bg22 overlay blackish">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-md-7 hidden-sm hidden-xs">
                                <div class = "ft-img thumb-carousel" data-slider-id = "1">
                                    <div>
                                        <figure>
                                            <img src = "images/index-services/surf.jpg" alt = "">
                                        </figure>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src = "images/index-services/transport.jpg" alt = "">
                                        </figure>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src = "images/index-services/accomodation.jpg" alt = "">
                                        </figure>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src = "images/index-services/tours.jpg" alt = "">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-md-5">
                                <div class = "our-services style2">
                                    <div class = "title f3 white">
                                        <h3>Our Services</h3>
                                    </div><!--title end-->
                                    <div class = "service-thumbs owl-thumbs" data-slider-id = "1">
                                        <div class = "service owl-thumb-item">
                                            <img src = "images/index-icons/004-windsurf-sea.png" alt = "">
                                            <h4>Surf Lessons</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                        <div class = "service owl-thumb-item">
                                            <img src = "images/index-icons/003-frontal-taxi-cab.png" alt = "">
                                            <h4>Airport Taxi</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                        <div class = "service owl-thumb-item">
                                            <img src = "images/index-icons/002-accomodation.png" alt = "">
                                            <h4>Accimodation</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                        <div class = "service owl-thumb-item">
                                            <img src = "images/index-icons/001-earth-pictures.png" alt = "">
                                            <h4>Arrange Tours</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer elit, sed diam nonummy .</p>
                                        </div><!--service end-->
                                    </div>
                                </div><!--our-services end-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class = "block">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-md-12">
                                <div class = "client-comment">
                                    <div class = "title ta-center f3">
                                        <h3>Testimonial</h3>
                                    </div><!--title end-->

                                    <div class = "owl-carousel-custom" data-items = "1" data-items-sm = "1" data-items-xs = "1">

                                        <?php
                                        $COMMENTS = Comments::activeComments();
                                        foreach ($COMMENTS as $key => $comment) {
                                            ?>
                                            <div class = "comment">
                                                <?php echo $comment['comment']; ?>
                                                <div class = "client-info">
                                                    <div class = "client-picc">
                                                        <img src = "upload/comments/<?php echo $comment['image_name']; ?>" alt = "">
                                                    </div>
                                                    <div class = "client-dt">
                                                        <h5><?php echo $comment['name']; ?></h5>
                                                    </div>
                                                </div>
                                            </div><!--comment end-->

                                            <?php
                                        }
                                        ?>

                                    </div><!--client-carousel end-->
                                    <div class="btn-container">
                                        <button type="submit" id="btn-add-comment" class="btn index-view-btn">
                                            <i class="fa fa-plus"></i>  Add Your Comment
                                        </button>
                                    </div>
                                    <?php
                                    include './add-comments.php';
                                    ?>
                                </div><!--client-comment end-->
                                <div class="padding-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $ACTIVITY = Activities::all();
            ?>
            <section>
                <div class = "block trip remove-btm-gap">
                    <div class = "container-fluid">
                        <div class = "row">
                            <div class = "luxury-trip">
                                <div class = "masonary">
                                    <div class = "grid-sizer"></div>
                                    <div class="row">
                                        <div class = "col-md-6 col-sm-6 col-xs-12">
                                            <div class = "tripp">
                                                <figure>
                                                    <img src = "images/index-activities/hikkaduwa1.jpg" alt = "">
                                                    <figcaption>
                                                        <h3>
                                                            Diving & Snorkeling
                                                        </h3>
                                                                                                                <!--<p><b>$93.00 /</b> Extra</p> -->
                                                    </figcaption>
                                                    <span class = "overlay-data">
                                                        <h3>Diving & Snorkeling </h3>
                                                        <!--<span>Dinner Breakfast</span>
                                                        <h5>$29.00 / <small>Extra</small></h5> -->
                                                        <a href = "view-activities.php?id=16" title = "" class = "booking">View More</a>
                                                    </span><!--overlay-data end-->
                                                </figure>
                                            </div>
                                        </div>
                                        <div class = "col-md-3 col-sm-3 col-xs-12">
                                            <div class = "tripp">
                                                <figure>
                                                    <img src = "images/index-activities/Surfing.jpg" alt = "">
                                                    <figcaption class = "ta-center">
                                                        <h3>
                                                            Surfing 
                                                        </h3>
                                                    </figcaption>
                                                    <span class = "overlay-data">
                                                        <h3>
                                                            Surfing 
                                                        </h3>

                                                        <a href = "view-activities.php?id=22" title = "" class = "booking">View More</a>
                                                    </span><!--overlay-data end-->
                                                </figure>
                                            </div>
                                        </div>
                                        <div class = "col-md-3 col-sm-3 col-xs-12">
                                            <div class = "tripp">
                                                <figure>
                                                    <img src = "images/index-activities/24379.jpg" alt = "">
                                                    <figcaption class = "ta-center">
                                                        <h3>
                                                            Madu Ganga
                                                        </h3>
                                                    </figcaption>
                                                    <span class = "overlay-data">
                                                        <h3>
                                                            Madu Ganga
                                                        </h3>

                                                        <a href = "view-activities.php?id=21" title = "" class = "booking">View More</a>
                                                    </span><!--overlay-data end-->
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class = "col-md-6 col-sm-6 col-xs-12">
                                        <div class = "tripp fr">
                                            <figure>
                                                <img src = "images/index-activities/jet-ski.jpg" alt = "">
                                                <figcaption class = "ta-center">
                                                    <h3>Jet Ski</h3>

                                                </figcaption>
                                                <span class = "overlay-data">
                                                    <h3>Jet Ski</h3>
                                                    <a href = "view-activities.php?id=20" title = "" class = "booking">View More</a>
                                                </span><!--overlay-data end-->
                                            </figure>
                                        </div>
                                    </div>
                                    <div class = "col-md-6 col-sm-6 col-xs-12">
                                        <div class = "tripp fr">
                                            <figure>
                                                <img src = "images/index-activities/turtle.jpg" alt = "">
                                                <figcaption class = "ta-center">
                                                    <h3>Turtle Conservation</h3>
                                                </figcaption>
                                                <div class = "overlay-data">
                                                    <h3>Turtle Conservation </h3>
                                                    <a href = "view-activities.php?id=24" title = "" class = "booking">View More</a>
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

            <?php include './footer.php';
            ?>

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
        <script src="guest-comment/validate.js" type="text/javascript"></script>
        <script type="text/javascript">
            var dateToday = new Date();

            $(function () {

                $("[id=txtDdate]").datepicker({
                    dateFormat: 'dd-mm-yy',
                    minDate: dateToday
                }).val();
            });


            $(function () {

                $("[id=txtAdate]").datepicker({
                    dateFormat: 'dd-mm-yy',
                    minDate: dateToday
                }).val();
            });
        </script>


        <script>
            jQuery(document).ready(function () {
                jQuery('#btn-add-comment').click(function () {
                    jQuery("#myModal").modal('show');
                });

            });


            jQuery('#create').click(function (event) {

                event.preventDefault();

                var captchacode = jQuery('#captchacode').val();

                jQuery.ajax({
                    url: "guest-comment/captchacode.php",
                    cache: false,
                    dataType: "json",
                    type: "POST",
                    data: {
                        captchacode: captchacode

                    },
                    success: function (html) {
                        var status = html.status;
                        var msg = html.msg;

                        if (status == "incorrect") {

                            jQuery("#capspan").addClass("notvalidated");
                            jQuery("#capspan").html(msg);
                            jQuery("#capspan").show();
                            jQuery("#capspan").fadeOut(2000);

                        } else if (status == "correct") {
                            jQuery('#client-comment').submit();
                        }
                    }
                });
            });


        </script>

    </body>

</html>