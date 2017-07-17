<input type="hidden" id="journal_color" value="<?php echo $journal['color'];?>">
<section class="journal-viewpage-header">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 headerbanner-img">
            <img src="<?php echo $journal['header_img']['url']?>"/>
        </div>
    </div> 
</section>

<section class="journal-issuespages">
    <div class="container">
            <?php $x = 0; ?>
            <?php foreach ($journal_issue_publish as $key => $value) { ?>
                <?php if($x % 4 == 0) echo '<div class="row">'; ?>
                <div class="col-xs-12 col-sm-4 col-md-3 issues-details">
                    <div class="panel panel-primary">
                        <div class="cnrflash">
                            <div class="cnrflash-inner">
                                <span class="cnrflash-label">PAPER</br>
                                    DETAILS</span>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                CURRENT ISSUES</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h4>PAPER TITLE</h4>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        <?php echo $value['paper_title'];?>
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        <h4>AUTHOR</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $value['author'];?>
                                    </td>
                                </tr>
                                <tr class="active">
                                <td>
                                        <h4>PAGE NUMBER</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $value['page_no'];?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php $pdf_file = json_decode($value['pdf_file'],true);
                        
                        ?>
                        <div class="panel-footer">
                            <a data-id="<?php echo $value['id'];?>" href="<?php echo $pdf_file['url'];?>" class="btn btn-danger download_pdf" download><i class="fa fa-file-pdf-o" aria-hidden="true" ></i> &nbsp;Download PDF</a>
                        </div>
                    </div>
                </div>
                <?php $x++; if($x % 4 == 0) echo '</div>'; ?>
            <?php } ?>
    </div>
</section>
<script>
jQuery(document).on('click', '.download_pdf', function(e){
   var user_id=<?php echo get_current_user_id();?>;
   if( user_id == 0 ){
        alert("please login");
        e.preventDefault();
   }
   else{
       var journalid = jQuery(this).attr('data-id');
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                'action':'college_issue_download',
                'user_id' : user_id,
                'paper_id' : jQuery(this).attr("data-id"),
            },
            success:function(response) {
               
            }
        });
   }
});
</script>