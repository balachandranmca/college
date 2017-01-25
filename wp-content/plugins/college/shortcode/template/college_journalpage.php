<?php $content = $journal['des'];
$editor_id = 'journal_frontend_editor';
$settings =   array(
    'wpautop' => true, // use wpautop?
    'media_buttons' => false, // show insert/upload button(s)
    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
);
?>

<div class="container journal-creator">
	<div class="row">
      <div class="col-md-8 creator-content">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" id="journal-form">
          <fieldset>
            <h3 class="text-center">JOURNAL</h3>
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Journal name" class="form-control" value="<?php echo $journal['name'];?>">
              </div>
            </div>
    
            <!-- Issn input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">ISSN Number</label>
              <div class="col-md-9">
                <input id="issn_no" name="issn_no" type="text" placeholder="ISSN Number" class="form-control" value="<?php echo $journal['issn_no'];?>">
              </div>
            </div>

            <!-- Color input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Colour</label>
              <div class="col-md-9">
                <input class="jscolor form-control" name='color' value="<?php echo $journal['color'];?>">
              </div>
            </div>
            
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description</label>
              <div class="col-md-9">
                <?php wp_editor( $content, $editor_id, $settings = array() ); ?>
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
        if(jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#issn_no').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#journal_frontend_editor').val()==""){
            noerrorFlag=0;
        }
        if(noerrorFlag){
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_journal',
                  'name' : jQuery('#name').val(),
                  'issn_no' : jQuery('#issn_no').val(),
                  'color' : jQuery('.jscolor').val(),
                  'desc' : jQuery('#journal_frontend_editor').val(),
                  'journalid' : jQuery('#journalid').val(),
              },
              success:function(data) {
                  window.location = "<?php echo get_buzz_url('college_journal_list');?>";
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
</script>
<style>
  .hide-error{
    display:none;
  }
</style>