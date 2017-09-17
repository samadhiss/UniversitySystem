<?php
session_start();
include_once '../dbconnect.php';

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>visitor</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>

<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
	
	<!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

</head>
<body>
			<div class="wrapper col0">
  <div id="topbar">   
    <div id="loginpanel">
      <ul>
           <div id="content">
          Hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="../logout.php">Sign Out</a>
        </div>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">University of EDU</a></h1>
      <p>Student Enrollment System</p>
    </div>
    
	<div id="topnav">
       <ul>
        <li  ><a href="http://localhost/uni-education/Student/index.php">Home</a></li>
        <li ><a href="http://localhost/uni-education/Student/student.php">Student</a></li>
        <li><a href="http://localhost/uni-education/Admin/admin.php">Administrator</a></li>
        <li><a href="http://localhost/uni-education/Staff/pages/staff.php">Staff</a></li>
		<li class="active"><a href="http://localhost/uni-education/Visitor/visitor.php">Visitors</a></li>
        <li><a href="http://localhost/uni-education/About us.php">About us</a></li>
		<li><a href="http://localhost/uni-education/contactus.php">Contact Us</a></li>
      </ul>
    </div>
	
    <br class="clear" />
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul for="sub_links" font="18px">
		<li><a href="#" id="link_1">|View Events|</a></li>
		<li><a href="#" id="link_2">|Apply Events|</a></li>
        <li><a href="#" id="link_3">|Help|</a></li>
		<li><a href="#" id="link_4">|Apply Appetite Test|</a></li>
    </ul>
  </div>

</div>
<!-- ####################################################################################################### -->
<div id="div_1">
	<section id="main-content">
          <section class="wrapper">         	  
				<div align="center">
					<div align="center" style="width:100%">
					<div align="center"><h2>Event Details</h2></div>
					<table id="tabl2" class="display">

					<thead>
					<tr>
					<th>Number</th>
					<th>Event Name</th>
					<th>Venue</th>
					<th>Date</th>
					<th>Time</th>
					<th>Schedule</th>
					</tr>
					</thead>
					
					<?php

						$selectString = "SELECT * FROM schedule_events"; 
						$comments = mysql_query($selectString);
					?>
					<tbody>
					<?php
					while($row = mysql_fetch_array($comments)) 
					{ ?> 
					<tr>
						<td> <?php echo $row['eid']; ?> </td>
						<td> <?php echo $row['ename']; ?> </td>
						<td> <?php echo $row['venue']; ?> </td>
						<td> <?php echo $row['date']; ?> </td>
						<td> <?php echo $row['time']; ?> </td>
						<td> <?php echo $row['schedule']; ?> </td>
						
					</tr>

					<?php }
						?>
					</tbody>

				</table>
				  
				  
                  </div><!-- col-lg-12-->    
          		</div>  	
                   

  </section>
      </section>




</div>
	 
<!-- ####################################################################################################### -->
<div id="div_2"> 
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Apply Events</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Event Name:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50" name="ename">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">Student FullName :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" id="focusedInput" name="sname">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student ID:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="sid" placeholder="if you don`t have student Id,write 'Visitor' word here">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">Student email:</label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control round-form"   name="semail" >
                              </div>
                          </div>						  							 				
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="add">Add</button>
							<button type="button" class="btn btn-round btn-primary" name="update">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						  
						  // insert data
						  
						  if(isset($_POST["add"]))
								{
								
								$Event_Name=$_POST["ename"];
								$Student_Name=$_POST["sname"];
								$Student_ID=$_POST["sid"];
								$Student_email=$_POST["semail"];
								
								
								
								$data1="INSERT INTO apply_events (ename,sname,sid,semail)VALUES('$Event_Name','$Student_Name','$Student_ID','$Student_email')";
								
									
									if(!mysql_query($data1)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}										
									}
									
									
									//update data
								
									else if(isset ($_POST["update"]))
								{
								$Event_Name=$_POST["ename"];
								$Student_Name=$_POST["sname"];
								$Student_ID=$_POST["sid"];
								$Student_email=$_POST["semail"];
								
									$updateString = "UPDATE  apply_events set ename='$Event_Name' ,'$Student_Name','$Student_email' WHERE sid='$Student_ID' ";
									
									if(!mysql_query($data1)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}	

									
									
								}	
									
                            ?>		
                          </div>                                                                                                   
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->              
  </center>  
  </section>
      </section>
</div>

<!-- ####################################################################################################### -->
<div id="div_3">
<section id="main-content">	
	<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Ask for Help</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">Your Email:</label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control round-form" width="50"  name="email">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Issue Type :</label>
                              <div class="col-sm-10">
                                  <select id="type_sele" name="type_sele">
							  <option value="Edit Profile">Edit Profile</option>
							  <option value="Request information for Events">Request information for Events</option>
							  <option value="Registration issue">Registration issue</option>
							  <option value="Marks">Marks</option>
							  <option value="Other">Other</option>
							</select>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Comment :</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control round-form"  name="comment"></textarea>
                              </div>
                          </div>							 				
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="form_submit">Add</button>
							<button type="button" class="btn btn-round btn-primary">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  
						   <?php
						  
						  // insert data
						  
						  if(isset($_POST["form_submit"]))
								{
								
								$Your_Email=$_POST["email"];
								$Issue_Type=$_POST["type_sele"];
								$Comment=$_POST["comment"];
								
								
								
								$data1="INSERT INTO  ask_for_help (	user_email,issue_type,comment)VALUES( '$Your_Email', '$Issue_Type', '$Comment')";
								
									
									if(!mysql_query($data1)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}										
									}
									
                            ?>	
						  
                          </div>                                                                                                   
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->              
  </center>  
  </section>
      </section>


</div>
<!-- ####################################################################################################### -->
<div id="div_4"> 
<section id="main-content">
          <section class="wrapper">
		  <h3><i class="fa fa-angle-right">Apply Appetite Test</i></h3> 
		  <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student Name:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50"  name="sname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NationalID :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="nic">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email Address:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"   name="email">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address:</label>
                              <div class="col-sm-10">
                                  <input class="form-control round-form"  name="Address"> 
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gender:</label>
                              <div class="col-sm-10">
                                  <input type="radio" name="gender" value="Male"> Male
								  <input type="radio" name="gender" value="Female">Female
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date of Birth:</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control round-form"  name="dob">
                              </div>
                          </div>
						   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Telephone:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="telephone">
                              </div>
                          </div>
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="submit">Apply</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						  
						  // insert data
						  
						  if(isset($_POST["submit"]))
								{
								
								
								$Student_Name=$_POST["sname"];
								$NationalID=$_POST["nic"];
								$Student_email=$_POST["email"];
								$Address=$_POST["Address"];
								$Gender=$_POST["gender"];
								$Date_of_Birth=$_POST["dob"];
								$Telephone=$_POST["telephone"];
								
								
								
								
								
								$data1="INSERT INTO apply_api_test(sname,nic,email,Address,gender,dob,telephone)VALUES('$Student_Name','$NationalID','$Student_email','$Address','$Gender','$Date_of_Birth','$Telephone')";
								
									
									if(!mysql_query($data1)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}										
								}
								?>
                          </div>                                                                                                   
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->              
  </center>  
  </section>
      </section>
</div>
<div class="wrapper col3">

  <div id="container">
  
    <div id="content">
	

    </div>
 
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="footbox">
      <h2>Information About</h2>
      <ul>
        <li><a href="#">EDU University</a></li>
        <li><a href="#">Fees and funding</a></li>
        <li><a href="#">Open Days</a></li>
        <li class="last"><a href="#">Libraries</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Information About</h2>
      <ul>
        <li><a href="#">Prospective undergraduates</a></li>
        <li><a href="#">Prospective graduate students</a></li>
        <li><a href="#">Prospective Continuing Education students</a></li>
        <li><a href="#">Current EDU students</a></li>
        <li><a href="#">Term dates</a></li>
        <li class="last"><a href="#">Visitors/Tourists</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>

<script type="text/javascript">
  
$(document).ready(function(){

  // Hide div 2 by default
  $('#div_2').hide();
  $('#div_3').hide();
  $('#div_4').hide();

  $('#link_1').click(function(){ 
      $('#div_2').hide();
	  $('#div_3').hide();
	  $('#div_4').hide();
      $('#div_1').show();
	 
  });

  $('#link_2').click(function(){ 
      $('#div_1').hide();
	  $('#div_3').hide();
	  $('#div_4').hide();
      $('#div_2').show();
	  
  });
  
  $('#link_3').click(function(){ 
      $('#div_1').hide();
	  $('#div_2').hide();
	  $('#div_4').hide();
      $('#div_3').show();
	  
  });
  
  $('#link_4').click(function(){ 
      $('#div_1').hide();
	  $('#div_2').hide();
	  $('#div_3').hide();
      $('#div_4').show();
	  
  });
   
  
});

</script>
