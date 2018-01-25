<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
$GALLERY = AlbumPhoto::getAlbumPhotosById(6);
?>
<html>

    <!-- Mirrored from creativethemes.us/relax/gallery2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:26:46 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>Hikka Beach Tours | Hikkaduwa beauty</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="hikkaduwa beauty, surfing hikkaduwa, hikkaduwa images,hikkaduwa surfing images,surf images, surfing srilanka, hikka surf, surf hikka, hikkaduwa images ,srilanka beauty " />
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
                        <h2>Our Gallery</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><span class="active">Gallery Full Width</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <section>
                <div class="block">
                    <div class="container-fluid">
                        <div class="gallery2-projects">
                            <div class="row">
                                <div class="masonary2 no-border">
                                    <?php
                                    foreach ($GALLERY as $gallery) {
                                        ?>

                                        <div class="col-md-3 col-sm-6 col-xs-6 full-wdth rooms">
                                            <div class="gallery-style grid-item2">
                                                <figure>
                                                    <img src="upload/photo-album/gallery/<?php echo $gallery['image_name'];?>" alt="">
                                                    <figcaption>
                                                        <a class="html5lightbox" data-thumbnail="upload/photo-album/gallery/<?php echo $gallery['image_name'];?>" data-group="set1" href="upload/photo-album/gallery/<?php echo $gallery['image_name'];?>" title="">
                                                            <h5><?php echo $gallery['caption'];?></h5>
                                                            <ul>
                                                                <li><i class="fa fa-compress"></i></li>
                                                            </ul>
                                                        </a>
                                                    </figcaption>
                                                    <div class="popup-icon">
                                                        <a class="html5lightbox" data-thumbnail="upload/photo-album/gallery/thumb/<?php echo $gallery['image_name'];?>" data-group="set1" href="upload/photo-album/gallery/<?php echo $gallery['image_name'];?>" title=""><i class="fa fa-compress"></i></a>
                                                    </div>
                                                </figure>
                                            </div><!--gallery-style end-->
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div><!--masonary end-->
                        </div><!--gallery2-projects end-->
                    </div>
                </div>
            </section>

            <?php include './footer.php'; ?>


        </div><!--wrapper end-->

        <!-- Including Jquery Js File -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Including Bootstrap js file -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/isotope.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>
     
    </body>


    <!-- Mirrored from creativethemes.us/relax/gallery2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:27:01 GMT -->
</html>