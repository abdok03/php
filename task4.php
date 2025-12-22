<?php
function primnumber($num){
    if($num < 2) {
        echo "$num   is a prime number";
        return;
    }

    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            echo "$num  is not a prime number";
            return;
        }
    }
    echo "$num   is a prime ";
}

primnumber(3);
echo "<br>";
function reseve($s){
   $re= strrev($s);
    
    echo ($re);
}
reseve("remove");
    echo "<br>";
    function cheeck_lower($b){
        if(strtolower($b)==$b){
            echo "your string is ok";
        }
        else {
            echo "your string not ok";
        }
    }
    cheeck_lower("remove");
    echo "<br>";
    function switch_value($x,$y)  {
        $z=$x;
        $x=$y;
        $y=$z;
        echo "x=$x  y=$y";
    }
    switch_value(5,6);
    echo "<br>";
    function armstrong($j) {
        $sum=0;
        $digit=str_split($j);
        $po=count($digit);
        foreach($digit as $d){
$sum += pow($d, $po);
        }
       if($sum == $j){
    echo "$j  is Armstrong";
} else {
    echo "$j  is not  Armstrong";
}


    }
    armstrong(407);
    echo "<br>";
    function palind($text) {
        $clean = preg_replace("/[^a-zA-Z0-9]/", "", $text);
        $clean = strtolower($clean);
       $newtext =strrev($clean);
       if($newtext == $clean){
        echo " Yes it is a palindrome";
       }else{
        echo "  it is not a palindrome";
       }
    }
    palind("Eva, can I see bees in a cave?");
    echo "<br>";
    function rem_debl($ar) {   
        $ar2 = [];
        foreach($ar as $value){
         if(!in_array($value, $ar2)){  
        $ar2[] = $value; }
         }
         print_r($ar2);
    }
    rem_debl(array(2, 4, 7, 4, 8, 4));
?>
