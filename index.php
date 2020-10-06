<?php
$a=90;
$b=99;
$c=$a+$b;
echo $c. "<br>";
$f="bangladesh is small country <br> ";
//$r="i am bad boy";
echo  "hhhhh" .$f."<br>";
function messi()

{
static $v=90.90;
var_dump($v);
$v++;
}
messi();
messi();
messi();
$arrayName = array("masud","hakim");
var_dump($arrayName);
$t="my father is a business man";
echo strlen($t);
echo pi();
echo(min(0, 150, 30, 20, -8, -200))."<br>"; 
$u=899;
if($u=890)
{
	echo "very good bay";
}
elseif ($u=899) {
	echo "he is very swict boy";
}
else
{
	echo "very bad boy";
}
$r="red";
switch ($r) {
	case 'red':
		echo "i want to learn english"."<br>";
		break;
	
	default:
		echo "ht eudihfd";
}
for($i=0; $i<9;$i++)
{
	echo "bangladesh"."<br>";
}
$i=1;
while ($i<10) {
	echo "hfdfddhdg"."<br>";
	$i++;
}
$man = array("riya","ripa" ,"aoliya");
foreach ($man as  $value) {
	echo $value;
}
 function project($i,$b)
{
	$c=$i+$b;
	echo $c ."<br>";
}
 project(89,90);
 $btyd = array("bass","gfds","hgdfdf");
 echo count($btyd);
 $qwe = array("fdgsfdfg" ,"hdgg","hsgdg");
$dsfsf=count($qwe);
 for($i=0;$i<$dsfsf;$i++)
 {
 	echo $qwe[$i];
 }
 $w = array( );
 $age = array("Peter"=>"MASUD", "Ben"=>"HHHH", "Joe"=>"HJGG");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
} 
class kan
{
    public $name;
	public $acount="172-35-2189";	
	public function getName()
	{
		 return $this->name;
	}
	public function getAcount()
	{
		return $this->acount;
	}
	public function setName($name)
	{
		$this->name=$name;
	}
	public function setAcount($acount)
	{
		$this->acount=$acount;

	}
}
class propaty extends kan
{
	
	public $balance=9000;
	public $withdraw=90;
	public $deposit=9000;
	public const bat=0.8;
	public const yut=8.0;
	public function __construct($boy,$girl)
	{
	   echo 	$this->boy=$boy;
		echo $this->gir=$girl;
	}
	public function fgd()
{
	echo self::yut;
}
 public function deposit($d)
{
	$this->deposit+=$d;
	$this->balance=$this->balance+$this->deposit;
	return $this->balance;
}
public function withdraw($w)
{
 if($this->balance>$w)
 {
 	$this->withdraw+=$w;
 	$this->balance=$this->balance-$this->withdraw;
 	return $this->balance;
 }
 else
 {
 	echo "there is no balance";
 }
}
}
$ob1= new  propaty("rohim","iuuyy");
 $ob1->setName("masud");
 $ob1->setAcount("172-35-2189");
echo "<br>";
echo $ob1->getName();
echo "<br>";
echo $ob1::bat;
echo "<br>";
echo $ob1->getAcount();
echo "<br>";
echo $ob1->deposit(8900);
echo "<br>";
echo $ob1->withdraw(897);
echo "<br>";
$ob1->fgd();
//echo $ob1->$age ;
?>