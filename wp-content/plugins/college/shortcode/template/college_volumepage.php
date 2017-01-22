<div class="container volume-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" id="volume-form">
          <fieldset>
            <h3 class="text-center">VOLUME</h3>
            
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Volume name" class="form-control" value="<?php echo $volume['name'];?>">
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
<input type="hidden" id="volumeid" value="<?php echo $volume['id'];?>">
<div id="errorMsg" class='hide-error'>Please fill all fields</div>

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
          jQuery.ajax({
              url: ajaxurl,
              type: 'POST',
              data: {
                  'action':'college_volume',
                  'name' : jQuery('#name').val(),
                  'volumeid' : jQuery('#volumeid').val(),
              },
              success:function(data) {
                  window.location = "<?php echo get_buzz_url('college_volume_list');?>";
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