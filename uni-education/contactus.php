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

    <div id="loginpanel">
      <ul>
    
        <li class="right" id="toggle"><a id="slideit" href="login.php">Log In Here</a>
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
    
        <li><a href="http://localhost/uni-education/About us.php">About us</a></li>
		<li class="active"><a href="http://localhost/uni-education/contactus.php">Contact Us</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="div_1" align="center"> 
<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Contact Us</h3>        	
          	<!-- BASIC FORM structure -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST" action="about_send_email.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="name">Your Name :</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" width="50" id="name" name="name">
                              </div>
                          </div>                        
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="email">Email:</label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control round-form" id="email" name="email">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="comment">Comment:</label>
                              <div class="col-sm-10">
                                   <textarea name="comment" id="comment"></textarea>
                              </div>
                          </div>						  							 				
						  <div class="form-group">
                              
                              <div class="col-sm-10">
							<button type="submit" class="btn btn-round btn-success" name="submit">Send Email</button>						
							<button type="reset" class="btn btn-round btn-warning">Reset</button>							
                                
                              </div>
                          </div>						 
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
