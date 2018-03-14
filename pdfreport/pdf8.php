<?  
//กำหนด Header ส่วนที่เกี่ยวข้อง  
efine('FPDF_FONTPATH','font/');  // กำหนดพาธที่เก็บ font
require ('fpdf.php');		// เรียกใช้ไฟล์ fpdf.php
$pdf=new FPDF();		// สร้าง object ชื่อ pdf จากคลาส FPDF
$pdf->AddFont('regular','','angsana.php');  // เพิ่ม Font angsana ในรูปแบบปกติสำหรับใช้งาน
$pdf->AddPage();  	// การสร้างไฟล์เอกสาร PDF
$pdf->SetFont('regular','',16); 	// ใช้ Font angsana แบบปกติ ขนาด 16
$pdf->Text(80,5,'รายงานแสดงรายการสินค้า'); 	// พิมพ์ชื่อรายงาน
$pdf->Line(5,8,200,8);  			// วาดเส้นตรง		
// พิมพ์หัวรายงาน
$pdf->Text(5,15,'รหัสสินค้า'); 			
$pdf->Text(38,15,'ชื่อสินค้า'); 
$pdf->Text(98,15,'ราคาทุน'); 
$pdf->Text(135,15,'ราคาขาย'); 
$pdf->Text(165,15,'จำนวน'); 
$pdf->Line(5,18,200,18);  			// วาดเส้นตรง
$link = mysql_connect("localhost", "root", "1234");	// เชื่อมต่อฐานข้อมูล MySQL		  
$sql = "use productdb";			// เลือกใช้ฐานข้อมูล productdb				
$result = mysql_query($sql);			// query ข้อมูล					 
mysql_query("set NAMES tis620");		// set ภาษาไทย
$sql = "select * from product;";		  	// ดึงข้อมูลทุกฟิลด์จากตาราง product
$result = mysql_query($sql);			// query ข้อมูล					 
$line = 25;					// กำหนดบรรทัดเริ่มต้นแสดงข้อมูลในฐานข้อมูล
while ($dbarr = mysql_fetch_array($result))		// วนลูปเพื่อดึงข้อมูลจากการ query		 
{					
	$pdf->Text(10,$line,$dbarr[code]);  	// แสดงค่ารหัสสินค้า
	$pdf->Text(40,$line,$dbarr[name]);  	// แสดงค่าชื่อสินค้า
	$pdf->Text(100,$line,$dbarr[cost]);  	// แสดงค่าราคาทุน
	$pdf->Text(140,$line,$dbarr[price]);  	// แสดงค่าราคาขาย
	$pdf->Text(170,$line,$dbarr[quantity]);  	// แสดงค่าจำนวน
	$line = $line + 5;			// ข้อมูล record ต่อไปแสดงในบรรทัดที่ตำแหน่งแกน Y เพิ่มขึ้นอีก 5 จุด
}
mysql_close($link);				// ปิดการเชื่อมต่อฐานข้อมูล MySQL
$pdf->Line(5,$line,200,$line);  			// วาดเส้นตรง		
$pdf->Output();  
?>   
