<div class="container slider-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
            <form class="form-horizontal" enctype="multipart/form-data" name='authorform' id="authorform" method="post">
                <fieldset>
                    <h3 class="text-center">AUTHOR PAPER</h3>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Issue</label>
                        <div class="col-md-9 slider_image">
                            <select class="call_for_paper_dropdown">
                                <option value="0">Please Select ..</option>
                                <?php foreach ($issueActiveList as $key => $value) { ?>
                                    <?php if(!in_array($value['id'], $author_papers)) { ?>
                                        <option value="<?php echo $value['id'];?>"><?php echo $value['name'] ." ".$value['start_date'];?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Paper Template</label>
                        <div class="col-md-9 slider_image">
                            <input class='file-upload' type="file" name="paper_template" id="paper_template" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Copyright Form</label>
                        <div class="col-md-9 slider_image">
                            <input class='file-upload' type="file" name="copyright" id="copyright" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Type of Reviewer</label>
                        <div class="col-md-9 slider_image">
                            <span id="existing" style="margin-right:10px; cursor: pointer;">Existing </span><span id="new" style="margin-right:10px; cursor: pointer;">  New</span>
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
                    </div>
                    <div id="new_reviewer">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Reviewer 1</label>
                            <div class="col-md-9 slider_image">
                                <input type="text" id='reviewer1_name' class="form-control" value="" placeholder="Name">
                                <br>
                                <input type="number" id='reviewer1_phno' class="form-control" value="" placeholder="Phone Number">
                                <br>
                                <input type="email" id='reviewer1_email' class="form-control" value="" placeholder="Email">
                                <br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Reviewer 2</label>
                            <div class="col-md-9 slider_image">
                                <input type="text" id='reviewer2_name' class="form-control" value="" placeholder="Name">
                                <br>
                                <input type="number" id='reviewer2_phno' class="form-control" value="" placeholder="Phone Number">
                                <br>
                                <input type="email" id='reviewer2_email' class="form-control" value="" placeholder="Email">
                                <br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Reviewer 3</label>
                            <div class="col-md-9 slider_image">
                                <input type="text" id='reviewer3_name' class="form-control" value="" placeholder="Name">
                                <br>
                                <input type="number" id='reviewer3_phno' class="form-control" value="" placeholder="Phone Number">
                                <br>
                                <input type="email" id='reviewer3_email' class="form-control" value="" placeholder="Email">
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" name="author_paper_upload" id="author_paper_upload" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                     </div>
                </fieldset>
                
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
            </form>
      </div>
     </div>
</div>
<script>
    jQuery(document).ready(function(e){
        jQuery('#existing_reviewer').show();
        jQuery('#new_reviewer').hide();
        jQuery(document).on('click', '#existing', function(e){
            e.preventDefault();
            jQuery('#existing_reviewer').show();
            jQuery('#new_reviewer').hide();
        });
        jQuery(document).on('click', '#new', function(e){
            e.preventDefault();
            jQuery('#existing_reviewer').hide();
            jQuery('#new_reviewer').show();
        });
    });
    jQuery(document).on('click', '#author_paper_upload', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#paper_template').val()=="" || jQuery('#copyright').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('.call_for_paper_dropdown').val()=="0"){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');

            var paper_template = file[0].files[0];
            var copyright = file[1].files[0];

            fd.append("issue_id", jQuery('.call_for_paper_dropdown').val());
            fd.append("paper_template", paper_template); 
            fd.append("copyright", copyright);
            if(jQuery('#reviewer1').val()!=0 || jQuery('#reviewer2').val()!=0 || jQuery('#reviewer3').val()!=0){
                fd.append("reviewer1", jQuery('#reviewer1').val());
                fd.append("reviewer2", jQuery('#reviewer2').val());
                fd.append("reviewer3", jQuery('#reviewer3').val());
            }
            else{
                fd.append("reviewer1_name", jQuery('#reviewer1_name').val());
                fd.append("reviewer1_phno", jQuery('#reviewer1_phno').val());
                fd.append("reviewer1_email", jQuery('#reviewer1_email').val());
                fd.append("reviewer2_name", jQuery('#reviewer2_name').val());
                fd.append("reviewer2_phno", jQuery('#reviewer2_phno').val());
                fd.append("reviewer2_email", jQuery('#reviewer2_email').val());
                fd.append("reviewer3_name", jQuery('#reviewer3_name').val());
                fd.append("reviewer3_phno", jQuery('#reviewer3_phno').val());
                fd.append("reviewer3_email", jQuery('#reviewer3_email').val());
            }
            fd.append("author_issue_paperid", jQuery('#author_issue_paperid').val());            
            fd.append('action', 'college_author_issue_paper');  
            
            

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    window.location = "<?php echo get_buzz_url('college_author_paper_list');?>";
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