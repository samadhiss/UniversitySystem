<?php
session_start();
include_once '../../dbconnect.php';
$role = $_SESSION['user_role'] ;
   
if(!isset($_SESSION['user'])  && $role != "staff" )
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
	
	<script type="text/javascript"src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript"src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript"src="js/dataTables.jqueryui.min.js"></script>
	<script type="text/javascript"src="js/notify-combined.min.js"></script>
	
	<!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<script type="text/javascript"src="js/bootstrap.js"></script>
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
	<link href="css/jqueryui.min.css" rel="stylesheet" type="text/css">
		

    <script src="assets/js/chart-master/Chart.js"></script>
	

</head>
<body>
			<div class="wrapper col0">
  <div id="topbar">
      <br class="clear" />
    </div>
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
        <li><a href="http://localhost/uni-education/Student/index.php">Home</a></li>
        <li ><a href="http://localhost/uni-education/Student/pages/student.php">Student</a></li>
        <li><a href="http://localhost/uni-education/Admin/">Administrator</a></li>
        <li class="active"><a href="http://localhost/uni-education/Staff/pages/staff.php">Staff</a></li>
		<li><a href="http://localhost/uni-education/Visitor/pages/visitor.php">Visitors</a></li>
        <li><a href="http://localhost/uni-education/Aboutus.php">About us</a></li>
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
      <li><a href="#" id="link_1">|Event Handling|</a></li>
	  <li><a href="#" id="link_2">|Group Scheduling|</a></li>
       <li><a href="#" id="link_3">|Edit Profile|</a></li>
	   <li><a href="#" id="link_5">|Assign Marks|</a></li>
        <li><a href="#" id="link_4">|Help|</a></li>
    </ul>
  </div>

</div>
<!-- ####################################################################################################### -->
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
							 </div>
                          </div>
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
                              <label class="col-sm-2 col-sm-2 control-label" name="schedule">Schedule:</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control round-form" id="schedule" name="schedule"> </textarea>
                              </div>
                          </div>							 				
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="form-submit">Add</button>							
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

									
									if(!mysql_query($data1)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}										
									}
									
									
																						
                            ?>						  
                                                                                                                          
                      </form>
				  </div> 
				  
				  <div align="center">
					<div align="center" style="width:100%">
					<div align="center"><h2>Event Details</h2></div>
					<!--table id="tabl2" class="display"-->
					 <table id="table_data" class="stripe" cellspacing="0" width="100%">

					<thead>
					<tr>
					<th>Number</th>
					<th>Event Name</th>
					<th>Venue</th>
					<th>Date</th>
					<th>Time</th>
					<th>Schedule</th>
					<th>Update</th>
					<th>Delete</th>

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
						<td><a href="update_event.php?fid=<?php echo $row['eid']; ?>"><input type="submit" name="upd" value="Update" id="but1"></a></td>
						<td><a href="delete_event.php?fid=<?php echo $row['eid']; ?>"><input type="button" name="del" value="Delete" id="but1"></a></td>
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
		  <h4>Event Name </h4>
		  <select id="type_sele" name="type_sele">
							  <option value="0">Choose Here</option>
							  <option value="1">Campus Tour</option>
							  <option value="1">Campus Opening Day</option>
							  <option value="1">Book Fair</option>
							</select>
          	<!-- BASIC FORM structure -->		
          	<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Group Scheduling</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-edit"></i> #</th>								  
                                  <th><i class="fa fa-edit"></i>Event Name</th>
                                  <th><i class="fa fa-edit"></i> Student Name</th>
								  <th><i class="fa fa-edit"></i> Student ID </th>
								  <th><i class=" fa fa-edit"></i> Send Email</th>
                                  
                              </tr>
                              </thead>
                              <tbody>

							   <?php
							   //view data

									$selectString = "SELECT * FROM apply_events "; 
									$comments = mysql_query($selectString);

									while($row = mysql_fetch_array($comments)) 
									{ ?> 
									<tr>
									
									<td> <?php echo $row['id']; ?> </td> 
									<td> <?php echo $row['ename']; ?> </td>
									<td> <?php echo $row['sname']; ?> </td>
									<td> <?php echo $row['sid']; ?> </td>
									<td> <?php echo $row['semail']; ?> </td>
									
									</tr>
										
									
								
<?php 
					}				 
					
					
?>	
									
							  
                              </tbody>
						
							  <input type="button" name="select_twowenty_btn" class="btn btn-round btn-success" value="send emails 20 People">
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
</div>


<!-- ####################################################################################################### -->

<div id="div_3">
	
	<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Edit Profile</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">	
						
						<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">Staff ID:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="stID">
                              </div>
                          </div>
						
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">First Name:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="fname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Surname :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="surname">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">Email Address:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"   name="semail">
                              </div>
                          </div>						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control round-form" name="descrip"></textarea>
                              </div>
                          </div>                                                                         						   
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="form-submit">Add</button>
							<button type="button" class="btn btn-round btn-primary">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						      //insert data
								if(isset($_POST["form-submit"]))
								{	
								 $Staff_ID=$_POST["stID"];
								 $First_Name=$_POST["fname"];
								 $Surname =$_POST["surname"];
								 $Email=$_POST["semail"];
								 $Description=$_POST["descrip"];
								 				
								 $data1="INSERT INTO  staff_profile (st_id,fname,surname,email,description) VALUES('$Staff_ID ','$First_Name', '$Surname', '$Email', '$Description')";

									
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
							<button type="submit" class="btn btn-round btn-success" name="form-submit">Add</button>
							<button type="button" class="btn btn-round btn-primary">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						   <?php
						      //insert data
								if(isset($_POST["form-submit"]))
								{	
								 $useremail=$_POST["email"];
								 $Issue_Type=$_POST["type_sele"];
								 $Comment=$_POST["comment"];
								
								 				
								 $data1="INSERT INTO ask_for_help (user_email,issue_type,comment) VALUES('$useremail ','$Issue_Type', '$Comment')";

									
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
<div id="div_5">
	
	<section id="main-content">
          <section class="wrapper">
          	
				<div class="row">
				 
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Assign Marks</h4>
	                  	  	  <hr>
							  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student Name:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50" name="sname">
                              </div>
                          </div>
						   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Marks:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50"  name="marks">
                              </div>
                          </div>
						  
						  <br/> <br/>
						  <br/>
						   <!--div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Search:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50"  name="marks">
								  <br/>
								  
								  <button type="button" name="search_btn">Search </button>
                              </div>
                          </div-->
                          				
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="form_sumbitted">Add</button>
							<button type="button" class="btn btn-round btn-primary" name="upadte">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						//insert data
								if(isset($_POST["form_sumbitted"]))
								{
								
								$Student_Name=$_POST["sname"];
								$Marks=$_POST["marks"];
								
								
								$sql="INSERT INTO  assign_marks(sname,marks) VALUES('$Student_Name', '$Marks')";
								
								$result = mysql_query($sql);
									
									if(!mysql_query($sql)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}										
								}
															
								
								
								
								//search_btn
							 
								$where=" ";
								if(isset($_GET['search_btn']))
								{
								$ser=$_GET['sname'];
									$where = "WHERE sname LIKE '$ser' ";
								
								}	
								
								
								
								
								
								
								
								//update data
								
								else if(isset ($_POST["upadte"]))
								{
									$Student_Name=$_POST["sname"];
									$Marks=$_POST["marks"];
									
									$updateString = "UPDATE  assign_marks set marks='$Marks' WHERE sname='$Student_Name' ";
									
									if(!mysql_query($updateString)){
										die('Error : '.mysql_error());
										echo "connection failed!";
										}	

									
									
								}
								
									
									
									
									
									
                            ?>	
							
						  
						  
						  
						  
                          </div>                                                                                                   
                      </form>
<!---loading table--->
		                      <table class="table" width="50">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>Student Name</th>
		                              <th>Aptitude Test MArks</th>
		                              
		                          </tr>
		                          </thead>
		                          <tbody>
		                           <?php

									$selectString = "SELECT * FROM assign_marks "; 
									$comments = mysql_query($selectString);

									while($row = mysql_fetch_array($comments)) 
									{ ?> 
									<tr>
									
									<td> <?php echo $row['mid']; ?> </td> 
									<td> <?php echo $row['sname']; ?> </td>
									<td> <?php echo $row['marks']; ?> </td>									
									</tr>
										
		
								
<?php 
					}
?>                      
		                          </tbody>
		                      </table>
								 
	                  	  </div><!--/content-panel -->
	                  </div><!-- /col-md-12 -->
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
	  <?php
							  if(isset($_POST['select_twowenty_btn']))
							  {
								  
								  
								  echo "hiii";
							  }
							  
							  
							  ?>


<script type="text/javascript">
  function loadEventData(){
	  
	  var data = $('#ename').val();

	        $.ajax({
                    type: "POST",
                    url: "eventupdate.php",
                    data: {
                        eventname: data                        
                    }
                })
                .done(function (msg) {
                    alert("Data Saved"+msg);
                });	  	  
  }
  
$(document).ready(function(){
      $('#div_2').hide();  
	  $('#div_3').hide();
	  $('#div_4').hide();
	  $('#div_5').hide();
	  

  $('#link_2').click(function(){ 
      $('#div_1').hide();      
	  $('#div_3').hide();
	  $('#div_4').hide();
	  $('#div_5').hide();
	  $('#div_2').show();
  });

  $('#link_1').click(function(){ 
      $('#div_2').hide();     
	  $('#div_3').hide();
	  $('#div_4').hide();
	  $('#div_5').hide();
	  $('#div_1').show();
  }); 
  
  $('#link_3').click(function(){ 
      $('#div_1').hide();      
	  $('#div_2').hide();
	  $('#div_4').hide();
	  $('#div_5').hide();
	  $('#div_3').show();
  
   }); 
  $('#link_4').click(function(){ 
      $('#div_1').hide();     
	  $('#div_2').hide();
	  $('#div_3').hide();
	  $('#div_5').hide();
	  $('#div_4').show();
  }); 
  
   $('#link_5').click(function(){ 
      $('#div_1').hide();    
	  $('#div_2').hide();
	  $('#div_3').hide();
	  $('#div_4').hide();
	  $('#div_5').show();
  }); 
});

</script>