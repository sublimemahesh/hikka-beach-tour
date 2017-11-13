<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Relax Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Linking Bootstrap css file -->

    </head>


    <body>

        <div class="wrapper">

            <?php include './header.php'; ?>
            <div class="about-bg">
                <div class="container">
                    <div class="rl-banner">
                        <h2 class="tp">Booking</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><span class="active">Booking</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <section>
                <div class="container padding-bottom-6x padding-top-6x">
                    <div class="panel panel-default container">
                        <div class="panel-body">
                            <div class="wrapper-inner">
                                <div class="row">
                                    <div class="contact-form " style="padding-bottom: 20px">
                                        <div class="row form-group">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Your Name</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" value="">
                                                <span id="spanFullName" ></span>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Your Email</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater" value="">
                                                <span id="spanEmail" ></span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Your Country</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater">
                                                <span id="spanCountry" ></span>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Your Contact Numbers</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                                <span id="spanPhone" ></span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Departure Date</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtDdate" id="txtDdate" class="form-control input-validater datepicker" value="" required>
                                                <span id="spanDeparture"></span>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Arrival Date</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtAdate" id="txtAdate" class="form-control input-validater datepicker" value="" required>

                                                <span id="spanArrival"></span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Number of Adults</label>
                                                <span id="star">*</span>

                                                <input type="number" name="txtAdults" id="txtAdults" class="form-control" value="">

                                                <span id="spanAdults" ></span>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Number of Children</label>
                                                <span id="star">*</span>

                                                <input type="number" name="txtChild" id="txtChild" class="form-control" value="<?php echo $child; ?>">   

                                                <span id="spanChild" ></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tour Package</label>
                                            <span id="star">*</span>


                                            <select name="txtPackage" id="txtPackage" class="form-control">
                                                <option> -- Please Select a Package -- </option>

                                            </select>
                                            <span id="spanPackage" ></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <span id="star">*</span>
                                            <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here" required></textarea>
                                            <span id="spanMessage" ></span>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-xs-12 col-sm-6 row">
                                                <div class="col-sm-6">
                                                    <label for="comment">Security Code:</label>
                                                    <span id="star">*</span> 
                                                    <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                    <span id="capspan" ></span> 
                                                </div>
                                                <div class="col-sm-6"> 
                                                    <?php include("./booking-form/captchacode-widget.php"); ?> 
                                                </div>  
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="col-sm-4">
                                                    <div class="div-check" style="margin-top: 25px;">
                                                        <img src="booking-form/img/checking.gif" id="checking"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 text-right" style="margin-top: 20px">
                                                    <button type="submit" id="btnSubmit" class="btn contact-send-msg">Send Your Inquiry</button>
                                                </div> 
                                            </div>
                                        </div> 
                                        <div id="dismessage" align="center"></div>
                                    </div>
                                </div>  
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
        <script type="text/javascript" src="js/html5lightbox.js"></script>
        <!-- Custom Js file -->
        <script type="text/javascript" src="js/script.js"></script>
        <script src="booking-form/scripts.js" type="text/javascript"></script>

        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var dateToday = new Date();

            $(function () {

                $("[id=txtDdate]").datepicker({
//                    dateFormat: 'dd-mm-yy',
////                    minDate: dateToday
                }).val();
            });


            $(function () {

                $("[id=txtAdate]").datepicker({
//                    dateFormat: 'dd-mm-yy',
//                    minDate: dateToday
                }).val();
            });
        </script>

    </body>

</html>