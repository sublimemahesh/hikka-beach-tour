
<?php
include_once(dirname(__FILE__) . '/class/include.php');

$adate = '';
$ddate = '';
$adults = '';
$child = '';
$TxtTourPackage = '';



if (isset($_POST['txtAdate'])) {
    $adate = $_POST['txtAdate'];
}

if (isset($_POST['txtDdate'])) {
    $ddate = $_POST['txtDdate'];
}

if (isset($_POST['txtAdults'])) {
    $adults = $_POST['txtAdults'];
}

if (isset($_POST['txtChild'])) {
    $child = $_POST['txtChild'];
}

if (isset($_POST['txtTourPackage'])) {
    $TxtTourPackage = $_POST['txtTourPackage'];
}

if (isset($_POST['txtTourPackage'])) {
    $TxtTourPackage = $_POST['txtTourPackage'];
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Hikka Beach Tours | Hikkaduwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hikka beach tours is a perfect and superb platform to arrange your dreamed tours with an adventurous, luxurious, serene and exciting moments!">
        <meta name="keywords" content="Hikka Beach Tours, tour guides in hikkaduwa, tourist guide hikkaduwa, tour operators in hikkaduwa, tour company in hikkaduwa, hikkaduwa, travel to hikkaduwa, hikkaduwa tourism,hikkaduwa tour,travel to hikkaduwa,visit hikkaduwa,visit hikkaduwa holidays,trip to hikkaduwa,tourist in hikkaduwa,hikkaduwa travel and tours,lanka holidays,tours in galle,travel and tours,about galle, travel sri lanka,sri lanka,sri lanka tourism,sri lanka tour,travel to sri lanka,visit sri lanka,visit sri lanka holidays,trip to srilanka,tourist in sri lanka,sri lanka travel and tours,lanka holidays,tours in sri lanka,travel and tours,about sri lanka,travel websites,srilankan,srilanka" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Linking Main Css file -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
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
                                                <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                                <span id="spanFullName"></span>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Your Email</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
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
                                                <label>Arrival Date</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtAdate" id="txtAdate" value="<?php echo $adate; ?>" class="form-control input-validater datepicker">

                                                <span id="spanAdate"></span>
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <label>Departure Date</label>
                                                <span id="star">*</span>
                                                <input type="text" name="txtDdate" id="txtDdate" value="<?php echo $ddate; ?>" class="form-control input-validater datepicker">
                                                <span id="spanDdate"></span>
                                            </div>

                                        </div>
                                        <div class="row form-group">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Number of Adults</label>
                                                <span id="star">*</span>

                                                <input type="number" name="txtAdult" value="<?php echo $adults; ?>" id="txtAdult" min="0" class="form-control">

                                                <span id="spanAdult" ></span>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>Number of Children</label>
                                                <span id="star">*</span>
                                                <input type="number" name="txtChildren" min="0" value="<?php echo $child; ?>" id="txtChildren" class="form-control">   
                                                <span id="spanChildren" ></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tour Package</label>
                                            <span id="star">*</span>
                                            <select name="txtPackage" id="txtPackage" class="form-control">
                                                <option> -- Please Select a Package -- </option>

                                                <?php
                                                if (count(TourPackage::all()) > 0) {
                                                    foreach (TourPackage::all() as $key => $package) {
                                                        if ($package['title'] == $TxtTourPackage) {
                                                            ?>
                                                            <option value="<?php echo $package['title']; ?>" selected><?php echo $package['title']; ?></option>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <option value="<?php echo $package['title']; ?>"><?php echo $package['title']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                } else {
                                                    ?>
                                                    <b style="padding-left: 15px;">No packages in the database.</b> 
                                                    <?php
                                                }
                                                ?>
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
                                                    <button type="submit" id="btnSubmit" class="btn index-view-btn">Send Your Inquiry</button>
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
                    dateFormat: 'dd-mm-yy',
                    minDate: dateToday
                }).val();
            });
            $(function () {
                $("[id=txtAdate]").datepicker({
                    dateFormat: 'dd-mm-yy',
                    minDate: dateToday
                }).val();
            });
        </script>
    </body>
</html>