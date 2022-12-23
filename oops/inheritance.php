<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>
<body>
    
</body>
</html>
<?php
// multilevel inheritance
// class A{
//     function test1(){
//         echo "a class<br>";
//     }
// }

// class B extends A {
//     function test2(){
//         echo "b class<br>";
//     }
// }

// class C extends B {
//     function test3(){
//         echo "c class<br>";
//     }
// }

// class D extends C {
//     function test4(){
//         echo "d class<br>";
//     }
// }

// $greet = new D();
// $greet->test1();
// $greet->test2();
// $greet->test3();
// $greet->test4();


class A{
    function intro(){}
    function test1(){
        echo "A class<br>";
    }
}

class B extends A {
    function intro(){
        echo "B intro<br>";
    }

    function test2(){
        echo "B class<br>";
    }
}

// class C extends A {
//     function test3(){
//         echo "c class<br>";
//     }
// }

$greet = new B();
$greet->test1();
$greet->test2();
$greet->intro();


// $greet2 = new C();
// $greet2->test1();
// $greet2->test3();