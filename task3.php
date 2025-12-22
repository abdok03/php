<?php
for($i=0; $i<=10;$i++){
    echo $i."-";
}
echo "<br>";
$sum=0;
for($i=0;$i<=30;$i++){
    $sum+=$i;
}
echo $sum;
echo "<br>";
$arr = ["A","B","C","D","E"];
$n = count($arr);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0) {
            echo $arr[0] . " ";
        } elseif ($i == 1) {
            echo ($j < 3) ? $arr[0] . " " : $arr[1] . " ";
        } elseif ($i == 2) {
            echo ($j < 2) ? $arr[0] . " " : $arr[2] . " ";
        } elseif ($i == 3) {
            echo ($j == 0) ? $arr[0] . " " : $arr[3] . " ";
        } else {
            echo $arr[4] . " ";
        }
    }
    echo "<br>"; 
}
echo "<br>";

$arr = [1,2,3,4,5];
$n = count($arr);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 0) {
            echo $arr[0] . " ";
        } elseif ($i == 1) {
            echo ($j < 3) ? $arr[0] . " " : $arr[1] . " ";
        } elseif ($i == 2) {
            echo ($j < 2) ? $arr[0] . " " : $arr[2] . " ";
        } elseif ($i == 3) {
            echo ($j == 0) ? $arr[0] . " " : $arr[3] . " ";
        } else {
            echo $arr[4] . " ";
        }
    }
    echo "<br>"; 
}


?>