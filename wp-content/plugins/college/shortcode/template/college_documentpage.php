<div class="container slider-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <fieldset>
                    <h3 class="text-center">GENERAL DOCUMENT SETTING</h3>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Copyright Form</label>
                        <div class="col-md-9 slider_image">
                            <input class='file-upload' type="file" name="copyright" id="copyright">
                        </div>
                        <?php 
                        $copyright = get_option('copyright');
                        if($copyright){
                            $copy_right = json_decode($copyright, 1); ?>
                            <a href="<?php echo $copy_right['url'];?>" download> Download </a>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Withdrawal Form</label>
                        <div class="col-md-9 slider_image">
                            <input class='file-upload' type="file" name="withdraw" id="withdraw">
                        </div>
                        <?php 
                        $withdraw = get_option('withdraw');
                        if($withdraw){
                            $with_draw = json_decode($withdraw, 1); ?>
                            <a href="<?php echo $with_draw['url'];?>" download> Download </a>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Sample Paper</label>
                        <div class="col-md-9 slider_image">
                            <input class='file-upload' type="file" name="samplepaper" id="samplepaper">
                        </div>
                        <?php 
                        $samplepaper = get_option('samplepaper');
                        if($samplepaper){
                            $sample_paper = json_decode($samplepaper, 1); ?>
                            <a href="<?php echo $sample_paper['url'];?>" download> Download </a>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Paper Templates</label>
                        <div class="col-md-9 slider_image">
                            <input class='file-upload' type="file" name="papertemplates" id="papertemplates">
                        </div>
                        <?php 
                        $papertemplates = get_option('papertemplates');
                        if($papertemplates){
                            $paper_templates = json_decode($papertemplates, 1); ?>
                            <a href="<?php echo $paper_templates['url'];?>" download> Download </a>
                        <?php } ?>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" name="document_upload" id="document_upload" class="btn btn-primary btn-lg">Submit</button>
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
    jQuery(document).on('click', '#document_upload', function(e){
        e.preventDefault();
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');

            var copyright = file[0].files[0];
            var withdraw = file[1].files[0];
            var samplepaper = file[2].files[0];
            var papertemplates = file[3].files[0];
            fd.append("copyright", copyright); 
            fd.append("withdraw", withdraw);
            fd.append("samplepaper", samplepaper);
            fd.append("papertemplates", papertemplates);
            fd.append('action', 'college_document');  
            
            

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    alert("Document Uploaded Successfully");
                    location.reload();
                }
            });
        });
</script>
<style>
.hide-error{
    display:none;
}
</style>