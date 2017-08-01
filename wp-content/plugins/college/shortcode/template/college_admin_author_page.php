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
                    <?php foreach ($reviewer_users as $key => $user) { ?>
                        <option value="<?php echo $key;?>"><?php echo $user?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Reviewer 2</label>
            <div class="col-md-9 slider_image">
                <select id="reviewer2">
                    <option value="0">Please Select ..</option>
                    <?php foreach ($reviewer_users as $key => $user) { ?>
                        <option value="<?php echo $key;?>"><?php echo $user?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Reviewer 3</label>
            <div class="col-md-9 slider_image">
                <select id="reviewer3">
                    <option value="0">Please Select ..</option>
                    <?php foreach ($reviewer_users as $key => $user) { ?>
                        <option value="<?php echo $key;?>"><?php echo $user?></option>
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
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Strength</label>
                <div class="col-md-9">
                        <td><input type="text" value="<?php echo $value['strength'];?>" disabled></td>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Weaknesses</label>
                <div class="col-md-9">
                        <td><input type="text" value="<?php echo $value['weekness'];?>" disabled></td>
                </div>
            </div>
            <div class="form-group">
    
    <?php $radiovalues = explode(",",$value['radiovalues']);?>
    <?php if($value['radiovalues']){ ?>
        <table>
            <tr><td class="table_header"><?php echo $user_info->user_nicename;?> Manuscript Review Form</td></tr>
        </table>
        <table width="60%">
            <tr class="table_row">
                <th>S.No</th>
                <th>Item</th>
                <th>Score</th>	
            </tr>
            <tr class="table_row">
                <td>1</td>
                <td>The article title and contents are relevant and   interest to the readers of this journal.</td>
                <td><?php echo $radiovalues[0];?>
            </tr>
            <tr class="table_row">
                <td>2</td>
                <td>The abstract is perfectly reflects the contents.</td>
                <td><?php echo $radiovalues[1];?>
            </tr>
            <tr class="table_row">
                <td>3</td>
                <td>The contents are technically sound.</td>
                <td><?php echo $radiovalues[2];?>
            </tr>
            <tr class="table_row">
                <td>4</td>
                <td>The introduction narrates the background of the article.</td>
                <td><?php echo $radiovalues[3];?>
            </tr>
            <tr class="table_row">
                <td>5</td>
                <td>Materials & Methodology followed/used for the study is sound and appropriate.</td>
                <td><?php echo $radiovalues[4];?>
            </tr>
            <tr class="table_row">
                <td>6</td>
                <td>The supporting evidence in this paper is strongly reliable and properly validated.</td>
                <td><?php echo $radiovalues[5];?>
            </tr>
            <tr class="table_row">
                <td>7</td>
                <td>The results and Discussion part is well explained and interpreted with adequate number of relevant Figures, Tables, Photographs/ etc. </td>
                <td><?php echo $radiovalues[6];?>
            </tr>
            <tr class="table_row">
                <td>8</td>
                <td>The quality of the Figures, Tables, Photographs/ etc.</td>
                <td><?php echo $radiovalues[7];?>
            </tr>
            <tr class="table_row">
                <td>9</td>
                <td>Conclusions are very brief and sound.</td>
                <td><?php echo $radiovalues[8];?>
            </tr>
            <tr class="table_row">
                <td>10</td>
                <td>References are relevant, recent and selective.</td>
                <td><?php echo $radiovalues[9];?>
            </tr>
            <tr class="table_row">
                <td>11</td>
                <td>How the sequence/continuity of the contents of the article are arranged.</td>
                <td><?php echo $radiovalues[10];?>
            </tr>
            <tr class="table_row">
                <td>12</td>
                <td>English language, Grammar & Spellings of the manuscript.</td>
                <td><?php echo $radiovalues[11];?>
            </tr>
            <tr class="table_row">
                <td>13</td>
                <td>The manuscript is easy to read and understand.</td>
                <td><?php echo $radiovalues[12];?>
            </tr>
            <tr class="table_row">
                <td>14</td>
                <td>Innovative work in the paper which is different from others.</td>
                <td><?php echo $radiovalues[13];?>
            </tr>
            <tr class="table_row">
                <td>15</td>
                <td>Authors contribution in this research paper.</td>
                <td><?php echo $radiovalues[14];?>
            </tr>
        </table>
    <?php } ?>
</div>

         <?php } ?>
         <div class="form-group">
                <label class="col-md-3 control-label" for="name">Status</label>
                <div class="col-md-9 slider_image">
                    <select id="status">
                        <option value="0">Please Select</option>
                        <option value="accept"<?php if($author_paper['status']=="accept"){echo " selected";}?>>Accept</option>
                        <option value="reject"<?php if($author_paper['status']=="reject"){echo " selected";}?>>Reject</option>
                        
                        <option value="modify"<?php  if($author_paper['status']=="modify"){echo " selected";}?>>Modification</option>
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
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Published Date</label>
                <div class="col-md-9">
                        <td><input id= 'publishedDate' type="text" value="<?php echo $author_paper['published_date'];?>" ></td>
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
        var publishedDate = '';
        if(jQuery('#publishedDate').val()!=''){
            publishedDate = jQuery('#publishedDate').val()
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
            fd.append("publishedDate", publishedDate);

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
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 60%;
    margin: 0 auto;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        /*background-color: #dddddd;*/
    }

    .page_header{
        margin: 30px auto;
    }

    .table_header{
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            text-transform: capitalize;
            letter-spacing: 1px;
            color: #ff0000;
    }

    .Page_title{
            border: 0;
            color: #483d8b;
            font-weight: bold;
            font-family: serif;
            font-style: italic;
            text-align: center;
            font-size: 22px;
    }

    .table_row th, .table_row td{
        text-align: center;
    }
    
    .table_row td:nth-child(2){
        text-align: left;
    }
</style>