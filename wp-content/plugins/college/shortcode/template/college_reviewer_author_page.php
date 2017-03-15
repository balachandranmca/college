<div class="form-group">
    <label class="col-md-3 control-label" for="name">Status</label>
    <div class="col-md-9 slider_image">
        <select id="status">
            <option value="0">Please Select</option>
            <option value="accept">Accept</option>
            <option value="reject">Reject</option>
            <option value="modify">Modify Suggest</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label" for="name">Comment</label>
    <div class="col-md-9">
            <td><textarea id="comment"><?php echo $comment;?></textarea></td>
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
        if(jQuery('#status').val()==0){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
        
            fd.append("paper_id", <?php echo $_GET['id'];?>); 
            fd.append("comment", jQuery('#comment').val());
            fd.append("status", jQuery('#status').val());            
            fd.append('action', 'college_author_paper_reviewer'); 

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