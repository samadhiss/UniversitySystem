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
        <title>Parent Registration Form</title>
		
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
          	<h3><i class="fa fa-angle-right"></i>Parent Registration Form</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">First Name :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="fname">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Last Name :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="lname">
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
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="finish" >Save</button>
							<button type="button" class="btn btn-round btn-primary" name="login" >LogIn</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						  
						  // insert data
						  
						  if(isset($_POST["finish"]))
								{
								
								
								$First_Name =$_POST["fname"];							
								$Last_Name=$_POST["lname"];								
								$Address=$_POST["address"];
								$Telephone=$_POST["telephone"];
								$Nationality=$_POST["nationality"];
								$City=$_POST["City"];
								$Country=$_POST["Country"];
								
								
								
								$data1="INSERT INTO parent_registration (fname,lname,address,phone,nationality,city,country)VALUES( '$First_Name', '$Student_ID', '$Student_Email_Address', '$Course', '$Course_Fee', '$Bank', '$Method',  '$Telephone','$Paid_Date','$Select_the_Group')";
								
									
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