<?php
if(isset($_POST['submit'])) {
	$msg = 'Name: '.$_POST['name']."\n"
			.'Email'.$_POST['email']."\n"
			.'Comment: '.$_POST['comment'];
			
		mail('sachimax91@gmail.com','Sample contact us form',$msg);
		header('location: Thank-you.php');
	
}
else{
	header('location: contact_us.php');
	exit(0);
}


?>
