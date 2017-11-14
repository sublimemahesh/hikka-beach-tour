
<section class="main-slider style3">
    <div id="rev_slider_476_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="christmas-snow-scene" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
        <div id="rev_slider_476_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
            <ul>	
                <?php
                $sliderimage = Slider::all();
                foreach ($sliderimage as $key => $slideimg) {
                    if ($key == 0) {
                        ?>   <!-- SLIDE  -->
                        <li data-index="rs-1648" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="100"  data-thumb="upload/slider/<?php echo $slider['image_name']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="upload/slider/<?php echo $slideimg['image_name']; ?>"  alt="" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>

                        </li>
                        <!-- SLIDE  -->
                        <?php
                    } else {
                        ?>
                        <li data-index="rs-1648" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="100"  data-thumb="upload/slider/<?php echo $slider['image_name']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="upload/slider/<?php echo $slideimg['image_name']; ?>"  alt="" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>

                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div><!--Revolution Slider end-->
</section>
