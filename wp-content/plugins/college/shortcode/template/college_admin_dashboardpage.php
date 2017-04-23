<!--<section class="admin-dashboard aboutus-page">
    <div class="row">
        <div class="col-md-6">
            <div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=recieved"><?php echo $recieved;?> Newly Recieved Paper </a></div>
        </div>
        <div class="col-md-6">
            <div><div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=accept"><?php echo $accept;?> Accepted Paper </a></div></div>
        </div>
         <div class="col-md-6">
            <div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=reject"><?php echo $reject;?> Rejected Paper </a></div>
        </div>
        <div class="col-md-6">
            <div><div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=modify"><?php echo $modify;?> Modified Paper </a></div></div>
        </div>
         <div class="col-md-6">
            <div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=resubmitted"><?php echo $resubmitted;?> Resubmitted Paper </a></div>
        </div>
        <div class="col-md-6">
            <div><div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=transactionSubmitted"><?php echo $transactionSubmitted;?> Transaction Submitted Paper </a></div></div>
        </div>
         <div class="col-md-6">
            <div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=paid"><?php echo $paid;?> Paid Paper </a></div>
        </div>
        <div class="col-md-6">
            <div><div><a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=published"><?php echo $published;?> Published Paper </a></div></div>
        </div>
    </div>
</section>-->
<div class="container admin-dashboard-block">
    <div class="row admin-dashboard">
        <div class="col-xs-12 col-md-12">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=recieved" class="btn btn-default btn-lg" role="button"><span><?php echo $recieved;?></span> <br/>Newly Recieved Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=accept" class="btn btn-primary btn-lg" role="button"><span><?php echo $accept;?></span> <br/>Accepted Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
               <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=reject" class="btn btn-success btn-lg" role="button"><span><?php echo $reject;?></span> <br/> Rejected Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=modify" class="btn btn-info btn-lg" role="button"><span><?php echo $modify;?></span> <br/>Modified Paper</a>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=resubmitted" class="btn btn-warning btn-lg" role="button"><span><?php echo $resubmitted;?></span> <br/>Resubmitted Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=transactionSubmitted" class="btn btn-danger btn-lg" role="button"><span><?php echo $transactionSubmitted;?></span> <br/>Transaction Submitted Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=paid" class="btn btn-magick btn-lg" role="button"><span><?php echo $paid;?></span> <br/>Paid Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=published" class="btn btn-pressure btn-lg" role="button"><span><?php echo $published;?></span> <br/>Published Paper</a>
            </div>
        </div>
    </div>
</div>
