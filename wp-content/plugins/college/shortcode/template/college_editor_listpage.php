<div class="container editors-listpage">
    <div class="row">
        <div class="col-md-12 content">
            <div class="row" style="margin-top:20px;">
                <div class="col-md-12 content-table">
                    <div class="table-responsive slider-listpage">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Phone No</th>
                                <th>Email Id</th>
                                <th>File</th>
                                <th>Verify</th>
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
                                    <td><img src="<?php echo WP_BAG_PL_IMAGE.'tick.png';?>"></td>
                                <?php }else { ?> 
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="edit btn btn-primary btn-xs" data-title="Edit" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <?php } ?>
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
     jQuery(document).on('click', '.edit', function(e){
        e.preventDefault();
        var result = 1;
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