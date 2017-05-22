<?php
			$age=$_GET["a"];						/*age */
			$cont=$_GET["c"];                 		/*contribution */
			$freq=$_GET["f"];						/*frequency */
			$rate=$_GET["i"];					   	/*rate */
			$sum=array();  							/* sum */
			$withdraw=0;	 						/* annual withdraw amount */
			$rtot=0;
			$at=$age;
			setlocale(LC_MONETARY, 'en_US');
if((is_numeric($age) && $age<65 && $age>0) && (is_numeric($cont) && $cont>0) && (is_numeric($rate) && $rate>=0 && $rate<=100) && ($freq=="mo"||$freq=="an")){				
			if ($freq == "mo"){
				for ($y = $age; $y<65; $y++){
				$pcont= ($cont*12);	
				$icont= (($rtot+$pcont)*($rate/100));
				$rtot = ($rtot + ($cont*12))* (1+($rate/100));
				array_push($sum, $rtot);
				print "<tr><td>Age: ".$at."</td></tr><br><tr><td>Contributions this period: $".money_format('%#10n', $pcont)."</td></tr><br><tr><td>Savings to date: $".money_format('%#10n', $rtot)."</td></tr><br><tr><td>Intrest earned to date: $".money_format('%#10n', $icont)."</td></tr><br>";
				$at++;
				}
			print "<tr><td>Age: 65 </td></tr><br><tr></tr><td> Final withdraw amount: $".money_format('%#10n', array_sum($sum))."</td></tr><br>";
			}
			elseif ($freq == "an") {
for ($y = $age; $y<65; $y++){
				$pcont= ($cont);	
				$icont= (($rtot+$pcont)*($rate/100));
				$rtot = ($rtot + ($cont))* (1+($rate/100));
				array_push($sum,$rtot);
				print "<tr><td>Age: ".$at."</td></tr><br><tr><td>Contributions this period: $".money_format('%#10n', $pcont)."</td></tr><br><tr><td>Savings to date: $".money_format('%#10n', $rtot)."</td></tr><br><tr><td>Intrest earned to date: $".money_format('%#10n', $icont)."</td></tr><br>";
				$at++;
				}
			print "<tr><td>Age: 65 </td></tr><br><tr></tr><td> Final withdraw amount: $".money_format('%#10n', array_sum($sum))."</td></tr><br>";			
			}
			else {
			print "<h1>ERROR</h1>";
			}
}
else print"ERROR";

?>