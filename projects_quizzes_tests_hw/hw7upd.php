<?php
  $db = mysql_connect();
  mysql_select_db("test", $db);
  
  $id = $_GET["id"];
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $area = $_GET["area"];
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];

  	if($fname != "") {
  		$success = mysql_query("UPDATE tmlz5d_pb set fname='" . mysql_real_escape_string($fname) . "' where id=" . mysql_real_escape_string($id) .";", $db);
  	}
	if($lname != "") {
		$success = mysql_query("UPDATE tmlz5d_pb set lname='" . mysql_real_escape_string($lname) . "' where id=" . mysql_real_escape_string($id) .";", $db);
	}
	if(preg_match('/^[0-9]{3}$/',$area)) {
		$success = mysql_query("UPDATE tmlz5d_pb set area='(" . mysql_real_escape_string($area) . ")' where id=" . mysql_real_escape_string($id) .";", $db);
	}
	if(preg_match('/^[0-9]{3}$/',$num1)) {
		$success = mysql_query("UPDATE tmlz5d_pb set num1='" . mysql_real_escape_string($num1) . "-' where id=" . mysql_real_escape_string($id) .";", $db);
	}
	if(preg_match('/^[0-9]{4}$/',$num2)) {
		$success = mysql_query("UPDATE tmlz5d_pb set num2='" . mysql_real_escape_string($num2) . "' where id=" . mysql_real_escape_string($id) .";", $db);
	}
	
	if (mysql_error() != ""){
		  	print "<center>" . mysql_error() . "</center>";
	}
	elseif(mysql_error()=="" && $id!="" && $success){
  			print "<center>\nSuccessfully updated ". $fname . " " . $lname .".</center>";
  		}
  	else print "<center>No Changes Made.</center>";

  
$result = mysql_query("SELECT fname, lname, area, num1, num2 FROM tmlz5d_pb order by lname, fname", $db);
  
  if (mysql_error() == ""){
  		if (mysql_num_rows($result) != 0){
  				print '<center><table><caption>Phonebook</caption>';
  					while ($row = mysql_fetch_assoc($result)) {
    					print "<tr>";
    						foreach (array_values($row) as $val) {
     					 		print "<td>" . htmlspecialchars($val) . "</td>";
    						}
    					print "</tr>";
  					}
  				print "</table></center>";
  		}
  
  		else {
  			print "<center>Phone book is empty</center>";
  		}
  }
  else {
  	print "<center>" . mysql_error() . "</center>";
  }		
  

  mysql_close($db);
?>
<center><table>
<form action="hw7index.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table></center>
