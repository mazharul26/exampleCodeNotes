<?php
use NumberToWords\NumberToWords;

function numberFormat($number, $decimals=0)
{
    if (strpos($number,'.')!=null)
    {
        $decimalNumbers = substr($number, strpos($number,'.'));
        $decimalNumbers = substr($decimalNumbers, 1, $decimals);
    }
    else
    {
        $decimalNumbers = 0;
        for ($i = 2; $i <=$decimals ; $i++)
        {
            $decimalNumbers = $decimalNumbers.'0';
        }
    }


    $number = (int) $number;
    $number = strrev($number);  // reverse

    $n = '';
    $stringlength = strlen($number);

    for ($i = 0; $i < $stringlength; $i++)
    {
        // from digit 3, every 2 digit () add comma
        if($i==2 || ($i>2 && $i%2==0) ) $n = $n.$number[$i].','; 
        else $n = $n.$number[$i];
    }

    $number = $n;    
    $number = strrev($number); // reverse

    ($decimals!=0)? $number=$number.'.'.$decimalNumbers : $number ;
    if ($number[0] == ',') $number = substr_replace($number, '', 0, 1);
    if ($number[1] == ',' && $number[0] == '-') $number = substr_replace($number, '', 1, 1);      

    return $number;
}


 function numberBreak($amount)
    {
    

    // create the number to words "manager" class
    $numberToWords = new NumberToWords();
    
    $numberTransformer = $numberToWords->getNumberTransformer('en');
   

              $billino = (Int)($amount/1000000000);

              $tenbillion = $billino*1000000;
              if($tenbillion > 0)
              {
                $tenbilliononly = ucfirst($numberTransformer->toWords($tenbillion ?? 0));

                echo $tenbilliononly.'<br>';
              }
           

               $next22amount = ($amount - $tenbillion);
               $crors = (Int)($next22amount/1000000);

                $tencror = $crors*1000000;

                if($tencror > 0)
                {
                    $millionly = ucfirst($numberTransformer->toWords($tencror ?? 0));

                    echo $millionly.'<br>';
                }

               
                $next2amount = ($amount - $tencror);
                $millions = (Int)($next2amount/1000);
                $tenmillions = ($millions*1000);

                if($tenmillions > 0)
                {
                    $thousandonly = ucfirst($numberTransformer->toWords($tenmillions ?? 0));

                    echo $thousandonly.'<br>';
                }
           
                $next3amount = ($next2amount - $tenmillions);

                $thousends = (Int)($next3amount/100);
                $tenthousend = ($thousends*100);

                if($tenthousend > 0)
                {
                    $hundredonly = ucfirst($numberTransformer->toWords($tenthousend ?? 0));

                    echo $hundredonly.'<br>';
                }

               

                $next4amount = ($next3amount - $tenthousend);

                if($next4amount > 0)
                {
                    $numberonly = ucfirst($numberTransformer->toWords($next4amount ?? 0));
                    echo $numberonly;
                }
             


    }



function getBangladeshCurrency( $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Taka = implode('', array_reverse($str));
    $poysa = ($decimal) ? " and " . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' poysa' : '';
    return ($Taka ? $Taka . 'taka ' : '') . $poysa ;
}
