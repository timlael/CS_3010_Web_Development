<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Update Music Library</title>
</head>
<body>
<center>
<?php
$db = mysql_connect();
  mysql_select_db("test", $db);

  $result = mysql_query("SELECT concat('Record #', id), artist, title, year FROM tmlz5d_cd order by artist, title, year", $db);
  
  if (mysql_error() == ""){
  		if (mysql_num_rows($result) != 0){
  				print '<center><table><caption>Music Library</caption>';
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
  			print "<center>Music Library is empty</center>";
  		}
  }
  else {
  	print "<center>" . mysql_error() . "</center>";
  }		
  
  mysql_close($db);
  ?>
</center>
<center><h1>Enter the new information for the record to be updated below:</h1></center>
<center><form id="cd" name="cd" action="libupd.php" method="GET">
  Record Number To Alter:<input type="text" id="id" name="id" ></input><br />
  Artist: <input type="text" id="artist" name="artist" ></input><br />
  Title: <input type="text" id="title" name="title" ></input><br />
  Year: <input type="text" id="year" name="year" ></input><br />
  <br />
  <input type="submit" name="submit" id="submit" value="Update"></input>
  <input type="reset" name="reset" id="reset" value="Reset"></input>
</form>
<table>
<form action="libindex.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table>
</center>
</body>
</html>
