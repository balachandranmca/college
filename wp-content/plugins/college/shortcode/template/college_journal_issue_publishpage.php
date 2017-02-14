<div class="container slider-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <fieldset>
                    <h3 class="text-center">PUBLISHED ISSUE</h3>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="sno">Serial No</label>
                        <div class="col-md-9">
                            <input id="sno" name="sno" type="number" placeholder="Serial No" class="form-control" value="<?php echo $journal_issue_publish['sno'];?>" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="paper_title">Paper Title</label>
                        <div class="col-md-9">
                            <input id="paper_title" name="paper_title" type="text" placeholder="Paper Title" class="form-control" value="<?php echo $journal_issue_publish['paper_title'];?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="author">Author</label>
                        <div class="col-md-9">
                            <input id="author" name="author" type="text" placeholder="Paper Title" class="form-control" value="<?php echo $journal_issue_publish['author'];?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="paper_title">Page No</label>
                        <div class="col-md-9">
                            <input id="page_no" name="page_no" type="text" placeholder="Page No" class="form-control" value="<?php echo $journal_issue_publish['page_no'];?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Please Select PDF FILE</label>
                        <div class="col-md-9 slider_image">
                            <input type="file" name="pdf_file" id="pdf_file" accept=".pdf">
                            <input type="hidden" id="journal_issue_publishid" value="<?php echo $journal_issue_publish['id'];?>">
                            <input type="hidden" id="issue_id" value="<?php echo $_GET['issue_id'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" name="pdf_upload" id="pdf_upload" class="btn btn-primary btn-lg">Submit</button>
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
    jQuery(document).on('click', '#pdf_upload', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;

        if(jQuery('#pdf_file').val()=="" && jQuery('#journal_issue_publishid').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var file = jQuery(document).find('input[type="file"]');
            

            var individual_file = file[0].files[0];
            
            fd.append("journal_issue_publishid", jQuery('#journal_issue_publishid').val());
            fd.append("sno", jQuery('#sno').val());
            fd.append("issue_id", jQuery('#issue_id').val());
            fd.append("paper_title", jQuery('#paper_title').val());
            fd.append("author", jQuery('#author').val());
            fd.append("page_no", jQuery('#page_no').val());
            fd.append("file", individual_file);
            fd.append('action', 'college_journal_issue_publish');  
            
            

            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    var issue_id = jQuery('#issue_id').val();
                    window.location = "<?php echo get_buzz_url('college_jounal_issues_publish_list');?>"+'?issue_id='+issue_id;
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