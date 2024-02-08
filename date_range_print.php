
<?php
 $datesArray = []; 
    $timePeriod = new DatePeriod(
        new DateTime('2021-01-01'),
        new DateInterval('P1D'),
        new DateTime('2021-01-10')
    );

    foreach ($timePeriod as $key => $value) {
        $date = $value->format('Y-m-d');    
        $datesArray[] = $date;  
    }

  //  print_r($datesArray);
    foreach($datesArray as $val)
    {
    	echo $val;"<br>";
    }


?> 