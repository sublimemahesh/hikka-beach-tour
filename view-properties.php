<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$id = $_GET["id"];

$PROPERTY = new Room($id);
?>
<html>

    <!-- Mirrored from creativethemes.us/relax/room-detail1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:25:12 GMT -->
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
        <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
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
                    <div class="rl-banner style2">
                        <h2><?php echo $PROPERTY->title; ?></h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><span class="active"><?php echo $PROPERTY->title; ?></span></li>
                        </ul>
                    </div>

                </div>
            </div>



            <section>
                <div class="pd70">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="block">
                                    <div class="homey-imgs">
                                        <?php
                                        $PROPERTY_PHOTOS = RoomPhoto::getRoomPhotosById($id);
                                        foreach ($PROPERTY_PHOTOS as $key => $property_photo) {
                                            if ($key < 4) {
                                                ?>
                                                <div class="homey-images">
                                                    <img src="upload/room/gallery/<?php echo $property_photo['image_name']; ?>" alt="">
                                                </div><!--homey-images end-->
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div><!--homey-imgs end-->
                                </div>
                                <div class="homey-room-details">
                                    <div class="text-justify">  
                                   <?php echo $PROPERTY->description; ?>
                                    </div>  
                                </div><!--homey-room-details end-->
                              

                            </div>
                            <div class="col-md-3">
                                <div class="right-sidebar">
                                    <div class="widget etd">
                                        <div class="widget">
                                            <div class="latest-posts">
                                                <h3 class="sd-title">More Properties</h3>
                                              
                                              <?php
                                                $ALL_PROPERTIES = Room::all();
                                                foreach ($ALL_PROPERTIES as $properties) {
                                                    ?>  
                                                    <div class="ad-container">
                                                        <div class="post">
                                                            <div class="post-img">
                                                                <a href="view-properties.php?id=<?php echo $properties['id']; ?>">
                                                                    <img src="upload/room/<?php echo $properties['image_name']; ?>" alt="">
                                                                </a>
                                                            </div>
                                                        </div><!--post end-->
                                                        <div class= "text-center">
                                                            <div class="more-title">
                                                                <a href="view-properties.php?id=<?php echo $properties['id']; ?>"><?php echo $properties['title']; ?>
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
                                </div><!--right-siderbar end-->
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
        <script type="text/javascript" src="js/flatpickr.min.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>
        <!-- Custom Js file -->
        <script type="text/javascript" src="js/script.js"></script>


    </body>


    <!-- Mirrored from creativethemes.us/relax/room-detail1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:25:18 GMT -->
</html>