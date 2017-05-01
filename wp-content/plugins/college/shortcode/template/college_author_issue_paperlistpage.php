<div class="container issues_listpage demo">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-12 col-sm-12 col-md-12">
                    <h3 class="panel-title">Author Issue Paper List</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive" style="padding: 15px;">
                <table class="datatable  table table-striped table-bordered table-list">
                    <thead>
                        <?php if($user_role == "administrator"){ ?>
                            <th>User Name</th>
                        <?php } ?>
                        <th>Issue</th>
                        <th>Status</th>
                        <th>Details</th>
                    </thead>
                    <tbody>
                        <?php if(!count($authorPaperList)) {?> 
                            <tr><td colspan="4" align="center"> No rows found</td></tr>
                        <?php } ?>
                        
                        <?php foreach ($authorPaperList as $key => $value) { ?>
                            <tr>
                            <?php if($user_role == "administrator"){ ?>
                                <td><?php echo $user[$value['user_id']];?></td>
                            <?php } ?>
                            <?php if($user_role=="reviewer") { ?>
                                <td><?php $issue_ids = $authorIssuePaper[$value['author_issue_paper_id']];echo $issue[$issue_ids];?></td>
                                <td><?php echo $value['status']==''?'---':$value['status'];?></td>
                                <?php $issue_ids = $value['author_issue_paper_id']; ?>
                            <?php } else { ?>
                                <td><?php echo $issue[$value['issue_id']];?></td>
                                <td><?php echo $value['status'];?></td>
                                <?php $issue_ids = $value['id']; ?>
                            <?php } ?>
                            <td><a href="<?php echo get_buzz_url('college_author_paper');?>?id=<?php echo $issue_ids;?>">View Details</a></td>
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