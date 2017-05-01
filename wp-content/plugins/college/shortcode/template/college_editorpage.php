<div class="container slider-creator">
	<div class="row">
         <div class="col-md-4">
            <img src="https://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/256x256/Pencil3.png" class="img-responsive center-block" alt="">
        </div><!--.col -->
        <div class="col-md-6">
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <h3 class="text-center">JOIN AS EDITORIAL BOARD MEMBER</h3>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input type="text" name="editorname" id="editorname" tabindex="1" class="form-control" placeholder="Name" required>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Phone No</label>
                        <div class="col-md-9">
                          <input type="text" name="phone_no" id="phone_no" tabindex="1" class="form-control" placeholder="Phone No"  required>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Email Id</label>
                    <div class="col-md-9">
                        <input type="text" name="email_id" id="email_id" tabindex="1" class="form-control" placeholder="Email Id" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Please Choose File</label>
                    <div class="col-md-9">
                        <input class='file-upload' type="file" name="images" id="files" placeholder="Please choose your image">
                        <span id='file_validation_msg' class="hide-error">Invalid file extension</span>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Photo</label>
                    <div class="col-md-9">
                        <input type="file" name="images" id="photo" placeholder="Please choose your image">
                        <span id='file_validation_msg' class="hide-error">Invalid file extension</span>
                        </div>
                </div>
                <div id="errorMsg" class="hide-error text-center">Please fill all fields</div>
                <div class="form-group">
                    <div class="col-md-12 text-right">
                            <!--<input type="submit" value="Upload" name="editor_upload" id="editor_upload" class="btn"/>-->
                            <button type="submit" name="editor_upload" id="editor_upload" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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

        if(jQuery('#photo').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');
            
            var editorname = jQuery('#editorname').val();
            var phone_no = jQuery('#phone_no').val();
            var email_id = jQuery('#email_id').val();

            var individual_file = file[0].files[0];
            var photo = file[1].files[0];
            fd.append("file", individual_file); 
            fd.append("editorname", editorname); 
            fd.append("phone_no", phone_no);
            fd.append("email_id", email_id);
            fd.append("photo", photo);
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
    jQuery('body').css('background-color', '#333');
</script>
<style>
.hide-error{
    display:none;
}
</style>