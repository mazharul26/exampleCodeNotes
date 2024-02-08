

<script>


$(document).on('change', '.customer_id,.advance_or_bill_status,.paying_method,.checked_for_amount', function() {
        
        var deposit = $('.customer_id').find('option:selected').data('deposit');
        var expense = $('.customer_id').find('option:selected').data('expense');
      //  console.log([deposit,expense,'ok sir 1']);
       var advance_or_bill_status = $('.advance_or_bill_status').find('option:selected').val();
       var customer_id = $('.customer_id').find('option:selected').val();
       var paying_method = $('.paying_method').find('option:selected').val();
       var balance = (parseFloat(deposit) - parseFloat(expense));
     
       var grand_total = parseFloat($(".grand_credit_amount").val());
       if(!grand_total) grand_total = 0;
       if(!balance) balance = 0;
       if(advance_or_bill_status == 2 && paying_method == 3)
       {
           
       // alert(balance);
        if(balance <= grand_total)
            {
                alert('Customer Balance less then Payment Amount');
                $(".save_deposit_check").attr("disabled", true);
            }else{

                $(".save_deposit_check").attr("disabled", false);
            }
       }else{

        $(".save_deposit_check").attr("disabled", false);
       }
    });
	
	</script>