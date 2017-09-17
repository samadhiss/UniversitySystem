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
<title>Staff </title>
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
    <div id="slidepanel">
      
      <div class="topbox last">
        <h2>Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend> User Login Form</legend>
            <label for="pupilname">Username:
              <input type="text" name="pupilname" id="pupilname" value=""/>
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="submit" name="pupilsignup" id="pupilsignup" value="SignUp" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Log In Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display:none;" href="#slidepanel">Close Panel</a></li>
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
        <li><a href="http://localhost/uni-education/Student/index.php">Home</a></li>
        <li ><a href="http://localhost/uni-education/Student/pages/student.php">Student</a></li>
        <li><a href="http://localhost/uni-education/Admin/">Administrator</a></li>
        <li class="active"><a href="http://localhost/uni-education/Staff/pages/staff.php">Staff</a></li>
		<li><a href="http://localhost/uni-education/Visitor/pages/visitor.php">Visitors</a></li>
        <li><a href="http://localhost/uni-education/Aboutus.php">About us</a></li>
      </ul>
    </div>
	
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul for="sub_links" font="18px">
      <li><a href="#" id="link_1">|Event Handling|</a></li>
	  <li><a href="#" id="link_2">|Group Scheduling|</a></li>
       <li><a href="#" id="link_3">|Edit Profile|</a></li>
	   <li><a href="#" id="link_5">|Assign Marks|</a></li>
        <li><a href="#" id="link_4">|Help|</a></li>
    </ul>
  </div>

</div>

<div id="div_1"> 
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Event Handling</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST" name="events"  onSubmit="return formValidation()"  >
                          <div class="form-group">
                             
							 <label class="col-sm-2 col-sm-2 control-label" name="ename" >Event Name:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50"  name="ename" id="ename">
								<br>
								  <input type="submit" name="search_event"  onclick="" class="button-success" value="Search Event">
								
							 </div>
                          </div>
						  </form>
						  <form class="form-horizontal style-form" method="POST" name="events"  onSubmit="return formValidation()"  >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="venue" >Venue :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="venue">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="date" >Date :</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control round-form"  name="date">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="time" >Time:</label>
                              <div class="col-sm-10">
                                  <input type="time" class="form-control round-form"  id="myTime" name="time" value="22:15:00">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="schedule" >Schedule:</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control round-form" id="schedule" name="schedule"> </textarea>
                              </div>
                          </div>							 				
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="form-submit">Add</button>
							<button type="button" class="btn btn-round btn-primary" name="update_btn">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>						  
						  <?php
						      //insert data
								if(isset($_POST["form-submit"]))
								{								
								 $event_name=$_POST["ename"];
								 $venue =$_POST["venue"];
								 $date=$_POST["date"];
								 $time=$_POST["time"];
								 $schedule=$_POST["schedule"];				
								 $data1="INSERT INTO schedule_events (ename,venue,date,time,schedule) VALUES('$event_name', '$venue', '$date', '$time', '$schedule')";

									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
									}
									
									
									
							//update data
							if(isset($_POST["update_btn"]))
								{								
								// $event_name=$_POST["ename"];
								 $venue =$_POST["venue"];
								 $date=$_POST["date"];
								 $time=$_POST["time"];
								 $schedule=$_POST["schedule"];				
								 $data1="INSERT INTO schedule_events (ename,venue,date,time,schedule) VALUES('$event_name', '$venue', '$date', '$time', '$schedule')";

									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
									}
							
							
							if(isset($_POST["search_event"]))
								{								
								 $searchi=$_POST["ename"];
								 				
								 $data1="SELECT * FROM schedule_events WHERE ename='$searchi'";

									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
									}
							
							
							
							
							
									
                            ?>						  
                                                                                                                          
                      </form>
				  </div> 
                  </div><!-- col-lg-12-->    
          		</div>  	
                   

  </section>
      </section>
	  
	 </body>
	 </html>