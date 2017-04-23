<!--<section class="aboutus-page">
    <div class="row">
        <div class="col-md-6">
            <div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=assigned"><?php echo $assigned;?> Newly Assigned </a></div>
        </div>
        <div class="col-md-6">
            <div><div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=reviewed"><?php echo $reviewed;?> Already Reviewed </a></div></div>
        </div>
    </div>
</section>-->

<div class="container reviewer-dashboardblock">
    <div class="row admin-dashboard">
        <div class="col-xs-12 col-md-12">
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=assigned" class="btn btn-default btn-lg" role="button"><span><?php echo $assigned;?></span> <br/>Newly Assigned</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=reviewed" class="btn btn-warning btn-lg" role="button"><span><?php echo $reviewed;?></span> <br/>Already Reviewed</a>
            </div>
        </div>
    </div>
</div>
