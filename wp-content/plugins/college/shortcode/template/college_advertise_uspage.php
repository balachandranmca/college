<!-- Srart Contact Us
=========================================== -->		
<section class="contact_us_page advertise_page">
    <div class="container">
        <div class="row">
            
            <!-- section title -->
            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2>Advertise with <span class="color">Us</span></h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->    
            <!-- Contact Form -->
            <div class="contact-form col-md-offset-3 col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <form id="feedback-form" method="post" action="#" role="form">
                
                    <div class="form-group">
                        <input type="text" placeholder="Advertiser Name" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Phone no" class="form-control" name="phoneno" id="phoneno">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
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