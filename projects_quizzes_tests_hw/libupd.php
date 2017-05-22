<title>Update Record</title>
<?php
  $db = mysql_connect();
  mysql_select_db("test", $db);
  
  $id = (int)$_GET["id"];
  $artist = $_GET["artist"];
  $title = $_GET["title"];
  $year = (int)$_GET["year"];

  	if($artist != "") {
  		$success = mysql_query("UPDATE tmlz5d_cd set artist='" . mysql_real_escape_string($artist) . "' where id=" . mysql_real_escape_string($id) .";", $db);
  	}
	if($title != "") {
		$success = mysql_query("UPDATE tmlz5d_cd set title='" . mysql_real_escape_string($title) . "' where id=" . mysql_real_escape_string($id) .";", $db);
	}
	if(preg_match('/^[0-9]{4}$/',$year)) {
		$success = mysql_query("UPDATE tmlz5d_cd set year='" . mysql_real_escape_string($year) . "' where id=" . mysql_real_escape_string($id) .";", $db);
	}
	
	if (mysql_error() != ""){
		  	print "<center>" . mysql_error() . "</center>";
	}
	elseif(mysql_error()=="" && $id!="" && $success){
  			print "<center>\nSuccessfully updated ". $artist . " " . $title . " " . $year . "</center>";
  		}
  	else print "<center>No Changes Made.</center>";

  
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
<center><table>
<form action="libindex.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table></center>
