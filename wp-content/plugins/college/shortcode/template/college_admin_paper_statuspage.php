<div class="container issues_listpage paperstatuspage  demo journal-listpagetable">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Paper Status</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                 <table class="datatable  table table-striped table-bordered table-list">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Issue</th>
                            <th>Status(Highlighted)</th>
                        </tr> 
                    </thead>
                        <tbody>
                            <?php foreach ($authorPaperList as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $user[$value['user_id']];?></td>
                                    <td><?php echo $issue[$value['issue_id']];?></td>
                                    <td><span class="<?php if($value['status']=="recieved"){echo 'btn-default';}?>">New </span><span class="<?php if($value['status']=="accept"){echo 'btn-success';}?>">Accept </span><span class="<?php if($value['status']=="reject"){echo 'btn-danger';}?>">Reject </span><span class="<?php if($value['status']=="modify"){echo 'btn-info';}?>">Modify </span><span class="<?php if($value['status']=="resubmitted"){echo 'btn-warning';}?>">Resubmitted </span><span class="<?php if($value['status']=="transactionSubmitted"){echo 'btn-primary';}?>">Transaction Submitted </span><span class="<?php if($value['status']=="paid"){echo 'btn-magick';}?>">Paid </span><span class="<?php if($value['status']=="published"){echo 'btn-pressure';}?>">Published</span><span class="<?php if($value['status']=="reviewed"){echo 'btn-review';}?>">Review</span></td>
                                </tr>
                            <?php } ?>  
                        </tbody>
                </table>
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