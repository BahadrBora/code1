<?php

function greater($n1, $n2, $n3) {
    //return max($n1, $n2, $n3);

    if ($n1 > $n2) {
        if ($n1 > $n3) {

            // n1 > n2, n3
            return $n1;
        }

        // n3 > n1 > n2
        return $n3;
    }

    if ($n2 > $n3) {
        // n2 > n1, n3
        return $n2;
    }

    return $n3;
}

function greaterOld($n1 ,$n2 ,$n3) {
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