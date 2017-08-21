
<footer class="footer6 lesstp">

    <div class="container">

        <div class="column1 animate" data-anim-type="fadeIn" data-anim-delay="100">

            <h3>About Us</h3>
            <p><?= strip_tags($settings['vision_th'])?></p>

        </div><!-- end section -->

        <div class="column2 animate" data-anim-type="fadeIn" data-anim-delay="150">

            <h3>More Services</h3>

            <ul>
                <li><a href="#">Our History</a></li>
                <li><a href="#">Professionals</a></li>
                <li><a href="#">Our Development</a></li>
                <li><a href="#">Partnership With Us</a></li>
                <li><a href="#">Company Carreer</a></li>
                <li><a href="#">New Technology</a></li>
                <li><a href="#">Client Testimonials</a></li>
            </ul>

            <ul>
                <li><a href="#">Our History</a></li>
                <li><a href="#">Professionals</a></li>
                <li><a href="#">Our Development</a></li>
                <li><a href="#">Partnership With Us</a></li>
                <li><a href="#">Company Carreer</a></li>
                <li><a href="#">New Technology</a></li>
                <li><a href="#">Client Testimonials</a></li>
            </ul>

        </div><!-- end section -->


        <div class="column1 animate" data-anim-type="fadeIn" data-anim-delay="200">

            <h3>Our Clients</h3>

            <ul class="clogos">
                <li><img src="http://placehold.it/175x40" alt="" /></li>
                <li><img src="http://placehold.it/175x40" alt="" /></li>
                <li><img src="http://placehold.it/175x40" alt="" /></li>
                <li><img src="http://placehold.it/175x40" alt="" /></li>
            </ul>

        </div><!-- end section -->

        <div class="column1 last animate" data-anim-type="fadeIn" data-anim-delay="250">

            <h3>Get Connected</h3>

            <ul class="footer_social_links3 styltwo">
                <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?=$settings['facebook_link']?>"><i class="fa fa-facebook"></i></a></li>
                <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?=$settings['twitter_link']?>"><i class="fa fa-twitter"></i></a></li>
                <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?=$settings['instagram_link']?>"><i class="fa fa-instagram"></i></a></li>
                <li class="animate zoomIn" data-anim-type="zoomIn" data-anim-delay="300"><a href="<?=$settings['line_id']?>"><i class="fa fa-line-chart"></i></a></li>

            </ul>

            <div class="clearfix margin_top2"></div>

            <img src="<?= base_url('assets/frontend/images/logo_company.png')?>" alt="" />

        </div><!-- end section -->

    </div><!-- end footer -->

    <div class="clearfix"></div>

    <div class="copyright_info4">
        <div class="container">

            <div class="clearfix divider_dashed10"></div>

            <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="200">

                Copyright © 2017 ControlLabMedical.com All rights reserved.

            </div>

            <div class="one_half last animate" data-anim-type="fadeInLeft" data-anim-delay="200">

                <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>

            </div>

        </div>
    </div><!-- end copyright info -->

</footer>

<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

</div>


<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="<?= base_url('assets/frontend/js/universal/jquery.js')?>"></script>
<script src="<?= base_url('assets/frontend/js/style-switcher/styleselector.js')?>"></script>
<script src="<?= base_url('assets/frontend/js/animations/js/animations.min.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/frontend/js/mainmenu/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/frontend/js/mainmenu/customeUI.js')?>"></script>
<script src="<?= base_url('assets/frontend/js/masterslider/jquery.easing.min.js')?>"></script>
<script src="<?= base_url('assets/frontend/js/masterslider/masterslider.min.js')?>"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slideshow.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1400,    // slideshow standard width
            height:620,   // slideshow standard height
            space:0,
            speed:27,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"parallaxMask",
        });
    })(jQuery);
</script>
<script src="<?= base_url('assets/frontend/js/scrolltotop/totop.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/js/mainmenu/sticky.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/js/mainmenu/modernizr.custom.75180.js')?>"></script>

<script src="<?= base_url('assets/frontend/js/tabs/assets/js/responsive-tabs.min.js')?>" type="text/javascript"></script>

<script type="text/javascript" src="<?= base_url('assets/frontend/js/cubeportfolio/jquery.cubeportfolio.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/js/cubeportfolio/main8.js')?>"></script>
<script src="<?= base_url('assets/frontend/js/tabs2/index.js')?>"></script>
<script>
    $('.accordion, .tabs').TabsAccordion({
        hashWatch: true,
        pauseMedia: true,
        responsiveSwitch: 'tablist',
        saveState: sessionStorage,
    });
</script>
<script src="<?= base_url('assets/frontend/js/carouselowl/owl.carousel.js')?>"></script>

<script type="text/javascript" src="<?= base_url('assets/frontend/js/accordion/jquery.accordion.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/js/accordion/custom.js')?>"></script>

<script type="text/javascript" src="<?= base_url('assets/frontend/js/universal/custom.js')?>"></script>

</body>
</html>