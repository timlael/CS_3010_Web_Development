<?php
  $db = mysql_connect();
  mysql_select_db("test", $db);
  
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $area = $_GET["area"];
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  

  if($fname != "" && $lname != "" && preg_match('/^[0-9]{3}$/',$area) && preg_match('/^[0-9]{3}$/',$num1) && preg_match('/^[0-9]{4}$/',$num2)){
  $result = mysql_query("INSERT INTO tmlz5d_pb (fname, lname, area, num1, num2) values('" . mysql_real_escape_string($fname) . "','" . mysql_real_escape_string($lname) . "','(" . mysql_real_escape_string($area) . ")','" . mysql_real_escape_string($num1) . "-','" . mysql_real_escape_string($num2) . "' );", $db);
    
  if(mysql_error()==""){
  	$resultpost = mysql_query("SELECT * from tmlz5d_pb WHERE fname='" . mysql_real_escape_string($fname) . "' and lname='" . mysql_real_escape_string($lname) . "' and area='(" . mysql_real_escape_string($area) . ")'and num1='" . mysql_real_escape_string($num1) . "-' and num2='" . mysql_real_escape_string($num2) . "';", $db);
    	if (mysql_num_rows($resultpost) != 0){
  			print "<center>\nSuccessfully inserted ". $fname . " " . $lname ." into the phone book.</center>";
  		}
  }
  else print "<center>" . mysql_error() . "</center>";
  }
  else {
  	if ($fname == "") print "<center>First name required </center><br>";
  	if ($lname == "") print "<center>Last name required </center><br>";
  	if (!preg_match('/^[0-9]{3}$/',$area)) print "<center>Area code number must be three digits </center><br>";
  	if (!preg_match('/^[0-9]{3}$/',$num1)) print "<center>Exchange number must be three digits </center><br>";
  	if (!preg_match('/^[0-9]{4}$/',$num2)) print "<center>Subscriber number must be three digits </center><br>";
  }

  mysql_close($db);
?>
<center><table>
<form action="hw7index.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table></center>
