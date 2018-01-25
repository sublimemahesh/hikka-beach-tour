<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from creativethemes.us/relax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:33:23 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>Hikka Beach Tours | Contacts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hikka beach tours is a perfect and superb platform to arrange your dreamed tours with an adventurous, luxurious, serene and exciting moments!">
        <meta name="keywords" content="Hikka Beach Tours, tour guides in hikkaduwa, tourist guide hikkaduwa, tour operators in hikkaduwa, tour company in hikkaduwa, hikkaduwa, travel to hikkaduwa, hikkaduwa tourism,hikkaduwa tour,travel to hikkaduwa,visit hikkaduwa,visit hikkaduwa holidays,trip to hikkaduwa,tourist in hikkaduwa,hikkaduwa travel and tours,lanka holidays,tours in galle,travel and tours,about galle, travel sri lanka,sri lanka,sri lanka tourism,sri lanka tour,travel to sri lanka,visit sri lanka,visit sri lanka holidays,trip to srilanka,tourist in sri lanka,sri lanka travel and tours,lanka holidays,tours in sri lanka,travel and tours,about sri lanka,travel websites,srilankan,srilanka" />
        <!-- Linking Bootstrap css file -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>

        <div class="wrapper">
            <?php include './header.php'; ?>
            <div class="about-bg">
                <div class="container">
                    <div class="rl-banner">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><span class="active">Contact Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>



            <section>
                <div class="block">
                    <div class="container">
                        <div class="title f3 mg-btm-40">
                            <h3>Contact Us</h3>
                        </div><!--title end-->
                        <div class="col-md-9">
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" placeholder="Your Name">
                                        <span id="spanFullName" ></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater"  placeholder="E-mail">
                                        <span id="spanEmail" ></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater"  placeholder="Your Country">
                                        <span id="spanCountry" ></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater" placeholder="Contact number">
                                    </div>

                                    <div class="col-sm-12 col-xs-12">
                                        <input type="text" name="txtSubject"  id="txtSubject" class="form-control input-validater" placeholder="subject">
                                        <span id="spanSubject" ></span>

                                        <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here"></textarea>
                                        <span id="spanMessage" ></span>

                                        <div class="row form-group">
                                            <div class="col-sm-6 col-xs-12">
                                                <br>
                                                <label for="comment">Security Code:</label>
                                                <span id="star">*</span> 
                                                <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                <span id="capspan" ></span> 
                                            </div>   
                                            <div class="col-sm-6 col-xs-12"> 
                                                <?php include("./contact-form/captchacode-widget.php"); ?> 
                                            </div>  

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="col-sm-4">
                                                    <div class="div-check" >
                                                        <img src="contact-form/img/checking.gif" id="checking"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 text-right">

                                                </div> 
                                            </div>
                                        </div> 

                                        <button type="submit" id="btnSubmit" class="btn index-view-btn">SEND YOUR MESSAGE</button>
                                        <div id="dismessage" align="center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="conp">
                                <div class="contact-information style2">
                                    <img src="images/icon11.png" alt="">
                                    <div class="cn-info">
                                        <h4>Address</h4>
                                        <span>Hikkaduwa, 09 downtown,<br> Galle, Srilanka</span>
                                    </div>
                                </div><!--contact-information end-->
                                <div class="contact-information style2">
                                    <img src="images/icon22.png" alt="">
                                    <div class="cn-info">
                                        <h4>Phone</h4>
                                        <span>(+01) 123 456 7896<br /> (+09) 123 456 7890 </span>
                                    </div>
                                </div><!--contact-information end-->
                                <div class="contact-information style2">
                                    <img src="images/icon33.png" alt="">
                                    <div class="cn-info">
                                        <h4>Email</h4>
                                        <span> Info@sublime.com<br /> Support@sublime.com</span>
                                    </div>
                                </div><!--contact-information end-->
                                <div class="shear">
                                    <h4>Social Link :</h4>
                                    <ul>
                                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div><!--shear end-->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="our-map style2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15871.005526545157!2d80.22453706789263!3d6.028822319258932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb5c8067f1%3A0x4768397502edf93!2sSublime+Holdings!5e0!3m2!1sen!2slk!4v1510213814761" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section><!--our map end-->

    <?php include './footer.php'; ?>

</div><!--wrapper end-->

<!-- Including Jquery Js File -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYc537bQom7ajFpWE5sQaVyz1SQa9_tuY" type="text/javascript"></script>
<script type="text/javascript" src="js/map.js"></script>
<!-- Custom Js file -->
<script type="text/javascript" src="js/script.js"></script>
<script src="contact-form/scripts.js" type="text/javascript"></script>

</body>


<!-- Mirrored from creativethemes.us/relax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 09:33:24 GMT -->
</html>