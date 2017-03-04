<div class="container issue-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Issues List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                      <a href="<?php echo get_buzz_url('college_issue');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>Issue No</th>
                        <th>Name</th>
                        <th>Volume</th>
                        <th>Journal</th>
                        <th>Uploaded Paper</th>
                        <th>Publish</th>
                        <th>Edit</th>
                        <th>Delete</th>   
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach ($issueList as $key => $value) { ?>
                        <tr>
                        <td><?php echo $value['issue_no'];?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $volume[$value['volume_id']];?></td>
                        <td><?php echo $journal[$value['journal_id']];?></td>
                        <?php $issue_ids = $value['id'];
                        $issue_id = "?issue_id=$issue_ids";?>
                        <td><a href="<?php echo get_buzz_url('college_jounal_issues_publish_list').$issue_id;?>">Paper List</a></td>
                        <?php if($value['published']){ ?>
                            <td style="vertical-align: middle;"><img src="<?php echo WP_BAG_PL_IMAGE.'tick.png';?>"></td>
                        <?php }else { ?> 
                            <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="editPublish btn btn-primary" data-title="Edit" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <?php } ?>
                        <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php echo get_buzz_url('college_issue').'?id='.$value['id'];?>"><button class="btn btn-primary" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                        <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="delete btn btn-danger" data-title="Delete" data-toggle="modal" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <?php } ?>  
                    </tbody>
                </table>
              </div>
              <div class="panel-footer">
                <div class="row">
                  
                  <div class="col col-xs-4">
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right" id="myPager">
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
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