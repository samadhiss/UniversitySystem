<?php
require_once("../dbcontroller.php");
if(isset($_POST["report_form"]))
	{
			
	$db_handle = new DBController();
	

	
	$result = $db_handle->runQuery("SELECT * FROM stu_attendance where faculty='".$_POST['faculty1']."' ");
	$header = $db_handle->runQuery("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='pdm' 
    AND `TABLE_NAME`='stu_attendance'");


	require("fpdf/fpdf.php");

	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',12);		
	foreach($header as $heading) {
		foreach($heading as $column_heading)
		$pdf->Cell(40,12,$column_heading,1);
		}
foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(40,12,$column,1);
}
$result2 = $db_handle->runQuery("SELECT count(id) FROM stu_attendance where faculty='".$_POST['faculty1']."' ");
$x="Total";

foreach($result2 as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
		$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(40,12,$column,1);
}

$pdf->Output();

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