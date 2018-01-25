<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ATTRACTIONS = Attraction::all();
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Hikka beach tour attractions | Attractions in Hikkaduwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hikkaduwa Sri Lanka Attractions.There are several placess to visit arround hikkaduwa" />
        <meta name="keywords" content="Hikka Beach Tours,attractions in srilanka,hikkaduwa attractions,hikkaduwa beach tours,where to go in hikkaduwa,hikkaduwa,tour sites,travel sri lanka,sri lanka, hikkaduwa ,hikkaduwa beach,tours in srilanka, hikkaduwa beauty" />
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
                        <h2 class="tp">Attractions</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><span class="active">Attractions</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <section>
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="room-listing-style3">
                                <?php
                                foreach ($ATTRACTIONS as $attractions) {
                                    ?>
                                    <div class="col-md-3">
                                        <div class="room-list-view">
                                            <a href="view-attractions.php?id=<?php echo $attractions['id']; ?>">
                                                <figure>
                                                    <img src="upload/attraction/<?php echo $attractions['image_name']; ?>" alt="">
                                                </figure>
                                            </a>
                                            <div class="room-info style2 style3">
                                                <a href="view-attractions.php?id=<?php echo $attractions['id']; ?>"><h3><?php echo $attractions['title']; ?></h3></a>
                                                <p class="text-justify"><?php echo substr($attractions['short_description'], 0, 150) . '...'; ?></p>
                                                <a href="view-attractions.php?id=<?php echo $attractions['id']; ?>" title="" class="booking3">View More</a>
                                            </div><!--room-info end-->
                                        </div><!--room-list-view end-->
                                    </div>
                                    <?php
                                }
                                ?>
                            </div><!--room-listing-style3 end-->
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