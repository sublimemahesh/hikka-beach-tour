<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$id = $_GET["id"];

$TourPackage = new TourPackage($id);
?>
<html>

    <!-- Mirrored from creativethemes.us/relax/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:28:11 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>Hikka Beach Tours</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- Linking Bootstrap css file -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
                        <h2><?php echo $TourPackage->title; ?></h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><span class="active"><?php echo $TourPackage->title; ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>




            <section>
                <div class="block">
                    <div class="container">
                        <div class="etd-des">
                            <div class="row">
                                <div class="col-md-9">
                                    <?php
                                    $TOUR_DATES = TourDate::getTourDatesById($id);
                                    foreach ($TOUR_DATES as $key => $tour_date) {
                                        ?>
                                        <div class="event_description">

                                            <div class="title f3">
                                                <h3><?php echo $tour_date['title']; ?></h3>
                                            </div><!--title end-->
                                            <div class="ev_des text-justify">
                                                <?php echo $tour_date['description']; ?>

                                            </div><!--ev_des end-->
                                        </div><!--event_description end-->
                                        <div class="event_imgs mg-btm-50">
                                            <div class="row">
                                                <?php
                                                $DateId = $tour_date['id'];
                                                $TOUR_DATES_PHOTOS = TourDatePhoto::getTourDatePhotosById($DateId);
                                                foreach ($TOUR_DATES_PHOTOS as $key => $tour_date_photo) {
                                                    if ($key < 4) {
                                                        ?>

                                                        <div class="col-md-3">
                                                            <div class="etd-img">
                                                                <img src="upload/tour-package/date/gallery/<?php echo $tour_date_photo['image_name']; ?>" alt="">
                                                                <a class="html5lightbox" data-thumbnail="" data-group="set2" href="upload/tour-package/date/gallery/<?php echo $tour_date_photo['image_name']; ?>" title=""><i class="fa fa-arrows-alt"></i></a>
                                                            </div><!--etd-img end-->
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div><!--event_imgs end-->
                                        <?php
                                    }
                                    ?>

                                </div>
                                <div class="col-md-3">
                                    <div class="widget etd">
                                        <div class="widget">
                                            <div class="latest-posts">
                                                <h3 class="sd-title">More Tour Packages</h3>
                                                <?php
                                                $TOUR_PACKAGES = TourPackage::all();
                                                foreach ($TOUR_PACKAGES as $tour_package) {
                                                    ?>  
                                                    <div class="ad-container">
                                                        <div class="post">
                                                            <div class="post-img">
                                                                <a href="view-tour-package.php?id=<?php echo $tour_package['id']; ?>">
                                                                    <img src="upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt="">
                                                                </a>
                                                            </div>
                                                        </div><!--post end-->
                                                        <div class= "text-center">
                                                            <div class="more-title">
                                                                <a href="view-tour-package.php?id=<?php echo $tour_package['id']; ?>"><?php echo $tour_package['title']; ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div><!--latest-posts end-->
                                        </div><!--widget end-->
                                    </div><!--widget end-->
                                </div>
                            </div>
                        </div><!--etd-des end-->

                    </div>
                </div>
            </section>
            <?php include './footer.php'; ?>
        </div><!--wrapper end-->

        <!-- Including Jquery Js File -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Including Bootstrap js file -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/datecounter.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>
        <!-- Custom Js file -->
        <script type="text/javascript" src="js/script.js"></script>


    </body>


    <!-- Mirrored from creativethemes.us/relax/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:28:49 GMT -->
</html>


