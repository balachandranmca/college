<div class="container callfor_paperpage">
	<div class="row">
    <div class="col-md-3">
        <img src="https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/256/call-group.png" class="img-responsive center-block" alt="">
    </div><!--.col -->
      <div class="col-md-6 creator-content">
        <div class="">
          <form class="form-horizontal text-center" action="" method="post" id="volume-form">
         
            <h3 class="text-center">CALL FOR PAPER</h3>
            <!-- Name input-->
            <div class="input_fields_wrap">
              <?php $i=1; ?>
              <?php foreach ($issueActiveList as $key1 => $value1) { ?>
                <div id="phone_number_form<?php echo $i;?>" class="remove-btn">
                    <p>
                        <select class="actives">
                            <?php foreach ($issueList as $key => $value) { ?>
                                <option value="<?php echo $value['id'];?>" <?php if($value1['id']==$value['id']){echo 'selected';}?>><?php echo $journal[$value['journal_id']].' '.$volume[$value['volume_id']].' '.$value['name'];?></option>
                            <?php } ?>
                        </select> 
                        <input type="button" class="btn btn-danger btn-sm remove-letter-form" id="remove_phone_number" value="Remove">
                    </p>
                </div>
                <?php $i++; ?>
              <?php } ?>
              

              <div id="phone_number_form" class="hiddens" class="remove-btn">
                <p>
                    <select class="call_for_paper_dropdown">
                        <?php foreach ($issueList as $key => $value) { ?>
                            <option value="<?php echo $value['id'];?>"><?php echo $journal[$value['journal_id']].' '.$volume[$value['volume_id']].' '.$value['name'];?></option>
                        <?php } ?>
                    </select> 
                    <input type="button" class="btn btn-danger btn-sm remove-letter-form" id="remove_phone_number" value="Remove">
                </p>
              </div>
              <div class="app">
              </div>
               <input type="button" class="btn btn-success btn-lg" value="Add" id="add_phone_number">
                <input type="submit" value="submit" class="btn btn-primary btn-lg">
            </div>
          <!--<div id="errorMsg" class='hide-error'>Please fill all fields</div>-->
          </form>
        </div>
      </div>
	</div>
</div>
<script src="<?php echo WP_BAG_PL_JS.'custom.js'?>"></script>
<script>
    jQuery( "#volume-form" ).submit(function( event ) {
        event.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          var arr = jQuery('select.actives').map(function(){return this.value}).get();
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_call_for_paper',
                  'active' : arr,
              },
              success:function(data) {
                  alert("Saved Successfully");
                  location.reload();
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
     jQuery('body').css('background-color', '#333');
</script>
<style>
  .hiddens {
    display: none;
}
</style>