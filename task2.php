  <?php
// $color = ["red", "green", "white"];

// $p = "The memory of that scene for me is like a frame of film forever frozen at that moment: ";
// $p .= "the {$color[0]} carpet, the {$color[1]} lawn, the {$color[2]} house, the leaden sky. The new president and his first lady. -Richard M. Nixon ";
// $p .= "The words $color[0], {$color[1]} and {$color[2]} should come from \$color array.";

// echo $p;
// //task2
// $color1=['white','green','red'];
// $oldcolor=['green','red','white'];
// echo "<ul>";
// foreach ($oldcolor as $color1 ){
//      echo "<li> $color1</li>";
// }
// echo "</ul>";
// //task3
// echo "<br>";
// $cities= array( "Jordan"=>"Amman", "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
// asort($cities);
// foreach($cities as $country => $capital){
//     echo "the capital of {$country}  is {$capital} <br>";
// }
// $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
//ex -->
// $num=3;
// if($num>0){
//     echo "the number is postive ";
// }
// else if($num <0){
//     echo "the number is negative ";
// }else if($num ==0){
//     echo "the number is zero";
// }
// $fruit="banana";
// switch($fruit){
//     case "apple":echo "apple";
//     break;
//     case "freez": echo "freez";
//     break;
//     case "banana": echo "banana";
//     break;
//     default: echo " unkwon";

// }
// echo "<br>";
// for($i=2 ; $i<=10;$i+=2){
//     echo $i." ";
// }
// echo "<br>";
// $movies =["fast","sport","action", "asdas"];
// foreach($movies as $m)
//     echo $m." ";
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);
echo "<br>";
$arr=[1,2,3,4,5];
array_splice($arr,3,0,"$");
print_r($arr);
echo "<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
print_r($fruits);
echo "<br>";
$av=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum=0;
foreach($av as $value){
    $sum+=$value;
}
echo $sum;
echo "<br>";
echo $sum/count($av);
rsort($av);
$top_7=array_slice($av,0,7);
echo "<br>";
asort($top_7);
print_r($top_7);
echo "<br>";
asort($av);
$lis_7=array_slice($av,0,7);
print_r($lis_7);
echo "<br>";
$array1 = array("color" => "red", 2, 4); 
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$merged=array_merge($array1,$array2);
print_r($merged);
echo "<br>";
$colors = array("red","blue", "white","yellow");
$upp=array_map("strtoupper",$colors);
print_r($upp);
echo "<br>";
$colors1 = array("RED","BLUE", "WHITE","YELLOW");
$low=array_map("strtolower",$colors1);
print_r($low);
echo "<br>";
for($i=200; $i<=250;$i++){
    if($i %4==0)
        echo $i." ";
    
}
echo "<br>";
$words = array("abcd","abc","de","hjjj","g","wer");
$minlen=PHP_INT_MAX;
$maxlen=0;
foreach($words as $words){
    $len=strlen($words);
    if($len<$minlen){
        $minlen=$len;
    }
    if($len >$maxlen){
        $maxlen=$len;
    }
}
echo "Shortest length: $minlen\n";
echo "Longest length: $maxlen\n";
echo "<br>";
$min=11;
$max=20;
$number=range($min,$max);
shuffle($number);
print_r($number);
echo "<br>";
$array11 = array(2, 0, 10, 12, 6);

$positiveNumbers = array_filter($array11, fn($v) => $v > 0);
$min = min($positiveNumbers);

echo $min;


?>



