<?php
require_once("../dbcontroller.php");
if(isset($_POST["form_submit"]))
	{
			
			$Addmision_No=$_POST["Ad_num"];
			$Date=$_POST["date"];
			$Status=$_POST["status"];
			$Faculty=$_POST["faculty"];
		
			
								
			$data="INSERT INTO stu_attendance(Ad_num,date,status,faculty)VALUES('$Addmision_No','$Date','$Status','$Faculty')";
						  
			if(!mysql_query($data)){
					die('Error : '.mysql_error());
						echo "connection failed!";
			}	

	//$db_handle = new DBController();
	}

?>


<!--?php

if(isset($_POST["form_submit"]))
	{
								
		$Addmision_No=$_POST["Ad_num"];
		$Date=$_POST["date"];
		$Status=$_POST["status"];


	

		require("fpdf/fpdf.php");
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont("Arial","B",12);
		$pdf->Cell(0,10,"Student Attendance",0,1);
		$pdf->Cell(60,10,"Admision No",1,0);
		$pdf->Cell(60,10,$Addmision_No,1,1);

		$pdf->Cell(60,10,"Date",1,0);
		$pdf->Cell(60,10,$Date,1,1);

		$pdf->Cell(60,10,"status",1,0);
		$pdf->Cell(60,10,$Status,1,1);


		$pdf->output();

	}




?>