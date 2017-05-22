<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$temp = null;
$pattern = '/^\d+$/';

if (preg_match($pattern, $num1) && preg_match($pattern, $num2)){
	
		$temp = $num1 + $num2;
		print "<h1>".$num1." + ".$num2." = ".$temp."</h1>";
	
}
else{
		print '<span style="color:red; font-size:1000%">Error</span>';
	}

?>