<?
header("Content-type: image/png");  // สร้างเฮดเดอร์รูปภาพประเภท PNG
// สร้างรูปภาพขนาด 200x200 พิกเซล
$image = ImageCreate(200, 200) or die("Cannot Initialize new GD image stream");
ImageColorAllocate($image, 0, 0, 0);   // กำหนดสีของรูปเป็นสีดำ
// กำหนดค่าของสีขาว, แดง, เขียว และน้ำเงินตามลำดับ
$white = imagecolorallocate($image, 255, 255, 255);
$red   = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);
$blue  = imagecolorallocate($image, 0, 0, 255);

// วาดเส้นโค้งเป็นส่วนหัว
ImageArc($image, 100, 100, 200, 200,  0, 360, $white);
// วาดเส้นโค้งเป็นรูปปาก
ImageArc($image, 100, 100, 150, 150, 25, 155, $red);
// วาดเส้นโค้งเป็นตาซ้าย และขวา
ImageArc($image,  60,  75,  50,  50,  0, 360, $green);
ImageArc($image, 140,  75,  50,  50,  0, 360, $blue);

Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
Imagedestroy($image);   // คืนค่าของหน่วยความจำแก่ระบบ
?> 