<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>tmlz5d HW7</title>
</head>
<body>
<?php
$db = mysql_connect();
  mysql_select_db("test", $db);

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

<center><h1>What action would you like to perform?</h1></center>
<center>
<table>
<tr>
<td>
<form id="lb" name="lb" action="hw7dis.php" method="GET">
  <input type="submit" name="submit" id="submit" value="Display Phonebook"></input>
</form>
</td>
<td>
<form id="sb" name="sb" action="hw7sel.html" method="GET">
  <input type="submit" name="submit" id="submit" value="Search Phonebook"></input>
</form>
</td>
<td>
<form id="dr" name="dr" action="hw7d.php" method="GET">
  <input type="submit" name="submit" id="submit" value="Delete Record"></input>
</form>
</td>
<td>
<form id="ar" name="ar" action="hw7ins.html" method="GET">
  <input type="submit" name="submit" id="submit" value="Add Record"></input>
</form>
</td>
<td>
<form id="ur" name="ur" action="hw7up.php" method="GET">
  <input type="submit" name="submit" id="submit" value="Update Record"></input>
</form>
</td>
</tr>
</table>
</center>
</body>
</html>
