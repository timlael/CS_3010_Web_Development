<?php

$a=$_POST["a"];
$b=$_POST["b"];

if (isValid($a) && isValid($b)){
	$c=$a+$b;
	echo $c;	
}
function isValid(){
	return is_numeric();
}
?>