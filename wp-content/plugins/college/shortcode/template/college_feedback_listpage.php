<div class="container demo issue-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Feedback List</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="datatable  table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Comments</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach ($feedback as $key => $value) { ?>
                        <tr>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['comments'];?></td>
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