<section class="container login-page">
    <div class="row col-md-12">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 loginbox">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6 panel-title">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6 panel-title seprator">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr class="hr-line">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form"  class="form form-signup" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-lg btn-primary btn-block
" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div id="Validationerror" class='hide-error' role="alert">The username or password is incorrect.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="<?php echo site_url().'/wp-login.php?action=lostpassword';?>" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" class="form form-signup" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" name="username" id="uname" tabindex="1" class="form-control" placeholder="Username" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                            <input type="number" name="phone no" id="phoneno" tabindex="1" class="form-control" placeholder="Phone no" value="" required min="1">
                                        </div>
                                    </div>
                                    <div class="form-inline required">
                                        <div class="form-group has-role">
                                            <label class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" name="user_role" value="user" checked/>
                                                </span>
                                                <div class="form-control form-control-static">
                                                    User
                                                </div>
                                                <span class="glyphicon form-control-feedback "></span>
                                            </label>
                                        </div>
                                        <div class="form-group has-role">
                                            <label class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" name="user_role" value="author" />
                                                </span>
                                                <div class="form-control form-control-static">
                                                    Author
                                                </div>
                                                <span class="glyphicon form-control-feedback "></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-lg btn-primary btn-block" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
jQuery(function() {
    jQuery('#login-form-link').click(function(e) {
		jQuery("#login-form").delay(100).fadeIn(100);
 		jQuery("#register-form").fadeOut(100);
		jQuery('#register-form-link').removeClass('active');
		jQuery(this).addClass('active');
		e.preventDefault();
	});
	jQuery('#register-form-link').click(function(e) {
		jQuery("#register-form").delay(100).fadeIn(100);
 		jQuery("#login-form").fadeOut(100);
		jQuery('#login-form-link').removeClass('active');
		jQuery(this).addClass('active');
		e.preventDefault();
	});
    jQuery( "#login-form" ).submit(function( event ) {
        event.preventDefault();
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                'action':'college_login',
                'username' : jQuery('#username').val(),
                'password' : jQuery('#password').val(),
                'aft_login' : "<?php echo $_GET['aft_login'];?>",
            },
            success:function(response) {
                
                var response = jQuery.parseJSON(response);
                console.log(response);
                if (response.success){
                    if(response.userid){
                        setSession();
                    }
                    window.location.replace(response.url);
                }else if(response.disable){
                    jQuery('#Validationerror').removeClass("hide-error").html('Sorry! Your Account has been disabled.Please contact Admin');
                }else{
                    jQuery('#Validationerror').removeClass("hide-error").html('The username or password is incorrect.');
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });  

                
    });
    jQuery( "#register-form" ).submit(function( event ) {
        event.preventDefault();
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                'action':'college_registration',
                'username' : jQuery('#uname').val(),
                'email' : jQuery('#email').val(),
                'phoneno' : jQuery('#phoneno').val(),
                'role' : jQuery('input[name=user_role]:checked', '#register-form').val()
            },
            success:function(response) {
                var response = jQuery.parseJSON(response);
                if (response.success){
                    alert("Successfully Registered. New Password sent to your Registerd Email");
                    window.location.replace(response.url);
                }else if(response){
                    alert("Already UserEmail Exist !!!");
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });  

                
    });
   jQuery("#body").addClass("login-background");
});
function setSession() {
    <?php session_start(); ?>
}
</script>
<style>
.hide-error{
    display:none;
}
</style>