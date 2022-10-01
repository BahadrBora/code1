<?php
$result = "PHP";
$result3 = " JS";
$firstname = "Bora";
$surname = "Sevgili";
$a = 6;
$b = 5;
$result = max($a, $b);
$result2 = greater($a ,$b);
var_dump($result); 

#var_dump($result2);
#var_dump($result . $result3);
#var_dump($firstname . " " . $surname);

function greater($n1 ,$n2) {
    if($n1 > $n2){
        return $n1;
    }
    if($n1 < $n2){
        return $n2;
    }
    if($n1 == $n2){
        return $n1;
    }
}
#function 3 tane kullan 
#funtion 10 ?