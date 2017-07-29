<div class="container slider-creator">
	<div class="row">
      <div class="col-md-3">
        <img src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/portfolio.png" class="img-responsive center-block" alt="">
      </div><!--.col -->
      <div class="col-md-6 creator-content">
        <div style="font-size: larger;font-weight: 600;    margin-bottom: 50px;">
            <span class="text-center custom-color" id="custom" style="margin-right: 50px;cursor: pointer;">Existing PDF</span>
            <span class="text-center" id="general" style="cursor: pointer;">New PDF</span>
        </div>
        <div>
            <form class="form-horizontal" enctype="multipart/form-data" name='imageform' id="imageform" method="post">
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Author Paper List</label>
                        <div class="col-md-9">
                            <select id="author_issue_paper_id" class="volume_dropdown">
                            <option value="0">Select Paper...</option>
                            <?php foreach ($authorPaperList as $key => $authorPaperListValue) { ?>
                                <option value="<?php echo $authorPaperListValue['id'];?>"><?php echo $authorPaperListValue['paper_referrer_no'];?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- Name input-->
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Author name" class="form-control" value="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-6 text-right">
                            <button type="submit" name="image_upload" id="preview" class="btn btn-primary btn-lg">Preview</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" name="image_upload" id="image_upload" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                     </div>
                </fieldset>
                
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
                
                <!--<input type="submit" class="pull-right" value="Upload" name="image_upload" id="image_upload" class="btn"/>-->
            </form>
            </div>
            <div class="hidden" id="general-pdf">
                <div class="form-group row">
                    <label class="col-md-3 control-label" for="name">Journal Id</label>
                    <div class="col-md-9">
                        <select id="journal_id" class="volume_dropdown">
                        <option value="0">Select Journal...</option>
                        <?php foreach ($journal as $key => $journalValue) { ?>
                            <option style="background-color: #<?php echo $journalValue['color'];?>" value="<?php echo $journalValue['id'];?>"><?php echo $journalValue['name'];?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 control-label" for="name">Author name</label>
                    <div class="col-md-9">
                        <input id="username" name="username" type="text" placeholder="Author name" class="form-control" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label" for="name">Paper Title</label>
                    <div class="col-md-9">
                        <input id="paper_title" name="paper_title" type="text" placeholder="Paper Title" class="form-control" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label" for="name">Volume name</label>
                    <div class="col-md-9">
                        <input id="volume" name="volume" type="text" placeholder="Volume name" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 control-label" for="name">Published Date</label>
                    <div class="col-md-9">
                        <input id="published_date" name="published_date" type="text" placeholder="Published Date" class="form-control" value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <button type="submit" name="image_upload" id="pdf-generate" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
                <div id="errorMsg" class='hide-error'>Please fill all fields</div>
            </div>
      </div>
</div>
<script>
    jQuery(document).on('click', '#pdf-generate', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        
        if(jQuery('#journal_id').val()=="0" || jQuery('#username').val()=="" || jQuery('#paper_title').val()=="" || jQuery('#volume').val()=="" || jQuery('#published_date').val()==""){
            alert('Please fill all the fields');
        }
        else{
            var journal_id        = jQuery('#journal_id').val();
            var username    = jQuery('#username').val();
            var paper_title = jQuery('#paper_title').val();
            var volume      = jQuery('#volume').val();
            var published_date = jQuery('#published_date').val();
            var uri = "<?php echo get_buzz_url(college_certificate_pdf);?>?journal_id="+journal_id+"&username="+username+"&paper_title="+paper_title+"&volume="+volume+"&published_date="+published_date;
            window.open(encodeURI(uri), '_blank')

        }
    });
    jQuery(document).on('click', '#preview', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        
        if(jQuery('#author_issue_paper_id').val()=="" || jQuery('#name').val()==""){
            alert('Please fill all the fields');
        }
        else{
            var author_issue_paper_id = jQuery('#author_issue_paper_id').val();
            var name = jQuery('#name').val();
            var uri = "<?php echo get_buzz_url(college_certificate_pdf);?>?id="+author_issue_paper_id+"&username="+name;
            window.open(encodeURI(uri), '_blank')

        }
    });
    jQuery(document).on('click', '#image_upload', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;

        if(jQuery('#author_issue_paper_id').val()=="" || jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
            var fd = new FormData();
            var author_issue_paper_id = jQuery('#author_issue_paper_id').val();
            var name = jQuery('#name').val();
            fd.append("author_issue_paper_id", author_issue_paper_id);
            fd.append("name", name);
            fd.append('action', 'college_pdf_generation');  
            
            
            jQuery('#loader-overlay').show();
            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    jQuery('#loader-overlay').hide();
                    alert("Created Successfully");
                    window.location = "<?php echo get_buzz_url('college_pdf_generation_list');?>";
                }
            });
        }
        else{
            jQuery('#errorMsg').removeClass('hide-error');
        }
    });
    jQuery('body').css('background-color', '#333');
    jQuery(document).on('click', '#general', function(e){
        jQuery('#general').addClass('custom-color');
        jQuery('#custom').removeClass('custom-color');
        jQuery('#imageform').addClass('hidden');
        jQuery('#general-pdf').removeClass('hidden');
    });
    jQuery(document).on('click', '#custom', function(e){
        jQuery('#custom').addClass('custom-color');
        jQuery('#general').removeClass('custom-color');
        jQuery('#imageform').removeClass('hidden');
        jQuery('#general-pdf').addClass('hidden');
    });
    
</script>
<style>
.hide-error{
    display:none;
}
.custom-color{
    background: deepskyblue;
    padding: 15px;
    border-radius: 15px;
}
</style>