<section class="feespage">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content-one">
                <h2>Payment of Fees</h2>
                <hr>
                <h3>Manuscript Processing Charge</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Standard Author</th>
                            <th>Editorial Board Member</th>
                            <th>Student / Research Scholar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Indian Author (₹)</td>   
                            <td><?php echo get_option('indian_standard');?></td>
                            <td><?php echo get_option('indian_editor');?></td>
                            <td><?php echo get_option('indian_student');?></td>
                        </tr>
                        <tr>
                            <td>Foriegn Author US ($)</td>   
                            <td><?php echo get_option('foriegn_standard');?></td>
                            <td><?php echo get_option('foriegn_editor');?></td>
                            <td><?php echo get_option('foriegn_student');?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 content-two">
                <h2>Pay Fees Online</h2>
                <hr>
                <h3>Manuscript Handling Charges As Applicable</h3>
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Payment <span class="color">Options</span></h2>
                    <div class="border"></div>
                </div>
                <h4>Option 1 : By cash deposit in any HDFC bank Branch</h4>
                <h4>Option 2 : By online netbanking</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
         <div class="col-md-8 payment-details">            
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>Bank Name</td>
                    <td><?php echo get_option('bank_name');?></td>
                </tr>
                 <tr>
                     <td>Bank Address</td>
                     <td><?php echo get_option('bank_address');?></td>
                 </tr>
                 <tr>
                      <td>Branch Code</td>
                     <td><?php echo get_option('bank_code ');?></td>
                 </tr>
                 <tr>
                      <td>Account Name</td>
                     <td><?php echo get_option('account_name');?></td>
                 </tr>
                 <tr>
                      <td>Account No</td>
                     <td><?php echo get_option('account_no');?></td>
                 </tr>
                 <tr>
                     <td>Account Type</td>
                     <td><?php echo get_option('account_type');?></td>
                 </tr>
                 <tr>
                      <td>IFSC</td>
                     <td><?php echo get_option('ifsc');?></td>
                 </tr>
                 <tr>
                      <td>MICR Code</td>
                     <td><?php echo get_option('micr');?></td>
                 </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>