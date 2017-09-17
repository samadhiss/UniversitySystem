<?php
require_once("../dbconnect.php");
if($_POST['action'] == "change") {
	

 $selectStringUpdate = "UPDATE apply_events SET notif_status='yes'"; 
 $resultUpdate = mysql_query($selectStringUpdate);

 echo "updated";

}
?>