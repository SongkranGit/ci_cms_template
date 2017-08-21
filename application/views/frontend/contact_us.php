<?php $this->load->view("includes/frontend/header"); ?>
<?php $this->load->view("includes/frontend/navbar"); ?>


<div class="content_fullwidth less2">
    <div class="container">

        <div class="one_half">

            <p><?=$settings['vision_th']?></p>
            <br/>

            <div class="cforms">


                <div id="form_status"></div>
                <form type="POST" id="gsr-contact" onSubmit="return valid_datas( this );">
                    <label class="label">Name <em>*</em></label>
                    <label class="input">
                        <input type="text" name="name" id="name">
                    </label>

                    <div class="clearfix"></div>

                    <label class="label">E-mail <em>*</em></label>
                    <label class="input">
                        <input type="email" name="email" id="email">
                    </label>

                    <!-- <div class="clearfix"></div>


                    <label class="label">Phone <em>*</em></label>
                    <label class="input">
                        <input type="text" name="phone" id="phone">
                    </label> -->

                    <div class="clearfix"></div>

                    <label class="label">Subject <em>*</em></label>
                    <label class="input">
                        <input type="text" name="subject" id="subject">
                    </label>

                    <div class="clearfix"></div>

                    <label class="label">Message <em>*</em></label>
                    <label class="textarea">
                        <textarea rows="5" name="message" id="message"></textarea>
                    </label>

                    <div class="clearfix"></div>
                    <input type="hidden" name="token" value="FsWga4&@f6aw"/>
                    <button type="submit" class="button">ติดต่อ</button>

                </form>


            </div>

        </div>

        <div class="one_half last">

            <div class="address_info">

                <h4><strong><?=$settings['website_name']?></strong> Address</h4>
                <ul>
                    <li>
                        <?=$settings['address_th']?><br/>
                        Telephone: <?=$settings['phone']?><br/>
                        FAX: <?=$settings['phone']?><br/>
                        E-mail: <a href="mailto:<?=$settings['email']?>"><?=$settings['email']?></a><br/>
                        Website: <a href="<?=base_url('home')?>">www.<?=$settings['website_name']?>.com</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <h4>Find the <strong>Address</strong></h4>
            <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="<?php echo $settings['map_url']?>"></iframe>
            <br/>
            <small>
                <a href="<?php echo $settings['map_url']?>" target="_blank">View
                    Larger Map</a>
            </small>
        </div>

    </div>
</div><!-- end content area -->

<div class="clearfix margin_top12"></div>

<?php $this->load->view("includes/frontend/footer"); ?>
