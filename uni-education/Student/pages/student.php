


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
<title>Student</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
<script src="assets/js/angular.js"></script>
<script src="assets/js/app.js"></script>
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
<body ng-app="validationApp" ng-controller="mainController">


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
        <li class="active"><a href="http://localhost/uni-education/Student/pages/student.php">Student</a></li>
        <li><a href="http://localhost/uni-education/Admin/">Administrator</a></li>
        <li><a href="http://localhost/uni-education/Staff/pages/staff.php">Staff</a></li>
		<li><a href="http://localhost/uni-education/Visitor/pages/visitor.php">Visitors</a></li>
        <li><a href="http://localhost/uni-education/Aboutus.php">About us</a></li>
      </ul>
    </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul for="sub_links" font="18px">
      <li><a href="#" id="link_1">|Enrol Courses & do Payments|</a></li>
	  <li ><a href="#" id="link_2">|Edit Profile|</a></li>
        <li><a href="#" id="link_3">|Ask For Help|</a></li>
		<li><a href="#" id="link_4">|View Events|</a></li>
		<li><a href="#" id="link_5">|Apply Events|</a></li>
		<li><a href="#" id="link_6">|View APititute Test Marks|</a></li>
    </ul>
  </div>

</div>
<!-- ####################################################################################################### -->



<div id="div_1"> 
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Enrol Courses & do Payments</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST" name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate>
                    
                      <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
                            <label class="col-sm-2 col-sm-2 control-label">Student Name:*</label>
                            <div class="col-sm-10">
                              <input type="text" name="sname" class="form-control" ng-model="user.name" required>
                              <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block"> Name is required.</p>
                            </div>
                      </div> 

                         <div class="form-group" ng-class="{ 'has-error' : userForm.sid.$invalid && !userForm.sid.$pristine }">
                            <label class="col-sm-2 col-sm-2 control-label">Student ID :</label>
                            <div class="col-sm-10">
                              <input type="text" name="sid" class="form-control" ng-model="user.sid" required>
                              <p ng-show="userForm.sid.$invalid && !userForm.sid.$pristine" class="help-block"> ID is required.</p>
                            </div>
                      </div> 
                          <!-- EMAIL -->
        <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label class="col-sm-2 col-sm-2 control-label">Student Email Address</label>
             <div class="col-sm-10">
              <input type="email" name="email" class="form-control" ng-model="user.email">
              <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
            </div>  
        </div>

					
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Course:</label>
                              <div class="col-sm-10">
                                  <select class="form-control"  id="type_sele" name="type_sele" >
											<option name="type1" >IT</option>
								            <option name="type2" >CSN</option>
										    <option name="type3" >EE</option>
										    <option name="type4" >IM</option></select>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Course Fee:</label>
                              <div class="col-sm-10">
                                  <label class="form-control round-form" id="amount" name="amount"></label>
                              </div>
                          </div>

                         <div class="form-group" ng-class="{ 'has-error' : userForm.bank.$invalid && !userForm.bank.$pristine }">
                            <label class="col-sm-2 col-sm-2 control-label">Bank:</label>
                            <div class="col-sm-10">
                              <input type="text" name="bank" class="form-control" ng-model="user.bank" required>
                              <p ng-show="userForm.bank.$invalid && !userForm.bank.$pristine" class="help-block"> Bank is required.</p>
                            </div>
                      </div>           

						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Method :</label>
                              <div class="col-sm-10">
                                  <select id="type_sele1" name="type_sele1" ><option name ="type0"  value="NULL">Select the Method </option>
											<option name="type1" value="Creditc">Credit Card</option>
								            <option name="type2" value="cash">Cash</option>
										    
										   </select>
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Telephone:</label>
                              <div class="col-sm-10">
                                  <input type="number" class="form-control round-form"  name="telephone">
                              </div>
                          </div>
                          
							  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Paid Date:</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control round-form" name="pdate">                              
                             </div>                         
                           </div>
						   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select the Group :</label>
                              <div class="col-sm-10">
                                  <select id="type_sele11" name="type_sele11" >
											<option name="type1" value="w1">Weekdays</option>
								            <option name="type2" value="w2">Weekend</option>									    
										   </select>                              
                              </div>
                          </div>
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name ="form_submit">Add</button>
							<button type="button" class="btn btn-round btn-primary" name ="upadte">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  <?php
						  
						  // insert data
						  
						  if(isset($_POST["form_submit"]))
								{
								
								$Student_Name=$_POST["sname"];
								$Student_ID=$_POST["sid"];
								$Student_Email=$_POST["email"];
								$Course=$_POST["type_sele"];
								$Course_Fee=$_POST["amount"];
								$Bank=$_POST["bank"];
								$Method=$_POST["type_sele1"];								
								$Telephone=$_POST["telephone"];
								$Paid_Date=$_POST["pdate"];
								$Select_the_Group=$_POST["type_sele11"];
								
								$data1="INSERT INTO enrollcourse_paymnets (sname,sid,semail,course,course_fee,bank,method,phone,paid_date,select_group)VALUES( '$Student_Name', '$Student_ID', '$Student_Email', '$Course', '$Course_Fee', '$Bank', '$Method',  '$Telephone','$Paid_Date','$Select_the_Group')";
								
									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
									}
									
									
									
									
									
									
								//update data
								
									else if(isset ($_POST["upadte"]))
								{
								$Student_Name=$_POST["sname"];
								$Student_ID=$_POST["sid"];
								$Student_Email_Address=$_POST["email"];
								$Course=$_POST["type_sele"];
								$Course_Fee=$_POST["amount"];
								$Bank=$_POST["bank"];
								$Method=$_POST["type_sele1"];								
								$Telephone=$_POST["telephone"];
								$Paid_Date=$_POST["pdate"];
								$Select_the_Group=$_POST["type_sele11"];
									$updateString = "UPDATE  enrollcourse_paymnets set fname='$Student_Name' ,'$Student_ID','$Student_Email_Address','	$Course','$Telephone','	$Paid_Date','$Select_the_Group' WHERE sid='$Student_ID' ";
									
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
</div>
<!-- ####################################################################################################### -->

<div id="div_2">
	
	<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Edit Profile</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST">
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student ID:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="sid">
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
                              <label class="col-sm-2 col-sm-2 control-label">Email Address:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"   name="semail">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">City/Town:</label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control round-form" name="city">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select Country:</label>
                              <div class="col-sm-10">
                                  <select id="type_sele11" name="type_sele11">
								<option value="AF">Afghanistan</option>
								<option value="AX">Åland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia, Plurinational State of</option>
								<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BV">Bouvet Island</option>
								<option value="BR">Brazil</option>
								<option value="IO">British Indian Ocean Territory</option>
								<option value="BN">Brunei Darussalam</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CX">Christmas Island</option>
								<option value="CC">Cocos (Keeling) Islands</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CD">Congo, the Democratic Republic of the</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CI">Côte d'Ivoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CW">Curaçao</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="DO">Dominican Republic</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="ET">Ethiopia</option>
								<option value="FK">Falkland Islands (Malvinas)</option>
								<option value="FO">Faroe Islands</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GF">French Guiana</option>
								<option value="PF">French Polynesia</option>
								<option value="TF">French Southern Territories</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="GL">Greenland</option>
								<option value="GD">Grenada</option>
								<option value="GP">Guadeloupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GG">Guernsey</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HM">Heard Island and McDonald Islands</option>
								<option value="VA">Holy See (Vatican City State)</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran, Islamic Republic of</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JE">Jersey</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KP">Korea, Democratic People's Republic of</option>
								<option value="KR">Korea, Republic of</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Lao People's Democratic Republic</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macao</option>
								<option value="MK">Macedonia, the former Yugoslav Republic of</option>
								<option value="MG">Madagascar</option>
								<option value="MW">Malawi</option>
								<option value="MY">Malaysia</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MQ">Martinique</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="YT">Mayotte</option>
								<option value="MX">Mexico</option>
								<option value="FM">Micronesia, Federated States of</option>
								<option value="MD">Moldova, Republic of</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="ME">Montenegro</option>
								<option value="MS">Montserrat</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NL">Netherlands</option>
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau</option>
								<option value="PS">Palestinian Territory, Occupied</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PN">Pitcairn</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RE">Réunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russian Federation</option>
								<option value="RW">Rwanda</option>
								<option value="BL">Saint Barthélemy</option>
								<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="MF">Saint Martin (French part)</option>
								<option value="PM">Saint Pierre and Miquelon</option>
								<option value="VC">Saint Vincent and the Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SX">Sint Maarten (Dutch part)</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="GS">South Georgia and the South Sandwich Islands</option>
								<option value="SS">South Sudan</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SJ">Svalbard and Jan Mayen</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syrian Arab Republic</option>
								<option value="TW">Taiwan, Province of China</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania, United Republic of</option>
								<option value="TH">Thailand</option>
								<option value="TL">Timor-Leste</option>
								<option value="TG">Togo</option>
								<option value="TK">Tokelau</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad and Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TM">Turkmenistan</option>
								<option value="TC">Turks and Caicos Islands</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela, Bolivarian Republic of</option>
								<option value="VN">Viet Nam</option>
								<option value="VG">Virgin Islands, British</option>
								<option value="VI">Virgin Islands, U.S.</option>
								<option value="WF">Wallis and Futuna</option>
								<option value="EH">Western Sahara</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option></select>
			
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
							<button type="submit" class="btn btn-round btn-success" name="add">Add</button>
							<button type="button" class="btn btn-round btn-primary" name="upadte">Update</button>
							<button type="reset" class="btn btn-round btn-warning">Reset</button>
                                
                              </div>
                          </div>
						  
						  
						  <?php
						  
						  // insert data
						  
						  if(isset($_POST["add"]))
								{
								
								$Student_ID=$_POST["sid"];
								$First_Name=$_POST["fname"];
								$Surname=$_POST["surname"];
								$Email_Address=$_POST["semail"];
								$City_Town=$_POST["city"];
								$Select_Country=$_POST["type_sele11"];
								$Description=$_POST["descrip"];								
								
								
								
								$data1="INSERT INTO  stu_profile (sid,fname,surname,email,city,country,Description)VALUES( '$Student_ID', '$First_Name', '$Surname', '$Email_Address', '$City_Town', '$Select_Country', '$Description')";
								
									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
									}
									
									
									
									
									
									//update data
								
									else if(isset ($_POST["upadte"]))
								{
								$Student_ID=$_POST["sid"];
								$First_Name=$_POST["fname"];
								$Surname=$_POST["surname"];
								$Email_Address=$_POST["email"];
								$City_Town=$_POST["city"];
								$Select_Country=$_POST["country"];
								$Description=$_POST["Description"];								
								$Current_Picture=$_POST["Current_pic"];
								$New_Picture =$_POST["New_Pic"];
									
									$updateString = "UPDATE  stu_profile set fname='$First_Name' ,'$Surname','$Email_Address','	$City_Town','$Select_Country','	$Description','$Current_Picture','$New_Picture' WHERE sid='$Student_ID' ";
									
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


</div>
<!-- ####################################################################################################### -->
<div id="div_4">
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
						$comments = mysqli_query($conn,$selectString);
					?>
					<tbody>
					<?php
					while($row = mysqli_fetch_array($comments)) 
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
<div id="div_5">
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
                                  <input type="text" class="form-control round-form" width="50"  name="ename">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student FullName :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"  name="sname">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student ID:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="sid">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student email:</label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control round-form" name="semail">
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
								
									
									if(!mysqli_query($conn,$data1)){
										die('Error : '.mysqli_error($conn));
										echo "connection failed!";
										}										
								}
									
									
									//update data
								
									else if(isset ($_POST["upadte"]))
								{
								$Event_Name=$_POST["ename"];
								$Student_Name=$_POST["sname"];
								$Student_ID=$_POST["sid"];
								$Student_email=$_POST["semail"];
								
									$updateString = "UPDATE  apply_events set ename='$Event_Name' ,'$Student_Name','$Student_email' WHERE sid='$Student_ID' ";
									
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


$( "#type_sele" ).change(function() {
  
   var courseres =document.getElementById("type_sele");
   var course = courseres.options[courseres.selectedIndex].value;
   alert( "Handler for .change() called." +course);
   if(course=="IT"){
	   
	   
	    document.getElementById("amount").innerHTML =  "$182,000";
   }
   else if(course=="CSN"){
	   document.getElementById("amount").innerHTML =  "$150,000";
	   
   }
   
   else if(course=="EE"){
	   document.getElementById("amount").innerHTML =  "$110,000";
	   
   }
   
   else if(course=="IM"){
	   document.getElementById("amount").innerHTML =  "$120,000";
	   
   }
   
});

  // Hide div 2 by default
  $('#div_2').hide();
  $('#div_3').hide();
  $('#div_4').hide();
  $('#div_5').hide();
 

  $('#link_1').click(function(){ 
      $('#div_2').hide();
      $('#div_3').hide();
      $('#div_4').hide();
	  $('#div_5').hide();
      $('#div_1').show();

  });

  $('#link_2').click(function(){ 
      $('#div_1').hide();
      $('#div_3').hide();
      $('#div_4').hide();
	  $('#div_5').hide();
      $('#div_2').show();
	
  });


 $('#link_3').click(function(){ 
      $('#div_1').hide();
      $('#div_2').hide();      
	  $('#div_4').hide();
	  $('#div_5').hide();
	  $('#div_3').show();
  }); 
  
  $('#link_4').click(function(){ 
    $('#div_2').hide();      
    $('#div_1').hide();
    $('#div_3').hide();
	$('#div_5').hide();
    $('#div_4').show();
  }); 
  
  $('#link_5').click(function(){ 
    $('#div_2').hide();      
    $('#div_1').hide();
    $('#div_3').hide();
	$('#div_4').hide();
    $('#div_5').show();
  }); 
  
  

});

</script>