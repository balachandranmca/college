<!-- Srart Contact Us
=========================================== -->		
<section class="contact_us_page">
    <div class="container">
        <div class="row">
            
            <!-- section title -->
            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2>We are Willing to <span class="color"> Help Us</span></h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->
            
            <!-- Contact Details -->
            <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                <div class="col-md-12 box">
                    <div>
                        <h3>Address</h3>
                        <p>Pondicherry,</br>India.</p>
                    </div>
                </div>
                <div class="col-md-12 box">
                    <div>
                        <h3>Mobile Number</h3>
                        <p>+91-9786777229</p>
                    </div>
                </div>
                <div class="col-md-12 box">
                    <div>
                        <h3>Email Address</h3>
                        <p>editor@ijrests.org</p>
                    </div>
                </div>
            </div>
            <!-- / End Contact Details -->
                
            <!-- Contact Form -->
            <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <form id="contact-form" method="post" action="sendmail.php" role="form">
                
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" class="form-control" name="email" id="email">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Country" class="form-control" name="subject" id="subject">
                    </div>
                    
                    <div class="form-group">
                        <textarea rows="6" placeholder="Your Query" class="form-control" name="message" id="message"></textarea>	
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