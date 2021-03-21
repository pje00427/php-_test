<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>

<?php
class Test
{
    private $varr = '이거지';
     public static function getNew()
    {
        return new static ;
    }
}

class Child extends Test
{}

//$obj1 = new Test();
//$obj2 = new $obj1;
//var_dump($obj1 !== $obj2);

//$obj3 = Test::getNew();
$test = new Test();
//$obj3 = $test->getNew();
$obj3 = Test::getNew();
//$obj4 = Test::$varr;
//echo $obj4;
var_dump($obj3 instanceof Test);

//$obj4 = Child::getNew();
//var_dump($obj4 instanceof Child);
?>
</body>
</html>