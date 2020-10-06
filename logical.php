<?php
$a=30;
$b=30;
$c=$a+$b;
echo $c;
var_dump($a==$b);//value type same;
var_dump($a===$c);//data type and value type same;
$a++ ;//post increment
++$a;//pre increment
if($a==30 || $b==30)
{
echo "bangladesh is beautiful country";
}
else
{
	echo "bangladesh is not beautiful country";
}
echo "<br>";
$d=90;
$f=89;
if($d==90 && $f==89)
{

	echo " bangladesh";

}
else
{
	echo "india";
}
echo "<br>";
$cgpa=73;
if($cgpa>=80)
{
	echo "A+";
}
elseif ($cgpa<75&& $cgpa>=70) {
	echo "A-";
}
else
{
	echo "not";
}
$name="korim";
$id="172-35-2189";
$name.=$id;
echo "<br>";
echo $name;

?>