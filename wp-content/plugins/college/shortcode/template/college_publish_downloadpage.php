<div class="container demo issue-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Publish Paper Downloader List</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="datatable  table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Issue Name</th>
                        <th>Paper Title</th>
                        <th>Author</th>
                        <th>Page No</th>
                        <th>Downloaded at</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach ($publishPaperDownload as $key => $value) { ?>
                        <tr>
                        <?php $user_info = get_userdata($value['user_id']);?>
                        <td><?php echo $user_info->user_nicename;?></td>
                        <td><?php echo $user_info->user_email;?></td>
                        <td><?php echo $issue[$journalIssuePublish[$value['paper_id']]['issue_id']]?></td>
                        <td><?php echo $journalIssuePublish[$value['paper_id']]['paper_title'];?></td>
                        <td><?php echo $journalIssuePublish[$value['paper_id']]['author'];?></td>
                        <td><?php echo $journalIssuePublish[$value['paper_id']]['page_no'];?></td>
                        <td><?php echo $value['created_at'];?></td>
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