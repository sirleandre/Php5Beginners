<?php
function __autoload($classname)
{
	include $classname.'.php';
}
$a=new Test();
$a->setSum(4,6);
$a->setMult(4,6);
echo $a->getSum()."<br>";
echo $a->getMult();

?>