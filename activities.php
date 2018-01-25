<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ACTVITIES = Activities::all();
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Hikka beach tour activities | Activities in Hikkaduwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hikkaduwa Sri Lanka Activities. The surfing in the Hikkaduwa region is quite well known and gets the best surf during its dry season, November to March . and there are several activities to do arround hikkaduwa" />
        <meta name="keywords" content="Hikka Beach Tours,surfing,surf hikka,hikka surf,surfing srilanka,surf tours,activities in srilanka,hikkaduwa activities,hikkaduwa beach tours,hikkaduwa activities,things to do in hikkaduwa,hikkaduwa,tour sites,travel sri lanka,sri lanka, hikkaduwa ,hikkaduwa beach,tours in srilanka, hikkaduwa beauty" />
        
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
                        <h2 class="tp">Activities</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><span class="active">Activities</span></li>
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
                                foreach ($ACTVITIES as $activities) {
                                    ?>
                                    <div class="col-md-3">
                                        <div class="room-list-view">
                                            <a href="view-activities.php?id=<?php echo $activities['id']; ?>">
                                                <figure>
                                                    <img src="upload/activity/<?php echo $activities['image_name']; ?>" alt="">
                                                </figure>
                                            </a>
                                            <div class="room-info style2 style3">
                                                <a href="view-activities.php?id=<?php echo $activities['id']; ?>"><h3><?php echo $activities['title']; ?></h3></a>
                                                <p class="text-justify"><?php echo substr($activities['short_description'], 0, 150) . '...'; ?></p>
                                                <a href="view-activities.php?id=<?php echo $activities['id']; ?>" title="" class="booking3">View More</a>
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