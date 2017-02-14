<div class="container slider-listpage">
    <div class="row">
        <div class="col-md-12 content">
            <?php if(!$publish_status) { ?>
            <div class="row">
                <div class="col-md-12 create-new-btn">
                    <div class="pull-right">
                        <a href="<?php echo get_buzz_url('college_jounal_issues_publish').'?issue_id='.$_GET['issue_id'];?>"><button type="button" class="btn btn-primary">Create New</button></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-12 content-table">
                    <div class="table-responsive slider-listpage">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Sno</th>
                                <th>Issue Id</th>
                                <th>Paper Title</th>
                                <th>Author</th>
                                <th>Page No</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            <?php foreach ($journal_issue_publish as $key => $value) { ?>
                                <tr>

                                <td><?php echo $value['sno'];?></td>
                                <td><?php echo $value['issue_id'];?></td>
                                <td><?php echo $value['paper_title'];?></td>
                                <td><?php echo $value['author'];?></td>
                                <td><?php echo $value['page_no'];?></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php echo get_buzz_url('college_jounal_issues_publish').'?id='.$value['id'].'&issue_id='.$_GET['issue_id'];?>"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
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
            var issueid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_journal_issue_publish_delete',
                    'journal_issue_publishid' : issueid,
                },
                success:function(response) {
                    window.location = "<?php echo get_buzz_url('college_jounal_issues_publish_list').'?issue_id='.$_GET['issue_id'];;?>";
                }
            });
        }
     });
</script>