<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:60px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a href="<?php echo get_buzz_url('college_journal');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-12">
                    <div class="table-responsive slider-listpage">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Name</th>
                                <th>ISSN NUMBER</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            <?php foreach ($journalList as $key => $value) { ?>
                                <tr>
                                <td><?php echo $value['name'];?></td>
                                <td><?php echo $value['issn_no'];?></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php echo get_buzz_url('college_journal').'?id='.$value['id'];?>"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="delete btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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