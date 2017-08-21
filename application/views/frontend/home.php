<?php $this->load->view("includes/frontend/header"); ?>
<?php $this->load->view("includes/frontend/navbar"); ?>

<?php
//dump($slideshows)

?>
    <!-- slideshowider -->
    <div class="slidermar23">
        <div class="master-slider ms-skin-default" id="masterslider">
            <?php if (isset($slideshows) && count($slideshows) > 0): ?>
                <?php foreach ($slideshows as $item): ?>
                    <div class="ms-slide slide-1" data-delay="5">

                        <div class="slide-pattern"></div>

                        <img src="<?= base_url('uploads/slideshow/' . $item['file_name']) ?>" alt=""/>

                        <?php if($item['caption_th'] != null && $item['caption_th'] != ''): ?>

                            <?php $arr_splitted_text = splitTextByParagraphTag($item['caption_th']); ?>

                                <?php if(!empty($arr_splitted_text[0])): ?>
                                        <h3 class="ms-layer text17 white caps"
                                            style="left: 115px; top: 250px; font-family: Kanit-Light"
                                            data-type="text"
                                            data-effect="bottom(45)"
                                            data-duration="2000"
                                            data-delay="500"
                                            data-ease="easeOutExpo">
                                        <?= $arr_splitted_text[0] ?>
                                    </h3>
                                <?php endif; ?>

                                <?php for($i= 1; $i < count($arr_splitted_text); $i++): ?>
                                <h4 class="ms-layer text15 colored "
                                    style="left: 115px; top: 330px;font-family: Kanit-Light"
                                    data-type="text"
                                    data-effect="bottom(45)"
                                    data-duration="2000"
                                    data-delay="1000"
                                    data-ease="easeOutExpo">
                                        <?= $arr_splitted_text[$i] ?>
                                    </h4>
                            <?php endfor;?>
                        <?php endif;?>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- slideshowider -->


    <div class="clearfix"></div>

    <div class="featured_section134">
        <div class="container">

            <div class="one_third animate" data-anim-type="fadeIn" data-anim-delay="100">

                <i class="fa fa-stethoscope"></i>
                <h5>True Multiple Designes</h5>
                <p>Dolore magna aliquautenim ad minim veniam nostru exercitation uamco laboris minim veniam exercitation ullamco.</p>

            </div><!-- end section -->

            <div class="one_third animate" data-anim-type="fadeIn" data-anim-delay="200">

                <i class="fa fa-medkit"></i>
                <h5>Power Packed Themes</h5>
                <p>Dolore magna aliquautenim ad minim veniam nostru exercitation uamco laboris minim veniam exercitation ullamco.</p>

            </div><!-- end section -->

            <div class="one_third last animate" data-anim-type="fadeIn" data-anim-delay="300">

                <i class="fa fa-heart-o"></i>
                <h5>More Themes in Feature</h5>
                <p>Dolore magna aliquautenim ad minim veniam nostru exercitation uamco laboris minim veniam exercitation ullamco.</p>

            </div><!-- end section -->


            <div class="clearfix margin_top9"></div>

            <h1 class="title37 animate" data-anim-type="fadeInUp" data-anim-delay="300">Welcome to Central Lab Medical
                <em>Web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will many web sites still in
                    their recently with desktop publishing software like fancy various versions have evolved over the years.</em>
            </h1>

        </div>
    </div><!-- end featured section 134 -->

    <div class="clearfix margin_top1"></div>

    <div class="featured_section135">
        <div class="container">

            <h2 class="title21 white lessm"><strong>services we are providing</strong>
                <em>necessary making the true enerato on the many desktop packages web page
                    editors</em></h2>

            <?php if(isset($services)): ?>

                <?php foreach ($services as $key => $service): ?>

                    <?php ++$key;?>
                    <div class="one_third_less animate <?= ($key % 3 == 0)?'last':''?>" data-anim-type="fadeInUp" data-anim-delay="200">
                        <div class="box">

                            <div class="box-cnt"><img height="380" width="375" src="<?=base_url('uploads/article/'.$service['image_name'])?>" alt=""/></div>

                            <div class="box-details">
                                <h4><?=$service['name_th']?></h4>
                                <p><?=$service['description_th']?></p>
                                <a href="#">Read more</a>
                            </div>

                        </div>
                    </div><!-- end section -->

                    <?php if($key % 3 == 0): ?>
                        <div class="clearfix margin_top3"></div>
                    <?php endif;?>

                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div><!-- end featured section 135 -->





    <div class="clearfix"></div>

<?php $this->load->view("includes/frontend/footer"); ?>