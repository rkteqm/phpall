<?php

// Overloading is defining functions that have similar signatures, yet have different parameters.
echo "Method overloading using <b>__call</b> magic function<br><br>";
class MethodOverloading
{
    public function __call($fcn_name,$arr){
        // echo "$fcn_name --With object reference <br/>";
        // print_r($arr);
// echo'<br>';
// print_r($arr[1]);
// echo'<br>';

$sum = 0;
$app = "";
foreach($arr as $value){
    $app.=$value.", ";
    $sum += $value;
}
echo "Sum of ".$app." : ".$sum."<br><br>";

}
}
$obj = new MethodOverloading;
$obj->hello(10, 20, 30);
$obj->hello(10, 20, 30, 40);


echo "Method overloading using <b>__callStatic</b> magic function<br><br>";
class MethodOverloadingbystatic
{
    public static function __callStatic($name, $arguments)
    {
        // echo "$name --With object reference <br/>";
        // print_r($arguments);
        // echo'<br>';
        // print_r($arguments[1]);
        // echo'<br>';

        $sum = 0;
        $app = "";
        foreach ($arguments as $value) {
            $app .= $value . ", ";
            $sum += $value;
        }
        echo "Sum of " . $app . " = " . $sum . "<br><br>";
    }
}
MethodOverloadingbystatic::world(10, 20);
MethodOverloadingbystatic::world(10, 20, 50);
