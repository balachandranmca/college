<form enctype="multipart/form-data" name='imageform' id="imageform" method="post">
    <div class="form-group">
        Name : <input type="text" name="editorname" id="editorname" tabindex="1" class="form-control" placeholder="Name" required>
        Phone No : <input type="text" name="phone_no" id="phone_no" tabindex="1" class="form-control" placeholder="Phone No"  required>
        Email Id : <input type="text" name="email_id" id="email_id" tabindex="1" class="form-control" placeholder="Email Id" required>
        <p>Please Choose File: </p>
        <input class='file-upload' type="file" name="images" id="files" placeholder="Please choose your image">
        <span id='file_validation_msg' class="hide-error">Invalid file extension</span>
    </div>
    
    <div id="errorMsg" class='hide-error'>Please fill all fields</div>
    
    <input type="submit" value="Upload" name="editor_upload" id="editor_upload" class="btn"/>
</form>
<script>
    jQuery(document).on('click', '#editor_upload', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;

        if(jQuery('.file-upload').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#editorname').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#phone_no').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#email_id').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');
            
            var editorname = jQuery('#editorname').val();
            var phone_no = jQuery('#phone_no').val();
            var email_id = jQuery('#email_id').val();

            var individual_file = file[0].files[0];
            fd.append("file", individual_file); 
            fd.append("editorname", editorname); 
            fd.append("phone_no", phone_no);
            fd.append("email_id", email_id);
            fd.append('action', 'college_editor');  
            
            

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    window.location = "<?php echo site_url();?>";
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