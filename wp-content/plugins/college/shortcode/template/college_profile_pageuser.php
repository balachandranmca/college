<div class="container">
    <div class="col-md-12 col-sm-12  col-xs-12">
       <br><br>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">User Profile</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Change Password</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-9">
                            <div class="form-login">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"> User Name </label>
                                <div class="col-md-9">
                                    <label class="control-label" for="name"><?php echo $user->data->user_nicename;?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"> User Email </label>
                                <div class="col-md-9">
                                    <label class="control-label" for="name"><?php echo $user->data->user_login;?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Phone Number </label>
                                <div class="col-md-9">
                                    <label class="control-label" for="name"><?php echo get_user_meta($user->data->ID, 'phone_no',true);?></label>
                                </div>
                            </div>
                            <div class="wrapper">
                            </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="tab2">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-3">
                            <div class="form-login">
                            <h4>Change Your Password</h4>
                            <input type="text" id="oldPassword" class="form-control input-sm chat-input" placeholder="Old Password" />
                            </br>
                            <input type="text" id="newPassword" class="form-control input-sm chat-input" placeholder="New Password" />
                            </br>
                            <div class="wrapper">
                            <span class="group-btn">     
                                <a href="#" class="btn btn-primary btn-md">Submit <i class="fa fa-sign-in"></i></a>
                            </span>
                            </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="tab3">
                <h3>This is tab 3</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).on('click', '.group-btn', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#newPassword').val()=="" || jQuery('#oldPassword').val()==""){
            alert('Please fill password');
            noerrorFlag=0;
        }
        if(noerrorFlag){
            var fd = new FormData();
            var oldPassword = jQuery('#oldPassword').val();
            var newPassword = jQuery('#newPassword').val();
            fd.append("oldPassword", oldPassword);
            fd.append("newPassword", newPassword);
            fd.append('action', 'college_change_password');
            jQuery('#loader-overlay').show();
            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    jQuery('#loader-overlay').hide();
                    alert(response);
                    window.location="<?php echo site_url();?>";
                }
            });
        }
        else{
            jQuery('#errorMsg').removeClass('hide-error');
        }
    });
</script>
