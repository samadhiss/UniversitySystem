<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
 <?php

 //login validation

 if(empty($_POST)=== false)
 {
	if(strlen($_POST['pupilpass'])<5)
	 {
		echo "ERROR in Password";
		
	}
	
	
	
 }


// ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>School Education</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<!-- End Homepage Only Scripts -->
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
              <input type="text" name="pupilname" id="pupilname" value="" />
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
              <a href="registration.php"><input type="submit" name="pupilsignup" id="pupilsignup" value="SignUp" />
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
        <li class="active" ><a href="http://localhost/uni-education/Student/pages/index.php">Home</a></li>
        <li ><a href="http://localhost/uni-education/Student/pages/student.php">Student</a></li>
        <li><a href="http://localhost/uni-education/Admin/">Administrator</a></li>
        <li><a href="http://localhost/uni-education/Staff/staff.php">Staff</a></li>
		<li><a href="http://localhost/uni-education/Visitor/">Visitors</a></li>
        <li><a href="http://localhost/uni-education/About us.php">About us</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/demo/campus.jpg" alt="" /></a>
      <div class="floater">
         <h2>University of EDU</h2>
        <p>EDU University is world-famous for academic excellence. We pick the best and brightest students purely on their academic merit and passion for their chosen course. If that sounds like you, and you like to think for yourself, EDU could be the right university for you.</p>
        <!--p class="readmore"><a href="#">Continue Reading &raquo;</a></p-->
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/convo.jpg" alt="" /></a>
      <div class="floater">
        <h2>EDU Students</h2>
        <p>Studying at EDU, you are part of a diverse community of over 22,000 fellow students, drawn from over 140 different countries. This website provides access to information, services and resources to help you get the most out of your university experience.</p>
        <!--p class="readmore"><a href="#">Continue Reading &raquo;</a></p-->
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/food.jpg" alt="" /></a>
      <div class="floater">
        <h2>3. Introducing the Colleges</h2>
        <p>The University is divided up in to more than 30 different colleges and halls. Each one has rooms where students live, as well as clubs and societies to join, and facilities like a dining room, bar and common room.  Colleges are much more than just accommodation though, as students have some of their teaching in their college, and spend time studying in the college library.</p>
        <!--p class="readmore"><a href="#">Continue Reading &raquo;</a></p-->
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/ss.jpg" alt="" /></a>
      <div class="floater">
        <h2>4. Entrance Requirements</h2>
        <p>Many students who apply to EDU are taking A-levels but please note that any candidate who has already taken, or who is currently studying, any other equivalent qualifications is also most welcome to apply.</p>
        <!--p class="readmore"><a href="#">Continue Reading &raquo;</a></p-->
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/ste.jpg" alt="" /></a>
      <div class="floater">
        <h2>Open Events and Visiting</h2>
        <p>come and see us and find out for yourself what EDU is really like.</p>
        <!--p class="readmore"><a href="#">Continue Reading &raquo;</a></p-->
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        
      </div>
      <div class="column2">
      </div>
    </div>
    <div class="fl_right">
      
      
    </div>
    <br class="clear" />
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