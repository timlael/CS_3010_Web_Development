<title>Music Library</title>
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
  	print "<center>" . mysql_error(). "/center>";
  }		
  
  mysql_close($db);
?>
<center><table>
<form action="libindex.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table></center>
