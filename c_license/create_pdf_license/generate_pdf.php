<?php
//include connection file 
include_once("connection.php");
include_once('fpdf181/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('masco.jpg',10,4,30);
    $this->SetFont('Arial','B',10);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,7,'Masco Cotton License List',0,0,'C');
	// Line break
    $this->Ln(10);
	// Move to the right
    $this->Cell(80);
	$this->Cell(80,10,'http://192.168.50.70/cotton_license/index.php',0,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
	$this->Cell(0,10,'Design & Developed By Mushfeq ');
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('l_unit'=> 'Unit Name','l_name'=> 'License Name', 'l_no'=> 'License Number','issue_date'=> 'Issue Date','expire_date'=> 'Expire Date');
 
$result = mysqli_query($connString, "SELECT  DATEDIFF(expire_date,CURDATE()) AS remaining,l_unit,l_name, l_no, issue_date,expire_date FROM license") or die("database error:". mysqli_error($connString));

 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',4);

$pdf->SetFillColor(200,200,200); // Background color of header ,insert later

$pdf->Cell(10,12,'SL',1,0,'C',true);
$pdf->Cell(30,12,'Unit Name',1,0,'C',true);
$pdf->Cell(30,12,'License Name',1,0,'C',true);
$pdf->Cell(30,12,'License Number',1,0,'C',true);
$pdf->Cell(30,12,'Issue Date',1,0,'C',true);
$pdf->Cell(30,12,'Expire Date',1,0,'C',true);
$pdf->Cell(30,12,'Remaining Day',1,0,'C',true);
$i=1;
while($row = mysqli_fetch_array($result))
{
	if($row['remaining'] <61)
		{
			
			$result1 = mysqli_query($connString, "SELECT  DATEDIFF(expire_date,CURDATE()) AS remaining1,l_unit,l_name, l_no, issue_date,expire_date FROM license WHERE DATEDIFF(expire_date,CURDATE()) <61") or die("database error:". mysqli_error($connString));
			while($row1 = mysqli_fetch_array($result1))
				{
			
			
			
			
						$pdf->Ln();
						$pdf->SetFillColor(193,229,252); // Background color of header ,insert later
						$pdf->Cell(10,12,$i++,1,0,'C',true);
						$pdf->Cell(30,12,$row1['l_unit'],1,0,'C',true);
						$pdf->Cell(30,12,$row1['l_name'],1,0,'C',true);
						$pdf->Cell(30,12,$row1['l_no'],1,0,'C',true);
						$pdf->Cell(30,12,$row1['issue_date'],1,0,'C',true);
						$pdf->Cell(30,12,$row1['expire_date'],1,0,'C',true);
						$pdf->Cell(30,12,$row1['remaining1'],1,0,'C',true);
			//if (file_exists('filename.pdf')) {
//    unlink('filename.pdf');
//}
			//$pdf->Output('D','filename.pdf');				
				}
				$pdf->Output('D','cotton_license.pdf');
			}
		//$pdf->Output('D','filename.pdf');

}
$i++;
//header('Content-Type: application/force-download'); 
//header('Content-Description: File Transfer'); 
//$pdf->Output('D','filename.pdf');
?>