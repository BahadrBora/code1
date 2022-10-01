<?php

#$result2 = smaller($a ,$b ,$c);
#$result3 = equal($a ,$b ,$c);

$a = 5;
$b = 5;
$c = 5;

$result = greater($a ,$b ,$c);

function greater($n1 ,$n2 ,$n3) {
    if($n2 > $n1){
       if($n2 > $n3){
        return $n2;
       }
    }

    if($n3 > $n2){
        if($n3 > $n1){
            return $n3;
        }
    }
    if($n1 > $n2){
        if($n1 > $n3){
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