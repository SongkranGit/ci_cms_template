<?php $this->load->view("includes/frontend/header"); ?>
<?php $this->load->view("includes/frontend/navbar"); ?>

<div class="content_fullwidth less2">
    <div class="container">

        <div class="content_left">


            <?php if (isset($promotions)): ?>

                <?php foreach ($promotions as $promotion): ?>

                    <div class="blog_post">
                        <div class="blog_postcontent">
                            <h4 style="font-size: 24px; color: #1eb74c"><a href="#"><?= $promotion['name_th'] ?></a></h4>
                            <BR>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image_frame"><a href="#"><img class="imgframe4" src="<?= base_url('uploads/article/' . $promotion['image_name']) ?>" alt=""/></a></div>
                                    <ul class="post_meta_links">
                                        <li>โพสเมื่อ <?= Calendar::DateThai($promotion['published_date']) ?></li>
                                        <!--                                <li class="post_by"><i>by:</i> <a href="#">Adam Harrison</a></li>-->
                                    </ul>
                                </div>
                                <div class="col-md-6">

                                    <div class="clearfix"></div>
                                    <div class="margin_top1"></div>
                                    <p><?= $promotion['description_th'] ?> <a href="<?= base_url() ?>">read more...</a></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# end post -->

                    <div class="clearfix divider_line22"></div>

                <?php endforeach; ?>

            <?php endif; ?>

            <div>

                <div class="pagination">
                    <?php echo $pagination ?>
                </div><!-- /# end pagination -->

            </div>

        </div><!-- end content left side -->


        <!-- right sidebar starts -->
        <div class="right_sidebar">

            <div class="sidebar_widget">

                <div class="sidebar_title"><h4>Promotions</h4></div>
                <ul class="arrows_list1">
                    <li><a href="#"><i class="fa fa-caret-right"></i> Economics</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i> Social Media</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i> Economics</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i> Online Gaming</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i> Entertainment</a></li>
                </ul>

            </div><!-- end section -->

            <div class="margin_top4"></div>
            <div class="clearfix"></div>

            <div class="sidebar_widget">

                <div id="tabs">

                    <div class="tab_container">
                        <div id="tab1" class="tab_content">

                            <ul class="recent_posts_list">
                                <li>
                                    <span><a href="#"><img src="http://placehold.it/50x50" alt=""/></a></span>
                                    <a href="#">Publishing packag esanse web page editos</a>
                                    <i>May 13, 2015</i>
                                </li>
                                <li>
                                    <span><a href="#"><img src="http://placehold.it/50x50" alt=""/></a></span>
                                    <a href="#">Sublishing packag esanse web page editos</a>
                                    <i>May 12, 2015</i>
                                </li>
                                <li class="last">
                                    <span><a href="#"><img src="http://placehold.it/50x50" alt=""/></a></span>
                                    <a href="#">Mublishing packag esanse web page editos</a>
                                    <i>May 11, 2015</i>
                                </li>
                            </ul>

                        </div><!-- end popular posts -->

                    </div>

                </div>

            </div><!-- end section -->

            <div class="clearfix margin_top4"></div>

        </div><!-- end right sidebar -->


    </div>
</div><!-- end content area -->


<?php $this->load->view("includes/frontend/footer"); ?>
