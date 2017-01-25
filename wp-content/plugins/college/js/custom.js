jQuery(document).ready(function() { 
    jQuery(document).on('click', '.remove-letter-form', function(){
            jQuery(this).closest("div").remove();
    });    
    var phone_number_form_index=0;
    jQuery("#add_phone_number").click(function(e){
        e.preventDefault();
        phone_number_form_index++;
        jQuery(this).parent().before(jQuery("#phone_number_form").clone().attr("id","phone_number_form" + phone_number_form_index));
        jQuery("#phone_number_form" + phone_number_form_index).css("display","inline");
        jQuery("#phone_number_form" + phone_number_form_index + " :input").each(function(){
            jQuery(this).attr("name",jQuery(this).attr("name") + phone_number_form_index);
            jQuery(this).attr("id",jQuery(this).attr("id") + phone_number_form_index);
            jQuery("#phone_number_form" + phone_number_form_index).find('select').attr("class",'actives');
            jQuery(".hiddens input").attr("class",'btn btn-danger btn-sm remove-letter-form');
            });
    }); 
});