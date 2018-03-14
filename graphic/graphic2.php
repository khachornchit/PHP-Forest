<?
// สร้างเฮดเดอร์รูปภาพประเภท PNG
header("Content-type: image/png");
// สร้างรูปภาพขนาด 250x80 พิกเซล
$image = ImageCreate(250, 80)		
    or die("Cannot Initialize new GD image stream");
// กำหนดสีของรูปเป็นสีดำ
ImageColorAllocate($image, 0, 0, 0);	
// กำหนดสีของข้อความเป็นสีแดง
$text_color = ImageColorAllocate($image, 233, 14, 91);
//เขียนข้อความลงบนรูปภาพที่พิกัด (5,5)
ImageString($image, 5, 5, 5,  "Welcome to PHP Language", $text_color);
Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
Imagedestroy($image); // คืนค่าของหน่วยความจำแก่ระบบ
?>