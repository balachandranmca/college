<div class="container demo user-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Users List</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="datatable  table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>   
                    </tr> 
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
                  <tfoot>
                        <tr>
                            <th>Users List Name</th>
                            <th>Users List Phone No</th>
                            <th>Users List Email</th>
                            <th>Users List Role</th>
                            <th>Users List Status</th>  
                        </tr>
                  </tfoot>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).on('click', '.user_status', function(e){
        var user_status = jQuery(this).val();
        var message = "Are you enable this user ?"
        if(user_status=="1"){
            message = "Are you disable this user ?";
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
        else{
           return false;
        }
    });
</script>