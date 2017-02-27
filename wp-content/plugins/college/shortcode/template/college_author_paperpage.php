<div class="container slider-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
            <form class="form-horizontal" enctype="multipart/form-data" name='authorform' id="authorform" method="post">
                <fieldset>
                    <h3 class="text-center">AUTHOR PAPER</h3>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Paper</label>
                         <div class="col-md-9">
                            <?php $files =  json_decode($author_paper['paper'],1); ?>
                                <td><a href="<?php echo $files['url'];?>" download>Download the File</a></td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Copyright</label>
                         <div class="col-md-9">
                            <?php $files =  json_decode($author_paper['copyright'],1); ?>
                                <td><a href="<?php echo $files['url'];?>" download>Download the File</a></td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Author Suggested Reviewer 1</label>
                         <div class="col-md-9">
                                <td><textarea><?php echo $reviewer1;?></textarea></td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Author Suggested Reviewer 2</label>
                         <div class="col-md-9">
                                <td><textarea><?php echo $reviewer2;?></textarea></td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Author Suggested Reviewer 3</label>
                         <div class="col-md-9">
                                <td><textarea><?php echo $reviewer3?></textarea></td>
                        </div>
                    </div>
                    <div id="existing_reviewer">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Reviewer 1</label>
                            <div class="col-md-9 slider_image">
                                <select id="reviewer1">
                                    <option value="0">Please Select ..</option>
                                    <?php foreach ($users as $key => $user) { ?>
                                        <option value="<?php echo $user->ID;?>"><?php echo $user->data->user_nicename."--->".$user->data->user_email;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Reviewer 2</label>
                            <div class="col-md-9 slider_image">
                                <select id="reviewer2">
                                    <option value="0">Please Select ..</option>
                                    <?php foreach ($users as $key => $user) { ?>
                                        <option value="<?php echo $user->ID;?>"><?php echo $user->data->user_nicename."--->".$user->data->user_email;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Reviewer 3</label>
                            <div class="col-md-9 slider_image">
                                <select id="reviewer3">
                                    <option value="0">Please Select ..</option>
                                    <?php foreach ($users as $key => $user) { ?>
                                        <option value="<?php echo $user->ID;?>"><?php echo $user->data->user_nicename."--->".$user->data->user_email;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Status</label>
                            <div class="col-md-9 slider_image">
                                <select id="status">
                                    <option value="recieved">Recieved</option>
                                    <option value="review">Review Under Process</option>
                                    <option value="accept">Accept</option>
                                    <option value="reject">Reject</option>
                                    <option value="modify">Modify Suggest</option>
                                    <option value="paid">Payment Paid</option>
                                    <option value="published">Published</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" name="author_paper" id="author_paper" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                     </div>
                </fieldset>
                
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
            </form>
      </div>
     </div>
</div>
<script>
    jQuery(document).on('click', '#author_paper', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#reviewer1').length && jQuery('#reviewer1').val()==0){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            if(jQuery('#reviewer1').length) {
                fd.append("reviewer1", jQuery('#reviewer1').val());
                fd.append("reviewer2", jQuery('#reviewer2').val());
                fd.append("reviewer3", jQuery('#reviewer3').val());
            }
            fd.append("paper_id", <?php echo $_GET['id'];?>);            
            fd.append("status", jQuery('#status').val());            
            fd.append('action', 'college_author_paper');  

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    // window.location = "<?php echo get_buzz_url('college_carosel_slider_list');?>";
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