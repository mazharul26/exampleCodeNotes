
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
