
<?php $this->load->view("includes/frontend/header"); ?>
<?php $this->load->view("includes/frontend/navbar"); ?>

<div class="content_fullwidth">

    <div class="featured_section69">
        <div class="container">

            <div class="one_half">

                <h2 class="roboto caps">เกี่ยวกับเรา</h2>
                <div class="hsmline6"></div>
                <br />
                <p class="bigtfont gray">
                <?= (!empty($page) && $page != null)?$page['detail_th']:''?>
                </p>

            </div><!-- end section -->

            <div class="one_half last">
                <h2 class="roboto caps">วิสัยทัศน์</h2>
                <div class="hsmline6"></div>
                <br />
                <p class="bigtfont gray">
                    <?= (!empty($settings) && $settings != null)?$settings['vision_th']:''?>
                </p>

            </div><!-- end section -->

        </div>
    </div><!-- end featured section 69 -->


    <div class="clearfix margin_top12"></div>


    <div class="featured_section116">
        <div class="container">

            <div class="one_third animate" data-anim-type="fadeInLeft" data-anim-delay="100">
                <div class="box">

                    <img src="http://placehold.it/180x180" alt="" />
                    <br /><br />
                    <h3>Business Ideas</h3>
                    <p>Default model text and a search will many web sites versions have the years.</p>
                    <br />
                    <a href="#" class="button twentynine">Read More</a>

                </div>
            </div><!-- end section -->

            <div class="one_third animate" data-anim-type="fadeInUp" data-anim-delay="100">
                <div class="box">

                    <img src="http://placehold.it/180x180" alt="" />
                    <br /><br />
                    <h3>Marketing in the Way</h3>
                    <p>Default model text and a search will many web sites versions have the years.</p>
                    <br />
                    <a href="#" class="button twentynine">Read More</a>

                </div>
            </div><!-- end section -->

            <div class="one_third last animate" data-anim-type="fadeInRight" data-anim-delay="100">
                <div class="box">

                    <img src="http://placehold.it/180x180" alt="" />
                    <br /><br />
                    <h3>Get the Awards</h3>
                    <p>Default model text and a search will many web sites versions have the years.</p>
                    <br />
                    <a href="#" class="button twentynine">Read More</a>

                </div>
            </div><!-- end section -->

        </div>
    </div><!-- end featured section 116 -->


    <div class="clearfix margin_top12"></div>



</div><!-- end content area -->



<?php $this->load->view("includes/frontend/footer"); ?>