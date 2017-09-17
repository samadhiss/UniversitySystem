<?php
session_start();
include_once '../dbconnect.php';
include_once 'reports.php';
$role = $_SESSION['user_role'] ;

    
if(!isset($_SESSION['user'])  &&  !isset($_SESSION['user_role_admin']))
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
<title>Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>

<script type="text/javascript">

// Hide div 2 by default
$(document).ready(function(){
  $('#div_2').hide();
    
 $('#link_1').click(function(){ 
      $('#div_2').hide();
	  $('#div_1').show();
});
 
 $('#link_2').click(function(){ 
      $('#div_1').hide();
	  $('#div_2').show();
 });
 
});

</script> 

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
          hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="../logout.php">Sign Out</a>
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
        <li ><a href="http://localhost/uni-education/index.php">Home</a></li>
        <li ><a href="http://localhost/uni-education/Student/student.php">Student</a></li>
        <li  class="active"><a href="http://localhost/uni-education/Admin/admin.php">Administrator</a></li>
        <li><a href="http://localhost/uni-education/Staff/pages/staff.php">Staff</a></li>
		<li><a href="http://localhost/uni-education/Visitor/visitor.php">Visitors</a></li>
        <li ><a href="http://localhost/uni-education/About us.php">About us</a></li>
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
	 <li><a href="#"   id="link_1">|Student Attendance|</a></li>
	  <li><a href="#"  id="link_2">|Reports|</a></li>     
    </ul>
  </div>

</div>
<!-- ####################################################################################################### -->
<div id="div_1"> 
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Student Attendance</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Addmision No:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50"  name="Ad_num">
                              </div>
                          </div>                        
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date :</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control round-form"  name="date">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Attendance Status:</label>
                              <div class="col-sm-10">
                                   <input type="radio" name="status" value="Present" checked> Present<br>
								   <input type="radio" name="status" value="Absent"> Absent
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Faculty :</label>
                              <div class="col-sm-10">
                                  <select class="form-control"  id="type_sele" name="faculty" >
											<option name="type1" value="IT">IT</option>
								            <option name="type2" value="CSN">CSN</option>
										    <option name="type3" value="EE">EE</option>
										    <option name="type4" value="IM">IM</option></select>
                              </div>
                          </div>
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="form_submit">Save</button>
							<button type="button" class="btn btn-round btn-primary" name="update">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
							<br/>
							<br/>
						
<a href="admin1.php">View Reports</a>
							
                                
                              </div>
                          </div>
						  <?php
						  
			
								
						//update data
								
									 if(isset ($_POST["update"]))
									{	
										$Addmision_No=$_POST["Ad_num"];
										$Date=$_POST["date"];
										$Status=$_POST["status"];
										$Faculty=$_POST["faculty"];
										
										$data="UPDATE stu_attendance set status= '$Status' WHERE Ad_num= '$Addmision_No' ";
										
										if(!mysql_query($data)){
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
<div id="div_2"> 
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Reports</h3>


			<h3> Reports are here </h3>

 </section>
      </section>
</div>
<div class="wrapper col3">

  <div id="container">
  
    <div id="content">
	

    </div>
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
        <li><a href="#">Current Oxford students</a></li>
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
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>

</body>
</html>




