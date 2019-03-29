<?php
include "Image.php";
class Test implements Sum,Multiplication
{
public $sum;
public $mult;

public function setSum($a,$b)
{
	$this->sum=$a+$b;
	
}
public function getSum(){
	return $this->sum;	
}
public function setMult($e,$v)
{
$this->mult=$e*$v;
}
public function  getMult()
{
	return $this->mult;		
}	
}

?>