<div class="container journal-editors-listpage">
    <div class="row">
        <div class="col-md-12 content">
            <div class="row">
                <div class="col-md-12 create-new-btn">
                    <div class="pull-right">
                        <a href="<?php echo get_buzz_url('college_journal_editor');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-12 content-table">
                    <div class="table-responsive journal_editor-listpage">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $user) { ?>
                                <tr>
                                    <td><?php echo $user->data->user_nicename;?></td>
                                    <td><?php echo get_usermeta( $user->ID, 'phone_no', true ); ?></td>
                                    <td><?php echo $user->data->user_email;?></td>
                                    <td><?php echo $user->roles[0];?></td>
                                   
                                    <td><input type="radio" data-id="<?php echo $user->ID;?>" class = "user_status" name="status<?php echo $user->ID;?>" value="0" <?php if(get_usermeta( $user->ID, 'is_disable', true ) == "0"){echo " checked";}?>> Enabled<br>
                                        <input type="radio" data-id="<?php echo $user->ID;?>" class = "user_status" name="status<?php echo $user->ID;?>" value="1"<?php if(get_usermeta( $user->ID, 'is_disable', true ) == "1"){echo " checked";}?>> Disabled<br></td>                               
                                </tr>
                                <?php }  ?>
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
    jQuery(document).on('click', '.user_status', function(e){
        var user_status = jQuery(this).val();
        var message = "Are you disable this user ?"
        if(user_status=="1"){
            message = "Are you enable this user ?";
        }
        var result = confirm(message);
        if(result) {
            var user_id = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_user_list_status',
                    'user_id' : user_id,
                    'user_status' : user_status,
                },
                success:function(response) {
                    window.location = "<?php echo get_buzz_url('college_user_list');?>";
                }
            });
        }
    });
</script>