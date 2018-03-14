<?
// สร้างเฮดเดอร์รูปภาพประเภท PNG
header('Content-type: image/png');
// สร้างรูปภาพขนาด 100x100 พิกเซล
$image = ImageCreate(100, 100);
$string = 'PHP';	// กำหนดข้อความ PHP ไว้ในตัวแปร
// กำหนดสีของรูปเป็นสีเหลือง
ImageColorAllocate($image, 255, 255, 0);
// กำหนดสีของตัวอักษรเป็นสีดำ
$black = ImageColorAllocate($image, 0, 0, 0);
// พิมพ์ตัวอักษร "P"ที่มุมบนด้านซ้ายของรูป
ImageChar($image, 5, 0, 0, $string, $black);
Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
Imagedestroy($image); // คืนค่าของหน่วยความจำแก่ระบบ
?> 