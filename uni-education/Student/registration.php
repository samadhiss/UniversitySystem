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




<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
        <title>Registration Form</title>
		
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
	<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Student Registration Form OF EDU University</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">First Name :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="fname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Middle Name :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="mname">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" id="focusedInput">Last Name :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="lname">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Admission Number:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="addnumber">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address :</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control round-form" name="address"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Telephone:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="telephone">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nationality :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="nationality">
                                
                              </div>
                          </div>
							  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">City :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="City">
                                
                             </div>
                           </div>
							  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Country :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="Country" >
                                
                              </div>
						  </div>
						      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date Of Birth:</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control round-form" name="dateofBirth" >
                                
                              </div>
                           </div>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gender:</label>
                              <div class="col-sm-10">
                                  <input type="radio"  name="gender" value="Female" checked>Female 
								  <input type="radio"  name="gender"  value="Male" checked> Male 
                                
                              </div>
                           </div>
							  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date Of Admission:</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control round-form" name="dateofadmission" >
                                
                              </div>
                          </div>
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="save">Save</button>
							<button type="button" class="btn btn-round btn-primary" Onclick="parent_register.php"> Next</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						  
						  // insert data
						  
						  if(isset($_POST["save"]))
								{
								
								$First_Name =$_POST["fname"];
								$Middle_Name =$_POST["mname"];
								$Last_Name=$_POST["lname"];
								$Admission_Number=$_POST["addnumber"];
								$Address=$_POST["address"];
								$Telephone=$_POST["telephone"];
								$Nationality=$_POST["nationality"];
								$City=$_POST["City"];
								$Country=$_POST["Country"];
								$Date_Of_Birth=$_POST["dateofBirth"];
								$Gender=$_POST["gender"];
								$Date_Of_Admission=$_POST["dateofadmission"];
								
								
								
								$data1="INSERT INTO  registration (	fname,mname,lname,admissionNumber,address,phone,nationality,city,country,dateOfBirth,gender,dateofAdmission)VALUES( '$First_Name', '$Middle_Name', '$Last_Name', '$Admission_Number', '$Address', '$Telephone', '$Nationality',  '$City','$Country','$Date_Of_Birth','$Gender','$Date_Of_Admission')";
								
									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
									}
									
									
									//update data
								
									else if(isset ($_POST["upadte"]))
								{
								$First_Name =$_POST["fname"];
								$Middle_Name =$_POST["mname"];
								$Last_Name=$_POST["lname"];
								$Admission_Number=$_POST["admissionNumber"];
								$Address=$_POST["address"];
								$Telephone=$_POST["phone"];
								$Nationality=$_POST["nationality"];
								$City=$_POST["city"];
								$Country=$_POST["country"];
								$Date_Of_Birth=$_POST["dateOfBirth"];
								$Gender=$_POST["gender"];
								$Date_Of_Admission=$_POST["dateofAdmission"];
								
								
									$updateString = "UPDATE   registration set ename='$First_Name', '$Middle_Name', '$Last_Name','$Address', '$Telephone',  '$City','$Country','	$Date_Of_Birth',' WHERE sid='$Student_ID' ";
									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
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

</body>
</html>