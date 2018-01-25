<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$PROPERTIES = Room::all();
?>
<html>

    <!-- Mirrored from creativethemes.us/relax/room-list-view2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:25:52 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>Hikka beach tour accommodation | Accommodation in Hikkaduwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hikkaduwa Sri Lanka Accommodation." />
        <meta name="keywords" content="Hikka Beach Tours,accommodation in srilanka,hikkaduwa accommodation,hikkaduwa beach tours,where to go in hikkaduwa,hikkaduwa,accommodation,accommodation hikkaduwa,sri lanka, hikkaduwa ,hikkaduwa beach,tours in srilanka, hikkaduwa beauty" />
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
                        <h2>Properties</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><span class="active">Properties</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <section>
                <div class="pd90 remove-mrg-btm">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach ($PROPERTIES as $property) {
                                ?>
                                <div class="col-md-6">
                                    <div class="room-listing style2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="room-details">
                                                    <div class="room-img">
                                                        <a href="view-properties.php?id=<?php echo $property['id']; ?>">
                                                            <figure>
                                                                <img src="upload/room/<?php echo $property['image_name']; ?>" alt="">
                                                                <figcaption>
                                                                    <i class="fa fa-link"></i>
                                                                </figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <div class="room-info style2">
                                                        <h3><a href="view-properties.php"><?php echo $property['title']; ?></a></h3>
                                                        <p class="text-justify"><?php echo substr($property['short_description'], 0, 100) . '...'; ?></p>
                                                        <ul class="feature-dt">
                                                            <li><span><i class="fa fa-cutlery"></i></span></li>
                                                            <li><span><i class="fa fa-coffee"></i></span></li>
                                                        </ul>
                                                        <div class="room-price">
                                                            <h5> <a href="view-properties.php?id=<?php echo $property['id']; ?>" title="" class="">View More</a></h5>
                                                        </div><!--room-price end-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--room-listing end-->
                                </div>
                                <?php
                            }
                            ?>
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
        <script type="text/javascript" src="js/html5lightbox.js"></script>
        <!-- Custom Js file -->
        <script type="text/javascript" src="js/script.js"></script>


    </body>


    <!-- Mirrored from creativethemes.us/relax/room-list-view2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:26:21 GMT -->
</html>