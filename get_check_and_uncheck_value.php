<?php
function check_uncheck_checkbox(isChecked) {
	if(isChecked) {
		$('.maintenance_details_id').each(function() { 
			this.checked = true; 
            totalPaid();

		});
	} else {
		$('.maintenance_details_id').each(function() {
			this.checked = false;
            $('.grand_total_text').html(' ');
            grand_total_text =0;
		});
	}
   } 



    $("input:checkbox.maintenance_details_id").click(function() {
        if($(this).is(":checked"))
        {
            var credit_amount = $(this).parent().find('.monthly_fee').data('monthly_fee_data');
            var grand_total = $('.grand_total_text').html();
           // alert(grand_total);
             if(!credit_amount) credit_amount=0.00;
             grand_total_text +=credit_amount;
             grand_total_text = (grand_total_text);
          $('.grand_total_text').html(grand_total_text); 
        }
        if(!$(this).is(":checked"))
        {
            var credit_amount = $(this).parent().find('.monthly_fee').data('monthly_fee_data');
            var grand_total = parseFloat($('.grand_total_text').html());
             if(!credit_amount) credit_amount=0.00;
             grand_total_text -=credit_amount;
             grand_total_text = (grand_total - credit_amount);
          $('.grand_total_text').html(grand_total_text);   
        }
       
    }); 
