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
    <div class="col-md-3">
        <img src="https://s-media-cache-ak0.pinimg.com/originals/dd/64/1b/dd641b9a746f7a1bd7a026267e45fcce.png" class="img-responsive center-block" alt="">
    </div><!--.col -->
      <div class="col-md-9 creator-content">
        <div class="">
          <form class="form-horizontal" action="" method="post" id="journal-form">
          <fieldset>
            <h3 class="text-center">CREATE JOURNAL</h3>
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
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Impact Image (600*600)</label>
                <div class="col-md-9 slider_image">
                    <img alt="Profile image" src="<?php echo $journal['images']['url'];?>" class="imageup" id="uploaded-image">
                    <input class='file-upload' type="file" name="images" id="images" placeholder="Impact image">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Impact Number</label>
              <div class="col-md-9">
                <input id="impact_no" name="issn_no" type="text" placeholder="Impact Number" class="form-control" value="<?php echo $journal['impact_no'];?>">
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Header Image (1200*300)</label>
                <div class="col-md-9 slider_image">
                    <img alt="Profile image" src="<?php echo $journal['header_img']['url'];?>" class="imageups" id="uploaded-images">
                    <input class='file-uploads' type="file" name="images" id="header_images" placeholder="Impact image">
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
    jQuery('.file-uploads').change(function (e) {
            if (isFileAPISupported()) {
                var F = this.files;
                if (F && F[0])
                    for (var i = 0; i < F.length; i++)
                        readImage(F[i]);
            }else{
                jQuery('#uploaded-images').attr('src', "../images/default.png");
            }
            
    });
    function isFileAPISupported() {
            if (window.File && window.FileReader && window.FileList && window.Blob)
                return true;
            else
                return false;
        }
        
        function readImage(file) {

            var reader = new FileReader();
            var image = new Image();

            reader.readAsDataURL(file);
            reader.onload = function (_file) {
                jQuery('#file_validation_msg').addClass('hide-error');
                image.src = _file.target.result; // url.createObjectURL(file);
                image.onload = function () {
                    var w = this.width,
                    h = this.height,
                    t = file.type,
                    // ext only: // file.type.split('/')[1],
                    name = file.name,
                    s = ~~(file.size / 1024) + 'KB';
                    
                    if(t.indexOf("image")!= -1){
                        jQuery('#uploaded-images').removeClass('imageups');
                        jQuery('#uploaded-images').attr('src', _file.target.result);
                        jQuery('.file_chooser div').text(name);
                    }else{
                        jQuery('#file_validation_msg').removeClass('hide-error');
                        jQuery('.file-uploads').wrap('<form>').parent('form').trigger('reset');
                        jQuery('.file-uploads').unwrap();
                    }				
                };
            };
            image.onerror = function () {
                jQuery('#file_validation_msg').removeClass('hide-error');
                jQuery('.file-uploads').wrap('<form>').parent('form').trigger('reset');
                jQuery('.file-uploads').unwrap();
            };

        }

    jQuery('.file-upload').change(function (e) {
            if (isFileAPISupported()) {
                var F = this.files;
                if (F && F[0])
                    for (var i = 0; i < F.length; i++)
                        readImages(F[i]);
            }else{
                jQuery('#uploaded-image').attr('src', "../images/default.png");
            }
            
    });
    function isFileAPISupported() {
            if (window.File && window.FileReader && window.FileList && window.Blob)
                return true;
            else
                return false;
        }
        
        function readImages(file) {

            var reader = new FileReader();
            var image = new Image();

            reader.readAsDataURL(file);
            reader.onload = function (_file) {
                jQuery('#file_validation_msg').addClass('hide-error');
                image.src = _file.target.result; // url.createObjectURL(file);
                image.onload = function () {
                    var w = this.width,
                    h = this.height,
                    t = file.type,
                    // ext only: // file.type.split('/')[1],
                    name = file.name,
                    s = ~~(file.size / 1024) + 'KB';
                    
                    if(t.indexOf("image")!= -1){
                        jQuery('#uploaded-image').removeClass('imageup');
                        jQuery('#uploaded-image').attr('src', _file.target.result);
                        jQuery('.file_chooser div').text(name);
                    }else{
                        jQuery('#file_validation_msg').removeClass('hide-error');
                        jQuery('.file-upload').wrap('<form>').parent('form').trigger('reset');
                        jQuery('.file-upload').unwrap();
                    }				
                };
            };
            image.onerror = function () {
                jQuery('#file_validation_msg').removeClass('hide-error');
                jQuery('.file-upload').wrap('<form>').parent('form').trigger('reset');
                jQuery('.file-upload').unwrap();
            };

        }

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
        if(jQuery('#impact_no').val()==""){
            noerrorFlag=0;
        }
        if((jQuery('#images').val()=="") && (jQuery('#journalid').val()=="")){
            noerrorFlag=0;
        }
        if((jQuery('#header_images').val()=="") && (jQuery('#journalid').val()=="")){
            noerrorFlag=0;
        }
        alert(noerrorFlag);
        if(noerrorFlag){
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          var fd = new FormData();
          var file = jQuery(document).find('input[type="file"]');
          var individual_file = file[0].files[0];
          var header_img = file[1].files[0];
          fd.append("images", individual_file); 
          fd.append("header_img", header_img); 
          fd.append("impact_no", jQuery('#impact_no').val()); 
          fd.append("name", jQuery('#name').val());
          fd.append("issn_no", jQuery('#issn_no').val());
          fd.append("color", jQuery('.jscolor').val());
          fd.append("desc", jQuery('#journal_frontend_editor').val());
          fd.append("journalid", jQuery('#journalid').val());
          fd.append('action', 'college_journal');             
          jQuery('#loader-overlay').show();
          jQuery.ajax({
              type: 'POST',
              url: "<?php echo admin_url('admin-ajax.php'); ?>",
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                  window.location = "<?php echo get_buzz_url('college_journal_list');?>";
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