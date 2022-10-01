<?php

#$result2 = smaller($a ,$b ,$c);
#$result3 = equal($a ,$b ,$c);

$a = 12;
$b = 22;
$c = 87;

$result = smaller($a ,$b ,$c);

function smaller($n1 ,$n2 ,$n3) {
    if($n2 < $n1){
       if($n2 < $n3){
        return $n2;
       }
    }

    if($n3 < $n2){
        if($n3 < $n1){
            return $n3;
        }
    }
    if($n1 < $n2){
        if($n1 < $n3){
            return $n1;
        }
    }
    if($n1 == $n2){return $n1;}

    if($n2 == $n3){return $n2;}
   
    if($n1 == $n3){return $n1;}
}
var_dump($result);

#function 3 tane kullan 
#funtion 10 ?

?>