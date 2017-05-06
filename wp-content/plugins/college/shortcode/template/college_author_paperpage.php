<div class="container slider-creator author-paperpage">
	<div class="row">
      <div class="col-md-3">
        <img src="https://www.macupdate.com/images/icons256/8382.png" class="img-responsive center-block" alt="">
      </div>
      <div class="col-md-9 creator-content">
        <div>
            <form class="form-horizontal" enctype="multipart/form-data" name='authorform' id="authorform" method="post">
                <fieldset>
                    <h3 class="text-center">AUTHOR PAPER</h3>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Issue Details </label>
                         <div class="col-md-9">
                            <label class="control-label" for="name"><?php echo $journalName.' - '.$volumeName.' - '.$issue[0]['name'].' - '.$issue[0]['start_date']?></label>
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
</script>