<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Music Library Home</title>
</head>
<body>
<center><h1>What action would you like to perform?</h1></center>
<center>
<table>
<tr>
<td>
<form id="dl" name="dl" action="displaylib.php" method="GET">
  <input type="submit" name="submit" id="submit" value="Display Library"></input>
</form>
</td>
<td>
<form id="sl" name="sl" action="searchlib.html" method="GET">
  <input type="submit" name="submit" id="submit" value="Search Library"></input>
</form>
</td>
<td>
<form id="dr" name="dr" action="libd.php" method="GET">
  <input type="submit" name="submit" id="submit" value="Delete Record"></input>
</form>
</td>
<td>
<form id="ar" name="ar" action="libins.html" method="GET">
  <input type="submit" name="submit" id="submit" value="Add Record"></input>
</form>
</td>
<td>
<form id="ur" name="ur" action="updatelib.php" method="GET">
  <input type="submit" name="submit" id="submit" value="Update Record"></input>
</form>
</td>
</tr>
</table>
</center>
<?php
$db = mysql_connect();
  mysql_select_db("test", $db);

  $result = mysql_query("SELECT artist, title, year FROM tmlz5d_cd order by artist, title, year", $db);
  
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
</body>
</html>
