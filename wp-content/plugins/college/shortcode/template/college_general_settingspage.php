<?php $content = stripslashes(get_option('about_us'));
$editor_id = 'aboutus_frontend_editor';
$settings =   array(
    'wpautop' => true, // use wpautop?
    'media_buttons' => false, // show insert/upload button(s)
    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
);
$home_content = stripslashes(get_option('home_page_content'));
$home_editor_id = 'home_page_frontend_editor';
$home_settings =   array(
    'wpautop' => true, // use wpautop?
    'media_buttons' => false, // show insert/upload button(s)
    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
);
?>

<div class="container journal-creator">
	<div class="row">
    <div class="col-md-3">
        <img src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/settings.png" class="hidden-xs img-responsive center-block" alt="">
        
      </div><!--.col -->
      <div class="col-md-8 creator-content">
        <div class="">
          <form class="form-horizontal" action="" method="post" id="journal-form">
          <fieldset>
            <h3 class="text-center">General Settings</h3>
    
            
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label">Home Page Main Content</label>
              <div class="col-md-9">
                <?php wp_editor( $home_content, $home_editor_id, $home_settings = array() ); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">About Us</label>
              <div class="col-md-9">
                <?php wp_editor( $content, $editor_id, $settings = array() ); ?>
              </div>
            </div>

            <!-- Issn input-->
            <div class="form-group">
              <label class="col-md-3 control-label">Contact Us Address</label>
              <div class="col-md-9">
                <textarea rows="4" cols="50" class="form-control" id="contact_address"><?php echo get_option('contact_address');?></textarea>
              </div>
            </div>

            <!-- Color input-->
            <div class="form-group">
              <label class="col-md-3 control-label">Contact Mobile Number</label>
              <div class="col-md-9">
                <input id='contact_mobile'  class="form-control" value="<?php echo get_option('contact_mobile');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Contact Email Address</label>
              <div class="col-md-9">
                <input id='contact_email'  class="form-control" value="<?php echo get_option('contact_email');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Indian Standard Author</label>
              <div class="col-md-9">
                <input id='indian_standard'  class="form-control" value="<?php echo get_option('indian_standard');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Indian Editorial Board Member</label>
              <div class="col-md-9">
                <input id='indian_editor'  class="form-control" value="<?php echo get_option('indian_editor');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Indian Student</label>
              <div class="col-md-9">
                <input id='indian_student'  class="form-control" value="<?php echo get_option('indian_student');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Foriegn Standard Author</label>
              <div class="col-md-9">
                <input id='foriegn_standard'  class="form-control" value="<?php echo get_option('foriegn_standard');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Foriegn Editorial Board Member</label>
              <div class="col-md-9">
                <input id='foriegn_editor'  class="form-control" value="<?php echo get_option('foriegn_editor');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Foriegn Student</label>
              <div class="col-md-9">
                <input id='foriegn_student'  class="form-control" value="<?php echo get_option('foriegn_student');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Bank Name</label>
              <div class="col-md-9">
                <input id='bank_name'  class="form-control" value="<?php echo get_option('bank_name');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Bank Address</label>
              <div class="col-md-9">
                <input id='bank_address'  class="form-control" value="<?php echo get_option('bank_address');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Bank Code</label>
              <div class="col-md-9">
                <input id='bank_code'  class="form-control" value="<?php echo get_option('bank_code ');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Account Name</label>
              <div class="col-md-9">
                <textarea rows="4" cols="50" class="form-control" id="account_name"><?php echo get_option('account_name');?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Account No</label>
              <div class="col-md-9">
                <input id='account_no'  class="form-control" value="<?php echo get_option('account_no');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Account Type</label>
              <div class="col-md-9">
                <input id='account_type'  class="form-control" value="<?php echo get_option('account_type');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">IFSC</label>
              <div class="col-md-9">
                <input id='ifsc'  class="form-control" value="<?php echo get_option('ifsc');?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">MICR code</label>
              <div class="col-md-9">
                <input id='micr'  class="form-control" value="<?php echo get_option('micr');?>">
              </div>
            </div>
            
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<input type="hidden" id="journalid" value="<?php echo $journal['id'];?>">
<div id="errorMsg" class='hide-error'>Please fill all fields</div>
<script src="<?php echo WP_BAG_PL_URL?>js/jscolor.js"></script>

<script>
    

    jQuery( "#journal-form" ).submit(function( event ) {
        tinyMCE.triggerSave();
        event.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(noerrorFlag){
          jQuery('#loader-overlay').show();
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_general_settings',
                  'home_page_content' : jQuery('#home_page_frontend_editor').val(),                  
                  'about_us' : jQuery('#aboutus_frontend_editor').val(),
                  'contact_address' : jQuery('#contact_address').val(),
                  'contact_mobile' : jQuery('#contact_mobile').val(),
                  'contact_email' : jQuery('#contact_email').val(),
                  'indian_standard' : jQuery('#indian_standard').val(),
                  'indian_editor' : jQuery('#indian_editor').val(),
                  'indian_student' : jQuery('#indian_student').val(),
                  'foriegn_standard' : jQuery('#foriegn_standard').val(),
                  'foriegn_editor' : jQuery('#foriegn_editor').val(),
                  'foriegn_student' : jQuery('#foriegn_student').val(),                  
                  'bank_name' : jQuery('#bank_name').val(),
                  'bank_address' : jQuery('#bank_address').val(),
                  'bank_code' : jQuery('#bank_code').val(),
                  'account_name' : jQuery('#account_name').val(),
                  'account_no' : jQuery('#account_no').val(),
                  'account_type' : jQuery('#account_type').val(),
                  'ifsc' : jQuery('#ifsc').val(),
                  'micr' : jQuery('#micr').val(),
              },
              success:function(data) {
                  window.location = "<?php echo get_buzz_url('college_general_settings');?>";
              },
              error: function(errorThrown){
                  console.log(errorThrown);
              }
          });  
        }
        else{
          jQuery('#errorMsg').removeClass('hide-error');
        }      
    });
    jQuery('body').css('background-color', '#333');
</script>
<style>
  .hide-error{
    display:none;
  }
</style>