<div class="row col-md-12 login-page">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
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
                            <form id="login-form"  method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
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
                                                <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
                }else{
                    jQuery('#Validationerror').removeClass("hide-error");
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });  

                
    });
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