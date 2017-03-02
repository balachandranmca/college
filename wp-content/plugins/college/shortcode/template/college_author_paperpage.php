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
                    <?php if($user_role == "administrator") {
                        include_once "college_admin_author_page.php";
                    }
                    if($user_role == "reviewer") { 
                        include_once "college_reviewer_author_page.php";
                    } ?>

<style>
.hide-error{
    display:none;
}
</style>