<?php $this->load->view("includes/frontend/header"); ?>
<?php $this->load->view("includes/frontend/navbar"); ?>
<div class="clearfix margin_top12"></div>

<div class="container">

    <div class="one_half">

        <div id="owl-demo2" class="owl-carousel">

            <div><img src="http://placehold.it/562x330" alt="" class="rimg"></div>

            <div><img src="http://placehold.it/562x330" alt="" class="rimg"></div>

            <div><img src="http://placehold.it/562x330" alt="" class="rimg"></div>

        </div>

    </div><!-- end section -->

    <div class="one_half last">

        <div class="stcode_title5">
            <h3 class="nmb"><strong><?=$page_service['name_th']?></strong></h3>
        </div>

        <p> <?=$page_service['detail_th']?></p>

        <div class="clearfix marb12"></div>

    </div><!-- end section -->

</div><!-- end all sections -->

<div class="clearfix margin_top12"></div>

<?php $this->load->view("includes/frontend/footer"); ?>
