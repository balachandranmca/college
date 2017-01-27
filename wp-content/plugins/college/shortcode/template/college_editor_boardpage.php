<!-- Page title -->
<div class="title text-center wow fadeIn" data-wow-duration="4500ms">
    <h2>Editorial <span class="color">Board</span></h2>
    <div class="border"></div>
</div>
<!-- /Page title -->

<!-- /Sub Heading -->
 <div class="container sub-heading">
    <div class="row">
        <div class="col-md-12 header">
            <h2>Editor-in-Cheif</h2>
        </div>
    </div>
</div>
<!-- /Sub Heading -->

<section class="main-section team editorial-board" id="team">
    <!--main-section team-start-->
    <div class="container">
        <div class="cheif-editor">
            <?php foreach($journal_editor as $key => $value) { ?>
                <?php if($value['type'] == 1) { $value['image'] = json_decode($value['image'], 1); ?>
                    <div class="team-leader-block clearfix">
                        <div class="team-leader-box">
                            <div class="team-leader wow fadeInDown delay-03s">
                                <div class="team-leader-shadow">
                                    <a href="#"></a>
                                </div>
                                <img src="<?php echo $value['image']['url']?>" alt="">
                                <ul>
                                    <li>
                                        <a href="#" class="fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa-pinterest"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="Profile-details">
                            <h3 class="wow fadeInDown delay-03s"><?php echo $value['name'];?></h3>
                            <?php if( $value['qualification']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['qualification'];?></span><br>
                            <?php } ?>
                            <?php if($value['job_nature']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['job_nature'];?></span><br>
                            <?php } ?>
                            <?php if($value['experience']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['experience'];?></span><br>
                            <?php } ?>
                            <?php if($value['department']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['department'];?></span><br>
                            <?php } ?>
                            <?php if($value['place']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['place'];?></span><br>
                            <?php } ?>
                            <?php if($value['city_country']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['city_country'];?></span><br>
                            <?php } ?>
                            <?php if($value['emailid']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['emailid'];?></span><br>
                            <?php } ?>
                            <?php if($value['mobile_no']) { ?>
                                <span class="wow fadeInDown delay-03s"><?php echo $value['mobile_no'];?></span><br>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<!--main-section team-end-->

<!-- /Sub Heading -->
 <div class="container sub-heading">
    <div class="row">
        <div class="col-md-12 header">
            <h2>Editors</h2>
        </div>
    </div>
</div>
<!-- /Sub Heading -->

<section class="editors-civil">
    <div class="team-container">
        <div class="row">
            <?php foreach($journal_editor as $key => $value) { ?>
                <?php if($value['type'] == 2) { $value['image'] = json_decode($value['image'], 1); ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="team-member">
                            <figure>
                                <img width="264" height="230" src="<?php echo $value['image']['url']?>" alt="Team Member">
                                <figcaption>
                                    <p class="member-name"><?php echo $value['name'];?> </p>
                                    <?php if( $value['qualification']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['qualification'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['job_nature']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['job_nature'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['experience']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['experience'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['department']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['department'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['place']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['place'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['city_country']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['city_country'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['emailid']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['emailid'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['mobile_no']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['mobile_no'];?></span><br>
                                    <?php } ?>
                                    <!-- /.designation -->
                                </figcaption>
                            </figure>
                            <div class="social-btn-container">
                                <div class="team-socail-btn">
                                    <span class="social-btn-box facebook-btn-container">
                                                        <a href="#" class="facebook-btn">
                                                            <i class="fa fa-facebook"></i>
                                                        </a><!-- /.facebook-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box twitter-btn-container">
                                                        <a href="#" class="twitter-btn">
                                                            <i class="fa fa-twitter"></i>
                                                        </a><!-- /.twitter-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box linkedin-btn-container">
                                                        <a href="#" class="linkedin-btn">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a><!-- /.linkedin-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box github-btn-container">
                                                        <a href="#" class="github-btn">
                                                            <i class="fa fa-github-alt"></i>
                                                        </a><!-- /.github-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                </div>
                                <!-- /.team-socail-btn -->
                            </div>
                            <!-- /.social-btn-container -->
                        </div>
                        <!-- /.team-member -->
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
<!-- /.team-container -->
</section>

<!-- /Sub Heading -->
 <div class="container sub-heading">
    <div class="row">
        <div class="col-md-12 header">
            <h2>Associate Editors</h2>
        </div>
    </div>
</div>
<!-- /Sub Heading -->

<section class="editors-civil">
    <div class="team-container">
        <div class="row">
            <?php foreach($journal_editor as $key => $value) { ?>
                <?php if($value['type'] == 3) { $value['image'] = json_decode($value['image'], 1); ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="team-member">
                            <figure>
                                <img width="264" height="230" src="<?php echo $value['image']['url']?>" alt="Team Member">
                                <figcaption>
                                    <p class="member-name"><?php echo $value['name'];?> </p>
                                    <?php if( $value['qualification']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['qualification'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['job_nature']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['job_nature'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['experience']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['experience'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['department']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['department'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['place']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['place'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['city_country']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['city_country'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['emailid']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['emailid'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['mobile_no']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['mobile_no'];?></span><br>
                                    <?php } ?>
                                    <!-- /.designation -->
                                </figcaption>
                            </figure>
                            <div class="social-btn-container">
                                <div class="team-socail-btn">
                                    <span class="social-btn-box facebook-btn-container">
                                                        <a href="#" class="facebook-btn">
                                                            <i class="fa fa-facebook"></i>
                                                        </a><!-- /.facebook-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box twitter-btn-container">
                                                        <a href="#" class="twitter-btn">
                                                            <i class="fa fa-twitter"></i>
                                                        </a><!-- /.twitter-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box linkedin-btn-container">
                                                        <a href="#" class="linkedin-btn">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a><!-- /.linkedin-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box github-btn-container">
                                                        <a href="#" class="github-btn">
                                                            <i class="fa fa-github-alt"></i>
                                                        </a><!-- /.github-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                </div>
                                <!-- /.team-socail-btn -->
                            </div>
                            <!-- /.social-btn-container -->
                        </div>
                        <!-- /.team-member -->
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
<!-- /.team-container -->
</section>

<!-- /Sub Heading -->
 <div class="container sub-heading">
    <div class="row">
        <div class="col-md-12 header">
            <h2>Publication In-Charge</h2>
        </div>
    </div>
</div>
<!-- /Sub Heading -->

<section class="editors-civil">
    <div class="team-container">
        <div class="row">
            <?php foreach($journal_editor as $key => $value) { ?>
                <?php if($value['type'] == 4) { $value['image'] = json_decode($value['image'], 1); ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="team-member">
                            <figure>
                                <img width="264" height="230" src="<?php echo $value['image']['url']?>" alt="Team Member">
                                <figcaption>
                                    <p class="member-name"><?php echo $value['name'];?> </p>
                                    <?php if( $value['qualification']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['qualification'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['job_nature']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['job_nature'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['experience']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['experience'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['department']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['department'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['place']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['place'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['city_country']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['city_country'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['emailid']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['emailid'];?></span><br>
                                    <?php } ?>
                                    <?php if($value['mobile_no']) { ?>
                                        <span class="wow fadeInDown delay-03s"><?php echo $value['mobile_no'];?></span><br>
                                    <?php } ?>
                                    <!-- /.designation -->
                                </figcaption>
                            </figure>
                            <div class="social-btn-container">
                                <div class="team-socail-btn">
                                    <span class="social-btn-box facebook-btn-container">
                                                        <a href="#" class="facebook-btn">
                                                            <i class="fa fa-facebook"></i>
                                                        </a><!-- /.facebook-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box twitter-btn-container">
                                                        <a href="#" class="twitter-btn">
                                                            <i class="fa fa-twitter"></i>
                                                        </a><!-- /.twitter-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box linkedin-btn-container">
                                                        <a href="#" class="linkedin-btn">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a><!-- /.linkedin-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                    <span class="social-btn-box github-btn-container">
                                                        <a href="#" class="github-btn">
                                                            <i class="fa fa-github-alt"></i>
                                                        </a><!-- /.github-btn -->
                                                    </span>
                                    <!-- /.social-btn-box -->
                                </div>
                                <!-- /.team-socail-btn -->
                            </div>
                            <!-- /.social-btn-container -->
                        </div>
                        <!-- /.team-member -->
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
<!-- /.team-container -->
</section>