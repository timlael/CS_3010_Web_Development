<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>tmlz5d HW7</title>
</head>
<body>
<center>
<?php
$db = mysql_connect();
  mysql_select_db("test", $db);

  $result = mysql_query("SELECT concat('Record #', id), fname, lname, area, num1, num2 FROM tmlz5d_pb order by lname, fname", $db);
  
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
</center>
<center><h1>Enter the new information for the record to be updated below:</h1></center>
<center><form id="pb" name="pb" action="hw7upd.php" method="GET">
  Record Number To Alter:<input type="text" id="id" name="id" ></input><br />
  First Name: <input type="text" id="fname" name="fname" ></input><br />
  Last Name: <input type="text" id="lname" name="lname" ></input><br />
  Area Code: <input type="text" id="area" name="area" ></input><br />
  Exchange Number (second three digits): <input type="text" id="num1" name="num1" ></input><br />
  Subscriber Number (last four digits): <input type="text" id="num2" name="num2" ></input><br />
  <br />
  <input type="submit" name="submit" id="submit" value="Update"></input>
  <input type="reset" name="reset" id="reset" value="Reset"></input>
</form>
<table>
<form action="hw7index.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table>
</center>
</body>
</html>
