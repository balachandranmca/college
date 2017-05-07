<div class="form-group">
    <label class="col-md-3 control-label" for="name">Current Status</label>
    <div class="col-md-9 slider_image">
         <label class="control-label" for="name"><?php echo $author_paper['status'];?></label>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="name">History</label>
    <div class="col-md-9">
        <?php $statusDate = ['reviewDate', 'recievedDate', 'acceptDate', 'rejectDate', 'modifyDate', 'resubmittedDate', 'transactionSubmittedDate', 'paidDate', 'publishedDate'];
        foreach ($statusDate as $key => $value) { ?>
            <div class="slider_image">
                <?php if($author_paper[$value]) { ?>
                    <label class="control-label" for="name"><?php echo $value.' - '.$author_paper[$value];?></label>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
<?php 
if($author_paper['status'] == 'accept') { ?>
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Transaction Number</label>
        <div class="col-md-9 slider_image">
            <input class='' type="text" name="tn_no" id="tn_no">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Transaction Photo</label>
        <div class="col-md-9 slider_image">
            <input class='photo-upload' type="file" name="tn_photo" id="tn_photo">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12 text-right">
            <button type="submit" name="author_paper" id="author_paper" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </div>
<?php } ?>

<?php 
if($author_paper['status'] == 'modify') { ?>
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Paper Template</label>
        <div class="col-md-9 slider_image">
            <input class='file-upload' type="file" name="paper_template" id="paper_template" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12 text-right">
            <button type="submit" name="author_paper" id="author_paper" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </div>
<?php } ?>
                </fieldset>
                
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
            </form>
      </div>
     </div>
</div>
<?php 
if($author_paper['status'] == 'modify') { ?>
<script>
    jQuery(document).on('click', '#author_paper', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#paper_template').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');

            var paper_template = file[0].files[0];
            fd.append("paper_id", <?php echo $_GET['id'];?>); 
            fd.append("paper_template", paper_template);       
            fd.append('action', 'college_author_paper_resubmitted'); 

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
<?php } ?>
<?php 
if($author_paper['status'] == 'accept') { ?>
<script>
    jQuery(document).on('click', '#author_paper', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if((jQuery('#tn_no').val()=="") && (jQuery('#tn_photo').val()=="")){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');

            var tn_photo = file[0].files[0];
            fd.append("paper_id", <?php echo $_GET['id'];?>); 
            fd.append("tn_photo", tn_photo);   
            fd.append("tn_no", jQuery('#tn_no').val());   
            fd.append('action', 'college_author_paper_tn_submitted'); 

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
<?php } ?>