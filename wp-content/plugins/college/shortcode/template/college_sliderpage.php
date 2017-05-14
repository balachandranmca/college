<div class="container slider-creator">
	<div class="row">
      <div class="col-md-3">
        <img src="https://www.macupdate.com/images/icons256/8382.png" class="img-responsive center-block" alt="">
      </div><!--.col -->
      <div class="col-md-9 creator-content">
        <div>
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <fieldset>
                    <h3 class="text-center">SLIDER</h3>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input type="text" name="slidername" id="slidername" tabindex="1" class="form-control" placeholder="slidername" value="<?php echo $slider['slidername'];?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Description</label>
                        <div class="col-md-9">
                            <textarea rows="4" name="description" id="description"><?php echo $slider['description'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Please Choose Slider Image (1024*600)</label>
                        <div class="col-md-9 slider_image">
                            <img alt="Profile image" src="<?php echo $slider['image']['url'];?>" class="imageup" id="uploaded-image">
                            <input class='file-upload' type="file" name="images" id="images" placeholder="Please choose your image">
                            <input type="hidden" id="sliderid" value="<?php echo $slider['id'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" name="image_upload" id="image_upload" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                     </div>
                </fieldset>
                
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
                
                <!--<input type="submit" class="pull-right" value="Upload" name="image_upload" id="image_upload" class="btn"/>-->
            </form>
      </div>
     </div>
</div>
<script>
    jQuery('.file-upload').change(function (e) {
            if (isFileAPISupported()) {
                var F = this.files;
                if (F && F[0])
                    for (var i = 0; i < F.length; i++)
                        readImage(F[i]);
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
    jQuery(document).on('click', '#image_upload', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;

        if(jQuery('.file-upload').val()=="" && jQuery('#sliderid').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#slidername').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#description').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            jQuery('#loader-overlay').show();
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');
            
            var slidername = jQuery('#slidername').val();
            var description = jQuery('#description').val();
            var sliderid = jQuery('#sliderid').val();

            var individual_file = file[0].files[0];
            fd.append("file", individual_file); 
            fd.append("slidername", slidername); 
            fd.append("description", description);
            fd.append("sliderid", sliderid);
            fd.append('action', 'college_slider');  
            
            

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    window.location = "<?php echo get_buzz_url('college_slider_list');?>";
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