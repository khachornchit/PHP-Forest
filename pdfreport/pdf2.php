<?  
//กำหนด Header ส่วนที่เกี่ยวข้อง  
define('FPDF_FONTPATH','font/');  // กำหนดพาธที่เก็บ font
require ('fpdf.php');		// เรียกใช้ไฟล์ fpdf.php
$pdf=new FPDF();		// สร้าง object ชื่อ pdf จากคลาส FPDF
$pdf->AddFont('regular','','angsana.php');	// เพิ่ม Font angsana ในรูปแบบปกติสำหรับใช้งาน
$pdf->AddFont('bold','B','angsanab.php');  	// เพิ่ม Font angsanab ในรูปแบบตัวหนาสำหรับใช้งาน
$pdf->AddFont('italic','I','angsanai.php');  	// เพิ่ม Font angsanai ในรูปแบบตัวเอียงสำหรับใช้งาน
$pdf->AddPage();  	// การสร้างไฟล์เอกสาร PDF
//พิมพ์ข้อความ  
$pdf->SetXY(25,35);	// กำหนดพิกัด 25,35
$pdf->SetFont('regular','',16); 	// ใช้ Font angsana แบบปกติ ขนาด 16
$pdf->Write(10,'ตัวหนังสือปกติ');  // พิมพ์ข้อความว่า ตัวหนังสือปกติ ที่ตำแหน่งจากด้านบนลงมาตามแกน Y 10 จุด
$pdf->SetXY(25,40);	// กำหนดพิกัด 25,40  	
$pdf->SetFont('bold','B',16); 	// ใช้ Font angsanab แบบตัวหนา ขนาด 16
$pdf->Write(10,'ตัวหนังสือหนา');  // พิมพ์ข้อความว่า ตัวหนังสือหนา ที่ตำแหน่งจากด้านบนลงมาตามแกน Y 10 จุด	
$pdf->SetXY(25,45);	// กำหนดพิกัด 25,45  
$pdf->SetFont('italic','I',16);	// ใช้ Font angsanai แบบตัวเอียง ขนาด 16
$pdf->Write(10,'ตัวหนังสือเอียง');  // พิมพ์ข้อความว่า ตัวหนังสือเอียง ที่ตำแหน่งจากด้านบนลงมาตามแกน Y 10 จุด	 	
//สิ้นสุดการประมวลผลและส่งออกไฟล์เป็น PDF ไฟล์  
$pdf->Output();  
?>   
