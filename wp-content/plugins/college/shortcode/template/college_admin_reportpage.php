<div class="container demo slider-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-3">
                    <h3 class="panel-title">Report</h3>
                  </div>
                  <div class="col col-xs-3 text-right">
                    <input type="date" name="from" id="from">
                  </div>
                  <div class="col col-xs-3 text-left">
                    <input type="date" name="to" id="to">
                  </div>
                  <div class="col col-xs-3 text-left">
                    <a href="#" class="report-generate"><button type="button" class=" btn btn-primary ">Submit</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                
              </div>
            </div>
        </div>
    </div>
</div>
<script>
     jQuery( document ).ready(function() {
        jQuery(document).on('change', '#from', function(e){
            jQuery('#to').attr('min', todayDate(jQuery(this).val()));
        });
        jQuery('#from').attr('max', todayDate(new Date()));
        jQuery('#to').attr('max', todayDate(new Date()));
    });
     jQuery(document).on('click', '.report-generate', function(e){
        e.preventDefault();
        
        result=1;
        if((jQuery('#to').val() == "") || (jQuery('#from').val() == "")) result=0;
        if(result) {
            todate = new Date(jQuery('#to').val());
            fromdate = new Date(jQuery('#from').val());
            to = todate.getFullYear()+'/'+(todate.getMonth()+1)+'/'+todate.getDate();
            from = fromdate.getFullYear()+'/'+(fromdate.getMonth()+1)+'/'+fromdate.getDate();
            jQuery('#loader-overlay').show();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_report',
                    'from': from,
                    'to': to
                },
                success:function(response) {
                    var response = jQuery.parseJSON(response);
                    jQuery('.table-responsive').html(response.content);
                    jQuery('#loader-overlay').hide();
                }
            });
        }
        else{
            alert("Please fill date");
        }
     });
    function todayDate(dates) {
        var today = new Date(dates); // get the current date
        var dd = today.getDate(); //get the day from today.
        var mm = today.getMonth()+1; //get the month from today +1 because january is 0!
        var yyyy = today.getFullYear(); //get the year from today

        //if day is below 10, add a zero before (ex: 9 -> 09)
        if(dd<10) {
            dd='0'+dd
        }

        //like the day, do the same to month (3->03)
        if(mm<10) {
            mm='0'+mm
        }

        //finally join yyyy mm and dd with a "-" between then
        return yyyy+'-'+mm+'-'+dd;
    }
</script>