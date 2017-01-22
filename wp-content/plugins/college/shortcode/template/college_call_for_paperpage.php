<div class="container callfor_paperpage">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" id="volume-form">
          <fieldset>
            <h3 class="text-center">CALL FOR PAPER</h3>
            <!-- Name input-->
            <div class="form-group input_fields_wrap">
              <?php $i=1; ?>
              <?php foreach ($issueActiveList as $key1 => $value1) { ?>
                <div id="phone_number_form<?php echo $i;?>" class="remove-btn">
                    <p>
                        <select class="actives">
                            <?php foreach ($issueList as $key => $value) { ?>
                                <option value="<?php echo $value['id'];?>" <?php if($value1['id']==$value['id']){echo 'selected';}?>><?php echo $journal[$value['journal_id']].' '.$volume[$value['volume_id']].' '.$value['name'];?></option>
                            <?php } ?>
                        </select> 
                        <input type="button" class="btn btn-danger btn-sm" id="remove_phone_number" value="Remove">
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
                    <input type="button" class="btn btn-danger btn-sm" id="remove_phone_number" value="Remove">
                </p>
              </div>
            </div>
            <input type="button" class="btn btn-success btn-lg" value="Add" id="add_phone_number">
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          <!--<div id="errorMsg" class='hide-error'>Please fill all fields</div>-->
          </form>
        </div>
      </div>
	</div>
</div>
<script>
    
    jQuery(document).ready(function() {      
      var phone_number_form_index=0;
      jQuery("#add_phone_number").click(function(){
          phone_number_form_index++;
          jQuery(this).parent().before(jQuery("#phone_number_form").clone().attr("id","phone_number_form" + phone_number_form_index));
          jQuery("#phone_number_form" + phone_number_form_index).css("display","inline");
          jQuery("#phone_number_form" + phone_number_form_index + " :input").each(function(){
              jQuery(this).attr("name",jQuery(this).attr("name") + phone_number_form_index);
              jQuery(this).attr("id",jQuery(this).attr("id") + phone_number_form_index);
              jQuery(this).attr("class",'actives');
              });
          jQuery("#remove_phone_number" + phone_number_form_index).click(function(){
              jQuery(this).closest("div").remove();
    
          });
        }); 
    });

    jQuery( "#volume-form" ).submit(function( event ) {
        event.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;
        if(jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        
        if(noerrorFlag){
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          var arr = jQuery('select.actives').map(function(){return this.value}).get()
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_call_for_paper',
                  'active' : arr,
              },
              success:function(data) {
                  alert("Saved Successfully");
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
  .hiddens {
    display: none;
}
</style>