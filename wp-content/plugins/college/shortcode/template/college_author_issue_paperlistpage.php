<div class="container issues_listpage">
    <div class="row">
        <div class="col-md-12 content">
            <div class="row" style="margin-top:20px;">
                <div class="col-md-12 content-table">
                    <div class="table-responsive slider-listpage">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Issue</th>
                                <th>Status</th>
                                <th>Details</th>
                            </thead>
                            <tbody>
                            <?php foreach ($authorPaperList as $key => $value) { ?>
                                <tr>
                                <?php if($user_role=="reviewer") { ?>
                                    <td><?php echo $issue[$value['author_issue_paper_id']];?></td>
                                    <td><?php echo $value['status'];?></td>
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