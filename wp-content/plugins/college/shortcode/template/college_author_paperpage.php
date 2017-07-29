<div class="container slider-creator author-paperpage">
	<div class="row">
      <div class="col-md-3">
        <img src="https://quovadisblog.com/wp-content/uploads/2009/02/checklist-icon.jpg" class="img-responsive center-block" alt="">
      </div>
      <div class="col-md-9 creator-content">
        <div>
            <form class="form-horizontal" enctype="multipart/form-data" name='authorform' id="authorform" method="post">
                <fieldset>
                    <h3 class="text-center">AUTHOR PAPER</h3>
                    <?php if($user_role == "administrator"){ ?>
                        <div style="text-align: right;">
                            <a target="_blank" class="btn btn-primary" href="<?php echo get_buzz_url('college_mail').'?id='.$_GET['id']?>">Reviewer Mail</a>
                        </div>
                        <br>
                    <?php } ?>
                    <?php if(($user_role == "author" || $user_role == "administrator") && $author_paper['status']=="published") { ?>
                        <?php foreach ($pdfGeneration as $key => $value) { ?>
                            <div class="text-right">
                                <a target="_blank" class="btn btn-primary" href="<?php echo get_buzz_url('college_certificate_pdf').'?id='.$value['author_issue_paper_id'].'&username='.$value['name'];?>"><?php echo $value['name'];?> Certificate Generate</a>
                            </div>
                            <br>
                        <?php } ?>
                    <?php } ?>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Issue Details </label>
                         <div class="col-md-9">
                         <?php $issueName =  $journalName.' - '.$volumeName.' - '.$issue[0]['name'].' - '.$issue[0]['start_date'];
                         if($user_role == "author") {
                              $issueName =  $journalName;
                         }?>
                            <label class="control-label" for="name"><?php echo $issueName;?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Paper Referrer No </label>
                         <div class="col-md-9">
                            <label class="control-label" for="name"><?php echo $author_paper['paper_referrer_no']?></label>
                        </div>
                    </div>
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
                    <?php if($user_role != "author") { ?>
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="name">User Details </label>
                         <div class="col-md-9">
                            <p class="" for="name"><?php echo $author_user[$author_paper['user_id']];?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($user_role == "administrator") {
                        include_once "college_admin_author_page.php";
                    }
                    if($user_role == "reviewer") { 
                        include_once "college_reviewer_author_page.php";
                    } 
                    if($user_role == "author") {
                        include_once "college_my_author_page.php";
                    }?>

<style>
.hide-error{
    display:none;
}
</style>
<script>
jQuery('body').css('background-color', '#333');
jQuery(document).on('click', '#certificate_pdf', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var fd = new FormData();
        fd.append("paper_id", "<?php echo $_GET['id'];?>"); 
        fd.append('action', 'college_author_certificate_generate'); 
        jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    location.reload();
                }
            });
    });
</script>