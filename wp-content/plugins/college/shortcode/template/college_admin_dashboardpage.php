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
        <div class="col-md-offset-1 col-xs-12 col-md-12">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=recieved" class="btn btn-default btn-lg" role="button"><span><?php echo $recieved;?></span> <br/>Newly Recieved Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=review" class="btn btn-review btn-lg" role="button"><span><?php echo $review;?></span> <br/>Reviewing Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=accept" class="btn btn-success btn-lg" role="button"><span><?php echo $accept;?></span> <br/>Accepted Paper</a>
            </div>
        </div>
        <div class="col-md-offset-1 col-xs-12 col-md-12">
            <div class="col-xs-12 col-sm-3 col-md-3">
               <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=reject" class="btn btn-danger btn-lg" role="button"><span><?php echo $reject;?></span> <br/> Rejected Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=modify" class="btn btn-info btn-lg" role="button"><span><?php echo $modify;?></span> <br/>Modified Paper</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=resubmitted" class="btn btn-warning btn-lg" role="button"><span><?php echo $resubmitted;?></span> <br/>Resubmitted Paper</a>
            </div> 
        </div>
        <div class="col-md-offset-1 col-xs-12 col-md-12">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_buzz_url('college_author_paper_list')?>?key=transactionSubmitted" class="btn btn-primary btn-lg" role="button"><span><?php echo $transactionSubmitted;?></span> <br/>Transaction Submitted Paper</a>
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

<div class="container issues_listpage paperstatuspage">
    <div class="row">
        <div class="col-md-12 content">
            <div class="row" style="margin-top:20px;">
                <div class="col-md-12 content-table">
                    <div class="table-responsive slider-listpage">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>User Name</th>
                                <th>Issue</th>
                                <th>Status(Highlighted)</th>
                            </thead>
                            <tbody>
                            <?php foreach ($authorPaperList as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $user[$value['user_id']];?></td>
                                    <td><?php echo $issue[$value['issue_id']];?></td>
                                    <td><span class="<?php if($value['status']=="recieved"){echo 'btn-default';}?>">New </span><span class="<?php if($value['status']=="review"){echo 'btn-review';}?>">Review</span><span class="<?php if($value['status']=="accept"){echo 'btn-success';}?>">Accept </span><span class="<?php if($value['status']=="reject"){echo 'btn-danger';}?>">Reject </span><span class="<?php if($value['status']=="modify"){echo 'btn-info';}?>">Modify </span><span class="<?php if($value['status']=="resubmitted"){echo 'btn-warning';}?>">Resubmitted </span><span class="<?php if($value['status']=="transactionSubmitted"){echo 'btn-primary';}?>">Transaction Submitted </span><span class="<?php if($value['status']=="paid"){echo 'btn-magick';}?>">Paid </span><span class="<?php if($value['status']=="published"){echo 'btn-pressure';}?>">Published</span></td>
                                </tr>
                            <?php } ?>  
                            </tbody>
                        </table>
                            <div class="clearfix"></div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
     jQuery(document).on('click', '.editPublish', function(e){
        e.preventDefault();
        var result = confirm("Are you sure to Publish?");
        if(result) {
            var issueid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_issue_publish',
                    'issueid' : issueid,
                },
                success:function(response) {
                    location.reload();
                }
            });
        }
     });
     jQuery(document).on('click', '.delete', function(e){
        e.preventDefault();
        var result = confirm("Are you sure to delete?");
        if(result) {
            var issueid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_issue_delete',
                    'issueid' : issueid,
                },
                success:function(response) {
                    window.location = "<?php echo get_buzz_url('college_issue_list');?>";
                }
            });
        }
     });
</script>
<style>
    span.active-status{
        color: red;
    }
</style>
