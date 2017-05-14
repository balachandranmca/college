<?php 
if($author_paper['status'] == 'recieved') { ?>
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
<?php } else { ?>
    <?php 
        foreach ($authorIssuePaperReviewer as $key => $value) { ?>
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Reviewer Name</label>
                <div class="col-md-9">
                    <?php $user_info = get_userdata($value['user_id']);?>
                        <td><input type="text" value="<?php echo $user_info->user_nicename;?>" disabled></td>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Status</label>
                <div class="col-md-9">
                        <td><input type="text" value="<?php echo $value['status'];?>" disabled></td>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Comment</label>
                <div class="col-md-9">
                        <td><input type="text" value="<?php echo $value['comment'];?>" disabled></td>
                </div>
            </div>
         <?php } ?>
         <div class="form-group">
                <label class="col-md-3 control-label" for="name">Status</label>
                <div class="col-md-9 slider_image">
                    <select id="status">
                        <option value="0">Please Select</option>
                        <option value="accept"<?php if($author_paper['status']=="accept"){echo " selected";}?>>Accept</option>
                        <option value="reject"<?php if($author_paper['status']=="reject"){echo " selected";}?>>Reject</option>
                        
                        <option value="modify"<?php  if($author_paper['status']=="modify"){echo " selected";}?>>Modify Suggest</option>
                        <option value="resubmitted"<?php if($author_paper['status']=="resubmitted"){echo " selected";}?>>Author Resubmitted</option>
                        <option value="transactionSubmitted"<?php if($author_paper['status']=="transactionSubmitted"){echo " selected";}?>>Author Transaction Submitted</option>
                        <option value="paid"<?php  if($author_paper['status']=="paid"){echo " selected";}?>>Payment Paid</option>
                        <option value="published"<?php  if($author_paper['status']=="published"){echo " selected";}?>>Published</option>
                    </select>
                </div>
            </div>
            <?php if($author_paper['status']=="transactionSubmitted"){ ?>
                <?php if($author_paper['tn_no']) { ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Transaction No</label>
                        <div class="col-md-9">
                            <td><label class="col-md-9 control-label" for="name">	<?php echo $author_paper['tn_no'];?></label></td>
                        </div>
                    </div>
                <?php } ?>
                <?php if($author_paper['tn_photo']) { ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Transaction Photo</label>
                        <div class="col-md-9">
                            <td><?php 
                            $tn_photo =  json_decode($author_paper['tn_photo'],1);
                            ?>
                            <img src="<?php echo $tn_photo['url'];?>"></td>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Comment</label>
                <div class="col-md-9">
                        <td><textarea id="comment"><?php echo $author_paper['comment'];?></textarea></td>
                </div>
            </div>
<?php } ?>
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
</div>
<script>
    jQuery(document).on('click', '#author_paper', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#reviewer1').length && jQuery('#reviewer1').val()==0){
            noerrorFlag=0;
        }
        if(jQuery('#status').length && jQuery('#status').val()==0){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            jQuery('#loader-overlay').show();
            var fd = new FormData();
            if(jQuery('#reviewer1').length) {
                fd.append("reviewer1", jQuery('#reviewer1').val());
                fd.append("reviewer2", jQuery('#reviewer2').val());
                fd.append("reviewer3", jQuery('#reviewer3').val());
                fd.append("status", 'recieved');
            }
            fd.append("paper_id", <?php echo $_GET['id'];?>);
            if(jQuery('#status').length) {           
                fd.append("status", jQuery('#status').val());
                fd.append("comment", jQuery('#comment').val());

            }          
            fd.append('action', 'college_author_paper');  

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