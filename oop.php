<?php
class MyClass {
    public function __construct() {
        echo "MyClass class has initialized!"."\n";
    }
    public function  q2($name) {
        echo "Hello All, I am $name"."\n";
    }
    public function  factorial($num) {
        $sum=1;
        for ($i = 1; $i <= $num; $i++) {
            $sum*= $i;
        }
        echo$sum ."\n";
    }

}
class ArraySorter {
    public function sortarr($arr) {
         sort($arr);
        print_r($arr) ;
    }

}
class DateDifference{
    public function dateDiff($date1, $date2) {
    $d1= new DateTime($date1);
    $d2= new DateTime($date2);
    $im = $d1->diff($d2);
    echo "Difference : "
            . $im->y . " years, "
            . $im->m . " months, "
            . $im->d . " days"."\n"
        ;
    }
    public function convertdate($date1) {
        $d1= new DateTime($date1);
       $re= $d1->format("Y-m-d");

        echo $re;
    }
    
}
$object = new MyClass();
$object->q2("abdullah");
$object->factorial(5);
$a= new ArraySorter();
$a->sortarr([11, -2, 4, 35, 0, 8, -9]);
$d= new DateDifference();
$d->dateDiff("11-10-2002", "10-7-2003");
$d->convertdate("10-7-2003");
?>
