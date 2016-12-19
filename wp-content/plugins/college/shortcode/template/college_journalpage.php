<?php $content = '';
$editor_id = 'journal_frontend_editor';
$settings =   array(
    'wpautop' => true, // use wpautop?
    'media_buttons' => false, // show insert/upload button(s)
    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
);
?>

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" id="journal-form">
          <fieldset>
            <legend class="text-center">JOURNAL</legend>
            
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Journal name" class="form-control">
              </div>
            </div>
    
            <!-- Issn input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">ISSN Number</label>
              <div class="col-md-9">
                <input id="issn_no" name="issn_no" type="text" placeholder="ISSN Number" class="form-control">
              </div>
            </div>

            <!-- Color input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Colour</label>
              <div class="col-md-9">
                <input class="jscolor" name='color' value="ab2567">
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
<script src="<?php echo WP_BAG_PL_URL?>js/jscolor.js"></script>

<script>
    

    $( "#journal-form" ).submit(function( event ) {
        tinyMCE.triggerSave();
        event.preventDefault();
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                'action':'college_journal',
                'name' : $('#name').val(),
                'issn_no' : $('#issn_no').val(),
                'color' : $('.jscolor').val(),
                'desc' : $('#journal_frontend_editor').val(),
            },
            success:function(data) {
                // This outputs the result of the ajax request
                console.log(data);
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });  
                
    });
</script>