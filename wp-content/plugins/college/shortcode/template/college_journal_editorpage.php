<div class="container slider-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <fieldset>
                    <h3 class="text-center">JOURNAL</h3>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="journal_Id">Journal Id</label>
                            <div class="col-md-9">
                                <select id="journal_id" class="dropdown">
                                    <option value="0">Select Journal...</option>
                                    <?php foreach ($journalList as $key => $journalValue) { ?>
                                        <option value="<?php echo $journalValue['id'];?>"<?php if($journal_editor['journal_id']==$journalValue['id']){echo ' selected';}?>><?php echo $journalValue['name'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="type">Type</label>
                        <div class="col-md-9">
                            <select id="editor_type" class="dropdown">
                                <?php $editor_type = get_editor_type(); ?>
                                <?php foreach ($editor_type as $key => $value) { ?>
                                   <option value="<?php echo $key;?>"<?php if($journal_editor['type'] == $key) { echo 'selected';}?> ><?php echo $value;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Personal Details</label>
                        <div class="col-md-9">
                            <textarea rows="4" name="personal_details" id="personal_details"><?php echo $journal_editor['personal_details'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="please_choose_image">Please Choose Image</label>
                        <div class="col-md-9 slider_image">
                            <img alt="Profile image" src="<?php echo $journal_editor['image']['url'];?>" class="imageup" id="uploaded-image">
                            <input class='file-upload' type="file" name="images" id="images" placeholder="Please choose your image">
                            <input type="hidden" id="journal_editorid" value="<?php echo $journal_editor['id'];?>">
                            <span id='file_validation_msg' class="hide-error">Invalid file extension</span>
                        </div>
                    </div>
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <input type="submit" class="btn btn-primary btn-lg" value="Upload" name="image_upload" id="image_upload" class="btn"/>
                    </div>
                </div>
            </form>
        </div>
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

        if(jQuery('.file-upload').val()=="" && jQuery('#journal_editorid').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#journal_id').val()=="0"){
            noerrorFlag=0;
        }
        if(jQuery('#personal_details').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');
            
            var personal_details = jQuery('#personal_details').val();
            var journal_id = jQuery('#journal_id').val();
            var editor_type = jQuery('#editor_type').val();
            var journal_editorid = jQuery('#journal_editorid').val();

            var individual_file = file[0].files[0];
            fd.append("file", individual_file); 
            fd.append("personal_details", personal_details);            
            fd.append("journal_id", journal_id); 
            fd.append("type", editor_type);
            fd.append("journal_editorid", journal_editorid);
            fd.append('action', 'college_journal_editor');  
            
            

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    window.location = "<?php echo get_buzz_url('college_journal_editor_list');?>";
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