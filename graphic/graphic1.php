<?
// สร้างเฮดเดอร์รูปภาพประเภท PNG
header("Content-type: image/png");
// สร้างรูปภาพขนาด 250x80 พิกเซล
$image = ImageCreate(250, 80)		
    or die("Cannot Initialize new GD image stream");
// กำหนดสีของรูปเป็นสีดำ
ImageColorAllocate($image, 0, 0, 0);	
Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
Imagedestroy($image); // คืนค่าของหน่วยความจำแก่ระบบ
?>