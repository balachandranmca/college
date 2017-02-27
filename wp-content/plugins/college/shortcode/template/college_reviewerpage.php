<div class="container issue-creator">
	<div class="row">
      <div class="col-md-6 creator-content">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" id="reviewer-form">
          <fieldset>
            <h3 class="text-center">Reviewer Creation</h3>
            
            <!-- Name input-->
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="username" id="uname" tabindex="1" class="form-control" placeholder="Username" value="" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                      <input type="number" name="phone no" id="phoneno" tabindex="1" class="form-control" placeholder="Phone no" value="" required min="1">
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
  jQuery( "#reviewer-form" ).submit(function( event ) {
        event.preventDefault();
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                'action':'college_reviewer',
                'username' : jQuery('#uname').val(),
                'email' : jQuery('#email').val(),
                'phoneno' : jQuery('#phoneno').val()
            },
            success:function(response) {
                var response = jQuery.parseJSON(response);
                if (response.success){
                    alert("Successfully Registered. New Password sent to Reviewer Registerd Email");
                    window.location.replace(response.url);
                }else if(response){
                    alert("Already UserEmail Exist !!!");
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });  

                
    });
</script>
<style>
  .hide-error{
    display:none;
  }
</style>