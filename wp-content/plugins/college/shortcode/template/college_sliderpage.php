<form enctype="multipart/form-data" name='imageform' id="imageform" method="post">
    <div class="form-group">
        Name : <input type="text" name="slidername" id="slidername" tabindex="1" class="form-control" placeholder="slidername" value="">
        Description : <textarea rows="4" name="description" id="description">
        </textarea>
        <p>Please Choose Image: </p>
        <img alt="Profile image" src="" class="imageup" id="uploaded-image">
        <input class='file-upload' type="file" name="images" id="images" placeholder="Please choose your image">
        <span id='file_validation_msg' class="hide-error">Invalid file extension</span>
    </div>
    
    <div id="loader"></div>
    
    <input type="submit" value="Upload" name="image_upload" id="image_upload" class="btn"/>
</form>
<script>
    jQuery('.file-upload').change(function (e) {
            if (isFileAPISupported()) {
                var F = this.files;
                if (F && F[0])
                    for (var i = 0; i < F.length; i++)
                        readImage(F[i]);
            }else{
                $('#uploaded-image').attr('src', "../images/default.png");
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
                $('#file_validation_msg').addClass('hide-error');
                image.src = _file.target.result; // url.createObjectURL(file);
                image.onload = function () {
                    var w = this.width,
                    h = this.height,
                    t = file.type,
                    // ext only: // file.type.split('/')[1],
                    name = file.name,
                    s = ~~(file.size / 1024) + 'KB';
                    
                    if(t.indexOf("image")!= -1){
                        $('#uploaded-image').removeClass('imageup');
                        $('#uploaded-image').attr('src', _file.target.result);
                        $('.file_chooser div').text(name);
                    }else{
                        $('#file_validation_msg').removeClass('hide-error');
                        $('.file-upload').wrap('<form>').parent('form').trigger('reset');
                        $('.file-upload').unwrap();
                    }				
                };
            };
            image.onerror = function () {
                $('#file_validation_msg').removeClass('hide-error');
                $('.file-upload').wrap('<form>').parent('form').trigger('reset');
                $('.file-upload').unwrap();
            };

        }
    jQuery(document).on('click', '#image_upload', function(e){
        e.preventDefault();

        var fd = new FormData();
        var file = jQuery(document).find('input[type="file"]');
        
        var slidername = jQuery('#slidername').val();
        var description = jQuery('#description').val();

        var individual_file = file[0].files[0];
        fd.append("file", individual_file); 
        fd.append("slidername", slidername); 
        fd.append("description", description);
        fd.append('action', 'college_slider');  
        
        

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){

                console.log(response);
            }
        });
    });
</script>
<style>
.hide-error{
    display:none;
}
</style>