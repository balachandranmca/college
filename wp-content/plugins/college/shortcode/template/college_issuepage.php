<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" id="issue-form">
          <fieldset>
            <legend class="text-center">ISSUE</legend>
            
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Issue No</label>
              <div class="col-md-9">
                <input id="issue_no" name="issue_no" type="text" placeholder="Issue No" class="form-control" value="<?php echo $issue['issue_no'];?>">
              </div>
            </div>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Issue name" class="form-control" value="<?php echo $issue['name'];?>">
              </div>
            </div>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Date</label>
              <div class="col-md-9">
                <input id="date" name="date" type="text" placeholder="Issue Date" class="form-control" value="<?php echo $issue['start_date'];?>">
              </div>
            </div>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Volume Id</label>
              <div class="col-md-9">
                <select id="volume_id">
                  <option value="0">Select Volume...</option>
                  <?php foreach ($volumeList as $key => $volumeValue) { ?>
                    <option value="<?php echo $volumeValue['id'];?>"<?php if($issue['volume_id']==$volumeValue['id']){echo ' selected';}?>><?php echo $volumeValue['name'];?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Journal Id</label>
              <div class="col-md-9">
                <select id="journal_id">
                  <option value="0">Select Journal...</option>
                  <?php foreach ($journalList as $key => $journalValue) { ?>
                    <option value="<?php echo $journalValue['id'];?>"<?php if($issue['journal_id']==$journalValue['id']){echo ' selected';}?>><?php echo $journalValue['name'];?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<input type="hidden" id="issueid" value="<?php echo $issue['id'];?>">
<div id="errorMsg" class='hide-error'>Please fill all fields</div>

<script>
    

    jQuery( "#issue-form" ).submit(function( event ) {
        event.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#issue_no').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#date').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#volume_id').val()=="0"){
            noerrorFlag=0;
        }
        if(jQuery('#journal_id').val()=="0"){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_issue',
                  'issue_no' : jQuery('#issue_no').val(),
                  'name' : jQuery('#name').val(),
                  'date' : jQuery('#date').val(),
                  'volume_id' : jQuery('#volume_id').val(),
                  'journal_id' : jQuery('#journal_id').val(),
                  'issueid' : jQuery('#issueid').val(),
              },
              success:function(data) {
                  window.location = "<?php echo get_buzz_url('college_issue_list');?>";
              },
              error: function(errorThrown){
                  console.log(errorThrown);
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