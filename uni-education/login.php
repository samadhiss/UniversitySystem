<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name, user_pass,role FROM users WHERE user_email='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		if($row['role'] == "visitor"){

		  $_SESSION['user'] = $row['user_id'];
		  $_SESSION['user_role_visitor'] = $row['role'];
		  header("Location: Visitor/visitor.php");
		}

	    if($row['role'] == "admin"){

			$_SESSION['user'] = $row['user_id'];
			$_SESSION['user_role_admin'] = $row['role'];
			header("Location: Admin/admin.php");
		}

		if($row['role'] == "student"){

			$_SESSION['user'] = $row['user_id'];
			$_SESSION['user_role_student'] = $row['role'];
			header("Location: Student/student.php");
		}
		
		if($row['role'] == "staff"){

			$_SESSION['user'] = $row['user_id'];
			$_SESSION['user_role_staff'] = $row['role'];
			header("Location: Staff/staff.php");
		}



	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>


<center>
<div id="login-form">

<form method="post">

<table align="center" width="30%" border="0">
<h3>University of EDU</h3>
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="signup.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>