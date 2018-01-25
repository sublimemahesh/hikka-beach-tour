

<footer>
    <div class="block no-padding">
        <div class="bg3">
            <div class="container">
                <div class="top-footer">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="widget">
                                <div class="about-widget">
                                    <a href="#" title=""><img src="images/logo2.png" alt=""></a>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  sed diam nonummy nibh euismod it tincidunt ut laoreet commodo consequat.  </p>
                                    <a href="about-us.php" title="" class="rd-more">Read More <i class="fa fa-angle-right"></i></a>
                                    <ul class="sc-links">
                                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-flickr"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div><!--about-widget end-->
                            </div><!--widget end-->
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <div class="news-widget">
                                    <h3 class="widget-title">Tour Packages</h3>
                                    <?php
                                    $TOUR_PACKAGES = TourPackage::all();
                                    foreach ($TOUR_PACKAGES as $key => $tour_package){
                                    if ($key<3) {
                                    ?>
                                    <div class="news">
                                        <img src="upload/tour-package/<?php echo $tour_package['image_name']; ?>" style="width:120px;" alt="">
                                        <div class="news-details">
                                            <h3><a href="#" title=""><?php echo $tour_package['title']; ?></a></h3>

                                        </div>
                                    </div><!--news end-->
                                    <?php
                                    }
                                    }
                                    ?>

                                </div><!--news-widget end-->
                            </div><!--widget end-->
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-quick-links">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <div class="qk-links">
                                        <ul>
                                            <li><a href="index.php" title="">Home</a></li>
                                            <li><a href="tour-packages.php" title="">Tour Packages</a></li>
                                            <li><a href="activities.php" title="">Activities</a></li>
                                            <li><a href="Attractions" title="">Excursions</a></li>
                                            <li><a href="properties.php" title="">Properties</a></li>
                                            <li><a href="booking.php" title="">Booking</a></li>
                                            <li><a href="gallery.php" title="">Gallery</a></li>
                                            <li><a href="contact-us.php" title="">Contact us</a></li>
                                        </ul>

                                    </div>
                                </div><!--widget-quick-links end-->
                            </div><!--widget-end-->
                        </div>
                    </div>
                </div><!--top-footer end-->
                <div class="bottom-footer">
                    <div class="copyright">
                        <p>© 2017 Hikka Beach Tours. All Rights Reserved. </p>
                    </div><!--copyright end-->
                    <div class="credit">
                        <p>Create design by : <a href="#" title>Sublime</a></p>
                    </div><!--credit end-->
                </div><!--bottom-footer end-->
            </div>
        </div>
    </div>
</footer><!--footer end-->

