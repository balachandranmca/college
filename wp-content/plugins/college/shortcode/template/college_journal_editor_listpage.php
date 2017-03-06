<div class="container volume-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Journal Editors List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                      <a href="<?php echo get_buzz_url('college_journal_editor');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                       <th>Image</th>
                        <th>Journal</th>
                        <th>Editor Type</th>
                        <th>Edit</th>
                        <th>Delete</th>   
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach ($journal_editorList as $key => $value) { ?>
                                <tr>
                                <?php 
                                   $image =  json_decode($value['image'],1);
                                ?>
                                <td><img class="journal_editor-list-img slider-list-img" src="<?php echo $image['url'];?>" alt="List-img"></td>
                                <td><?php echo $journal[$value['journal_id']];?></td>
                                <td><?php echo get_editor_type($value['type']);?></td>
                                <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php echo get_buzz_url('college_journal_editor').'?id='.$value['id'];?>"><button class="btn btn-primary" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
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
     jQuery(document).on('click', '.delete', function(e){
        e.preventDefault();
        var result = confirm("Are you sure to delete?");
        if(result) {
            var journal_editorid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_journal_editor_delete',
                    'journal_editorid' : journal_editorid,
                },
                success:function(response) {
                    window.location = "<?php echo get_buzz_url('college_journal_editor_list');?>";
                }
            });
        }
     });
</script>