<?php
require_once("../dbconnect.php");
if($_POST['action'] == "follow") {
	

 $selectString = "SELECT COUNT(*) as count FROM apply_events where notif_status='no'"; 
 $result = mysql_query($selectString);


 	while($row = mysql_fetch_array($result)) 
									{ 

echo $row['count'];
									}
  
}
?>