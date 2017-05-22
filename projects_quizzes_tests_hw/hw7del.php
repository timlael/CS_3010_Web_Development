<?php
  $db = mysql_connect();
  mysql_select_db("test", $db);
  
  $id = $_GET["id"];
 

  $result = mysql_query("DELETE from tmlz5d_pb WHERE id='" . mysql_real_escape_string($id) . "';", $db);
  
 
  
  if (mysql_error() == "" && $result){
  			print "<center>\nSuccessfully deleted record from the phone book.</center>";
  		}
  else {
  	print "<center>" . mysql_error() . "</center>";
  	  }

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
