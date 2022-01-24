<?php
function sum($Bangla, $English,$science)
     {$totalsum=($Bangla+$English+$science);
     return $totalsum;
           }

     $result=sum(34,67,89);

     echo $result;

echo "<br>";
 function sum1($Bangla, $English,$science)
{

return $Bangla+$English+$science;
}
 // echo sum1(45,55,55);
 
 $totalreslt= sum(34,56,657);
 $totalsub= 3;

function average ($totalreslt,$totalsub)
{

return $totalreslt/$totalsub;

}

$avr= average($totalreslt,$totalsub);
 echo $avr;




?>