<div class="container editors-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Editors List</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email Id</th>
                        <th>File</th>
                        <th>Verify</th>   
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach ($editorList as $key => $value) { ?>
                                <tr>
                                <td><?php echo $value['name'];?></td>
                                <td><?php echo $value['phone_no'];?></td>
                                <td><?php echo $value['email_id'];?></td>
                                <?php $files =  json_decode($value['files'],1); ?>
                                <td><a href="<?php echo $files['url'];?>" download>Download the File</a></td>
                                <?php if($value['is_verified']){ ?>
                                    <td style="vertical-align: middle;"><img src="<?php echo WP_BAG_PL_IMAGE.'tick.png';?>"></td>
                                <?php }else { ?> 
                                    <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="edit btn btn-primary btn-xs" data-title="Edit" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <?php } ?>
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
     jQuery(document).on('click', '.edit', function(e){
        e.preventDefault();
        var result = confirm("Are you sure to Verify?");
        if(result) {
            var editorid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_editor_edit',
                    'editorid' : editorid,
                },
                success:function(response) {
                    location.reload();
                }
            });
        }
     });
     jQuery(document).on('click', '.download', function(e){
        e.preventDefault();
        var result = 1;
        if(result) {
            var editorid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_editor_download',
                    'editorid' : editorid,
                },
                success:function(response) {
                   
                }
            });
        }
     });
</script>