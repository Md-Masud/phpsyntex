<?php
var_dump( define('',''));
define('min', '876');
//public const ver=0.7;
//public function cal()
//{
	//self::ver;
//}
?>
<?php

class A
{
    function foo()
    {
       echo " i lave my country";
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
//$a->foo();

//A::foo();

$b = new B();
$b->bar();

B::bar();
?>