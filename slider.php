<!--
<section class="main-slider style3">
    <div id="rev_slider_476_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="christmas-snow-scene" data-source="gallery" style="background-color:transparent;padding:0px;">
         START REVOLUTION SLIDER 5.3.0.2 fullscreen mode 
        <div id="rev_slider_476_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
            <ul>	
                SLIDE  
                        <li data-index="rs-1648" data-transition="" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="100"  data-thumb="upload/slider/<?php echo $slider['image_name']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                             MAIN IMAGE 
                            <img src="upload/slider/"  alt="" data-bgrepeat="no-repeat" data-bgparallax="3" class="" style="height: 300px;" data-no-retina>

                        </li>
                         SLIDE  
                      
                        ?>
                        <li data-index="rs-1648" data-transition="" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="100"  data-thumb="upload/slider/<?php echo $slider['image_name']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                             MAIN IMAGE 
                            <img src="upload/slider/"  alt="" data-bgrepeat="no-repeat" data-bgparallax="3" style="height: 300px;"  class="" data-no-retina>

                        </li>
                 
            </ul>
        </div>
    </div>Revolution Slider end
</section>-->


<div id="home-page-slider-image" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        $sliderimage = Slider::all();
        foreach ($sliderimage as $key => $slideimg) {
            if ($key == 0) {
                ?>
                <div class="item active">
                    <img src="upload/slider/<?php echo $slideimg['image_name']; ?>" alt="Home Slider 1">
                    <!--                    <div class="carousel-caption content-slider">
                                            <div class="container">
                                                <h2><?php echo $slider['title']; ?></h2>
                                                <p><?php echo $slider['description']; ?> </p>
                                                <p><a href="tour_packages.php?id=<?php echo $slider['id']; ?>" class="btn btn-slider">VIEW TOURS </a></p>
                                            </div>
                                        </div>-->
                </div>
                <?php
            } else {
                ?> 
                <div class="item">
                    <img src="upload/slider/<?php echo $slideimg['image_name']; ?>" alt="Home Slider 1">
                    <!--                    <div class="carousel-caption content-slider">
                                            <div class="container">
                                                <h2><?php echo $slider['title']; ?></h2>
                                                <p><?php echo $slider['description']; ?> </p>
                                                <p><a href="tour_packages.php?id=<?php echo $slider['id']; ?>" class="btn btn-slider">VIEW TOURS </a></p>
                                            </div>
                                        </div>-->
                </div>
                <?php
            }
        }
        ?>

    </div>
    <!-- Controls -->
    <a class="carousel-control-left" href="#home-page-slider-image" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-right" href="#home-page-slider-image" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>