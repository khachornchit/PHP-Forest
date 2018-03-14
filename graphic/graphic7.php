<?
header("Content-type: image/png");  // สร้างเฮดเดอร์รูปภาพประเภท PNG
// สร้างรูปภาพขนาด 400x300 พิกเซล
$image = ImageCreate(400, 300) or die("Cannot Initialize new GD image stream");
ImageColorAllocate($image, 0, 0, 0);   // กำหนดสีของรูปเป็นสีดำ
// กำหนดสีของกรอบรูปหลายเหลี่ยมเป็นสีขาว
$col_poly = ImageColorAllocate($image, 255, 255, 255);
// วาดรูปหลายเหลี่ยมโดยเป็นรูป 3 เหลี่ยมมีพิกัดคือ (0,0),(100,200),(300,200)
ImagePolygon($image, array (0, 0, 100, 200, 300, 200), 3, $col_poly);
// กำหนดค่าของสีเหลือง
$yellow = ImageColorAllocate($image, 255, 255, 0);   
ImageFilledPolygon($image, array (5, 5, 98, 199, 298, 199), 3, $yellow);
Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
Imagedestroy($image);   // คืนค่าของหน่วยความจำแก่ระบบ
?>
