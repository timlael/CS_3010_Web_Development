<title>Insert Record</title>
<?php
  $db = mysql_connect();
  mysql_select_db("test", $db);
  
  $artist = $_GET["artist"];
  $title = $_GET["title"];
  $year = (int)$_GET["year"];
  

  if($artist != "" && $title != "" && preg_match('/^[0-9]{4}$/',$year)){
  $result = mysql_query("INSERT INTO tmlz5d_cd (artist, title, year) values('" . mysql_real_escape_string($artist) . "','" . mysql_real_escape_string($title) . "','" . mysql_real_escape_string($year) . "' );", $db);
    
  if(mysql_error()==""){
  	$resultpost = mysql_query("SELECT * from tmlz5d_cd WHERE artist='" . mysql_real_escape_string($artist) . "' and title='" . mysql_real_escape_string($title) . "' and year='" . mysql_real_escape_string($year) . "';", $db);
    	if (mysql_num_rows($resultpost) != 0){
  			print "<center>\nSuccessfully inserted ". $artist . " " . $title . " " . $year . " into the music library.</center>";
  		}
  }
  else print "<center>" . mysql_error() . "</center>";
  }
  else {
  	if ($artist == "") print "<center>Artist required </center><br>";
  	if ($title == "") print "<center>Title required </center><br>";
  	if (!preg_match('/^[0-9]{4}$/',$year)) print "<center>Year must be four digits </center><br>";
  }

  mysql_close($db);
?>
<center><table>
<form action="libindex.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table></center>
