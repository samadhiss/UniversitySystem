<?php 
$server="localhost";
$username="root";
$password="";
$db="pdm";
$conn=mysqli_connect($server,$username,$password,$db);

if(mysqli_connect_error())
{
    throw new Exception("Connection to the database server failed!");

}
 $event_name=$_POST["eventname"];
$sql = "SELECT * FROM schedule_events where= '"+$event_name+"' ";
$result = $conn->query($sql);

echo $result;

?>