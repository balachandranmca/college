<!-- Srart Contact Us
=========================================== -->		
<section class="contact_us_page">
    <div class="container">
        <div class="row">
            
            <!-- section title -->
            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2>Feedback <span class="color">Form</span></h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->    
            <!-- Contact Form -->
            <div class="contact-form col-md-offset-3 col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <form id="feedback-form" method="post" action="#" role="form">
                
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" class="form-control" name="email" id="email">
                    </div>
                    
                    <div class="form-group">
                        <textarea rows="6" placeholder="Your Comments" class="form-control" name="comment" id="comment"></textarea>	
                    </div>
                    
                    <div id="mail-success" class="success">
                        Thank you. The Mailman is on His Way :)
                    </div>
                    
                    <div id="mail-fail" class="error">
                        Sorry, don't know what happened. Try later :(
                    </div>
                    
                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>						
                    
                </form>
            </div>
            <!-- ./End Contact Form -->
        
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<script>
    jQuery(document).on('click', '#cf-submit', function(e){
        e.preventDefault();
        jQuery('#errorMsg').addClass('hide-error');
        var noerrorFlag = 1;

        if(jQuery('#name').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#email').val()==""){
            noerrorFlag=0;
        }
        if(jQuery('#comment').val()==""){
            noerrorFlag=0;
        }
        if(noerrorFlag){
            var fd = new FormData();
            fd.append("name", jQuery('#name').val()); 
            fd.append("email", jQuery('#email').val());
            fd.append("comment", jQuery('#comment').val());
            fd.append('action', 'college_feedbacks');
            jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    alert("Your feedback is recieved");
                    window.location = "<?php echo site_url();?>";
                }
            });
        }
    });
</script>