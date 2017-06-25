<div class="container slider-creator">
	<div class="row">
      <div class="col-md-3">
        <img src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/journal_editor.png" class="img-responsive center-block" alt="">
      </div><!--.col -->
      <div class="col-md-6 creator-content">
        <div class="">
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <fieldset>
                    <h3 class="text-center">JOURNAL EDITOR</h3>
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
                        <label class="col-md-3 control-label" for="please_choose_image">Please Choose Journal Editor Image (293*293)</label>
                        <div class="col-md-9 slider_image">
                            <img alt="Profile image" src="<?php echo $journal_editor['image']['url'];?>" class="imageup" id="uploaded-image">
                            <input class='file-upload' type="file" name="images" id="images" placeholder="Please choose your image">
                            <input type="hidden" id="journal_editorid" value="<?php echo $journal_editor['id'];?>">
                            <span id='file_validation_msg' class="hide-error">Invalid file extension</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="name" value="<?php echo $journal_editor['name'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Qualification</label>
                        <div class="col-md-9">
                            <input type="text" id="qualification" value="<?php echo $journal_editor['qualification'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Job Nature</label>
                        <div class="col-md-9">
                            <input type="text" id="job_nature" value="<?php echo $journal_editor['job_nature'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Department</label>
                        <div class="col-md-9">
                            <input type="text" id="department" value="<?php echo $journal_editor['department'];?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Experience</label>
                        <div class="col-md-9">
                            <input type="text" id="experience" value="<?php echo $journal_editor['experience'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Specialization</label>
                        <div class="col-md-9">
                            <input type="text" id="specialization" value="<?php echo $journal_editor['specialization'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Place</label>
                        <div class="col-md-9">
                            <input type="text" id="place" value="<?php echo $journal_editor['place'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">City and Country</label>
                        <div class="col-md-9">
                            <input type="text" id="city_country" value="<?php echo $journal_editor['city_country'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">EmailId</label>
                        <div class="col-md-9">
                            <input type="text" id="emailid" value="<?php echo $journal_editor['emailid'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Mobile No</label>
                        <div class="col-md-9">
                            <input type="text" id="mobile_no" value="<?php echo $journal_editor['mobile_no'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Facebook Url</label>
                        <div class="col-md-9">
                            <input class="weburl" type="text" id="fb_url" value="<?php echo $journal_editor['fb_url'];?>">
                            <span style="color: red;" class="weburl_msg hide">Please enter Proper Url( include http or https )</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Twitter Url</label>
                        <div class="col-md-9">
                            <input class="weburl" type="text" id="tw_url" value="<?php echo $journal_editor['tw_url'];?>">
                            <span style="color: red;" class="weburl_msg hide">Please enter Proper Url( include http or https )</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">Google Plus Url</label>
                        <div class="col-md-9">
                            <input class="weburl" type="text" id="gp_url" value="<?php echo $journal_editor['gp_url'];?>">
                            <span style="color: red;" class="weburl_msg hide">Please enter Proper Url( include http or https )</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="personal_details">LinkedIn Url</label>
                        <div class="col-md-9">
                            <input class="weburl" type="text" id="ln_url" value="<?php echo $journal_editor['ln_url'];?>">
                            <span style="color: red;" class="weburl_msg hide">Please enter Proper Url( include http or https )</span>
                        </div>
                    </div>
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <input type="submit" class="btn btn-primary btn-lg" value="Upload" name="image_upload" id="image_upload"/>
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
    function isValidUrl(url){
        if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(url)){
            return true;
        } else {
            return false;
        }
    }
    jQuery(document).on('click', '#image_upload', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        jQuery('.weburl_msg').addClass('hide');
        var noerrorFlag = 1;

        if(jQuery('.file-upload').val()=="" && jQuery('#journal_editorid').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#journal_id').val()=="0"){
            noerrorFlag=0;
        }
        if(jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        jQuery('.weburl').each(function(){
            if(jQuery(this).val() != "" && !isValidUrl(jQuery(this).val())){
                noerrorFlag=0;
                jQuery(this).next().removeClass('hide');
            }
        });
        
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');
            
            var personal_details = jQuery('#personal_details').val();
            var journal_id = jQuery('#journal_id').val();
            var editor_type = jQuery('#editor_type').val();
            var journal_editorid = jQuery('#journal_editorid').val();

            var individual_file = file[0].files[0];
            fd.append("file", individual_file); 
            fd.append("name", jQuery('#name').val());            
            fd.append("qualification", jQuery('#qualification').val());            
            fd.append("job_nature", jQuery('#job_nature').val());            
            fd.append("experience", jQuery('#experience').val());
            fd.append("specialization", jQuery('#specialization').val());
            fd.append("department", jQuery('#department').val());            
            fd.append("place", jQuery('#place').val());            
            fd.append("city_country", jQuery('#city_country').val());            
            fd.append("emailid", jQuery('#emailid').val());                        
            fd.append("mobile_no", jQuery('#mobile_no').val());                        
            fd.append("journal_id", journal_id); 
            fd.append("type", editor_type);
            fd.append("journal_editorid", journal_editorid);
            fd.append('fb_url', jQuery('#fb_url').val());
            fd.append('tw_url', jQuery('#tw_url').val());
            fd.append('gp_url', jQuery('#gp_url').val());
            fd.append('ln_url', jQuery('#ln_url').val());
            fd.append('action', 'college_journal_editor');  
            
            
            jQuery('#loader-overlay').show();
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
    jQuery('body').css('background-color', '#333');
</script>
<style>
.hide-error{
    display:none;
}
</style>