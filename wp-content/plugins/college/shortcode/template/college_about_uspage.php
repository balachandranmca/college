<section class="aboutus-page">
    <div class="row">
        <div class="col-md-6">
        <?php
            $about_us_image = get_option('about_us_image');
            if($about_us_image){
                $about_us_image = json_decode($about_us_image, 1); ?>
                <img class="slider-list-img" src="<?php echo $about_us_image['url'];?>"/>
            <?php } ?>
        </div>
        <div class="col-md-6 content">
            <h2>International Journal of Research in Engineering, Science and Technologies (IJRESTs)</h2>
            <p class="subcontent"><?php echo stripslashes(get_option('about_us'));?></p>
        </div>
    </div>
</section>
