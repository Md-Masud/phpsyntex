	<?php
$a=1;
while($a<10)
{
echo "bangladesh";
echo "<br>";
$a++;
}
$b=1;
do {

	echo "nepal";
	echo "<br>";
	$b++;
} while ( $b<10);
$array=array("masud","roh","korim");
$arra=count($array);
for($i=1;$i<$arra;$i++)
{
	echo "<br>";
	echo $array[$i];
}
$array=array("masud","rohim","korim");

foreach ($array as $bay) {
	echo "<br>";
	echo $bay;
}
$day=array("a"=>10,"b"=>"70");
foreach ($day as $key=>$value ) {
	echo"<br>";
	echo $key."=",$value;
}
?>