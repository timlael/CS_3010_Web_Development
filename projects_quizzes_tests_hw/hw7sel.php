<?php
  $db = mysql_connect();
  mysql_select_db("test", $db);
	
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $area = $_GET["area"];
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  
  $result = mysql_query("SELECT fname, lname, area, num1, num2 
  FROM tmlz5d_pb where fname='" . mysql_real_escape_string($fname) . "' or lname=
  '" . mysql_real_escape_string($lname) . "' or area='(" . mysql_real_escape_string($area) . ")'
     or num1='" . mysql_real_escape_string($num1) . "-' or num2='" . mysql_real_escape_string($num2) . "'", $db);
  
if(mysql_error() == ""){
  if (mysql_num_rows($result) != 0){
  		print '<center><table><caption>Search Results</caption>';
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
    	print "<center>Search returned no results.</center>";
    }
}
else{
	  print "<center>" . mysql_error() . "</center>";
	
}
  mysql_close($db);
?>
<center><table>
<form action="hw7index.php">
  <input type="submit" name="submit" id="submit" value="Return To Index"></input>
</form>
</table></center>
