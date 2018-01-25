<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$TOUR_PACKAGES = TourPackage::all();
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Holiday Tours in Sri Lanka | Hikkaduwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hikka beach tours is a perfect and superb platform to arrange your dreamed tours with an adventurous, luxurious, serene and exciting moments!" />
        <meta name="keywords" content="Hikka Beach Tours,travel in srilanka,hikkaduwa beach,beach tours,hikkaduwa tours,tour in hikkaduwa,hikkaduwa surfing,tour sites,travel sri lanka,sri lanka, hikkaduwa ,hikkaduwa tour packages,tours in srilanka, hikkaduwa beauty" />
        <!-- Linking Bootstrap css file -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>

        <div class="wrapper">

            <?php include './header.php'; ?>
            <div class="about-bg">
                <div class="container">
                    <div class="rl-banner">
                        <h2 class="tp">Tour Packages</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><span class="active">Tour Packages</span></li>
                        </ul>
                    </div>
                </div>
            </div>



            <section>

                <section>
                    <div class="block">
                        <div class="container">
                            <div class="row">
                                <div class="blog-posts">
                                    <?php
                                    foreach ($TOUR_PACKAGES as $tour_package) {
                                        ?>
                                        <div class="col-md-4">
                                            <div class="blog-post">
                                                <a href="view-tour-package.php?id=<?php echo $tour_package['id']; ?>">
                                                    <figure>
                                                        <img src="upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt="">
                                                        <figcaption>
                                                            <i class="fa fa-link"></i>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                                <h3><a href="view-tour-package.php?id=<?php echo $tour_package['id']; ?>" title=""><?php echo $tour_package['title']; ?></a></h3>
                                                <p class="text-justify"><?php echo substr($tour_package['short_description'], 0, 150) . '...'; ?></p>
                                                <div class="view-btn-container">
                                                    <a href="view-tour-package.php?id=<?php echo $tour_package['id']; ?>" title="" class="index-package-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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