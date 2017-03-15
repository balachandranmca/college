<div class="container demo journal-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Journal List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                      <a href="<?php echo get_buzz_url('college_journal');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="datatable  table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>ISSN NUMBER</th>
                        <th>Edit</th>
                        <th>Delete</th>  
                    </tr> 
                  </thead>
                  <tbody>
                        <?php foreach ($journalList as $key => $value) { ?>
                            <tr>
                            <td><?php echo $value['name'];?></td>
                            <td><?php echo $value['issn_no'];?></td>
                            <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php echo get_buzz_url('college_journal').'?id='.$value['id'];?>"><button class="btn btn-primary" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                            <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="delete btn btn-danger" data-title="Delete" data-toggle="modal" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                        <?php } ?>
                    </tbody>
					<tfoot>
						<tr>
							<th>Journal Name</th>
							<th>Journal No</th>
							<th>Journal Edit</th>
							<th>Journal Delete</th>
						</tr>
					</tfoot>
                </table>
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
            var journalid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_journal_delete',
                    'journalid' : journalid,
                },
                success:function(response) {
                    window.location = "<?php echo get_buzz_url('college_journal_list');?>";
                }
            });
        }
     });
     
</script>