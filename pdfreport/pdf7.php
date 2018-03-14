<?  
//กำหนด Header ส่วนที่เกี่ยวข้อง  
define('FPDF_FONTPATH','font/');  // กำหนดพาธที่เก็บ font
require ('fpdf.php');		// เรียกใช้ไฟล์ fpdf.php
$pdf=new FPDF();		// สร้าง object ชื่อ pdf จากคลาส FPDF
$pdf->AddPage();  		// การสร้างไฟล์เอกสาร PDF
$pdf->Image('logo.gif', 59, 52);	// การแสดงรูปภาพ logo.gif ที่พิกัด 59,52
$pdf->Output();  		//สิ้นสุดการประมวลผลและส่งออกไฟล์เป็น PDF ไฟล์  
?>   
