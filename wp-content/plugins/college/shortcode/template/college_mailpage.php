<?php 
$editor_id = 'body_frontend_editor';
$settings =   array(
    'wpautop' => true, // use wpautop?
    'media_buttons' => false, // show insert/upload button(s)
    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
);?>

<div class="container journal-creator">
	<div class="row">
    <div class="col-md-3">
        <img src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/settings.png" class="hidden-xs img-responsive center-block" alt="">
        
      </div><!--.col -->
      <div class="col-md-8 creator-content">
        <div class="">
          <form class="form-horizontal" action="" method="post" id="journal-form">
          <fieldset>
            <h3 class="text-center">Mail Service</h3>

             <!-- Color input-->
            <div class="form-group">
              <label class="col-md-3 control-label">To Mail</label>
              <div class="col-md-9">
                <input id='to_mail'  class="form-control" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Subject</label>
              <div class="col-md-9">
                <input id='subject'  class="form-control" value="<?php echo $subject;?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Message</label>
              <div class="col-md-9">
                <?php wp_editor( $message, $editor_id, $settings = array() ); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
            <div class="form-group">
                <label id='errorMsg' class="col-md-3 control-label hide">Please fill all the form fields in correct format</label>
            </div>
          </fieldset>
          </form>
<script>
    
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    };
    jQuery( "#journal-form" ).submit(function( event ) {
    
        tinyMCE.triggerSave();
        event.preventDefault();
        var noerrorFlag = 1;
        jQuery('#errorMsg').addClass('hide-error');
        if( !isValidEmailAddress( jQuery('#to_mail').val() ) ){
            noerrorFlag= 0;
        }
        if(jQuery('#subject').val()==""){
            noerrorFlag= 0;
        }

        if(jQuery('#body_frontend_editor').val()==""){
            noerrorFlag= 0;
        }
        
        if(noerrorFlag){
          jQuery('#loader-overlay').show();
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_mailsending',
                  'body' : jQuery('#body_frontend_editor').val(),                  
                  'to' : jQuery('#to_mail').val(),
                  'subject' : jQuery('#subject').val(),
              },
              success:function(data) {
                  alert(' Mail Send Successfully ');
                  location.reload();
              },
              error: function(errorThrown){
                  console.log(errorThrown);
              }
          });  
        }
        else{
          jQuery('#errorMsg').removeClass('hide');
        }      
    });
    jQuery('body').css('background-color', '#333');
</script>

            