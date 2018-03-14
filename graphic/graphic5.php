<?
// สร้างเฮดเดอร์รูปภาพประเภท JPEG
Header("Content-type: image/jpeg"); 
// สร้างรูปภาพขนาด 300x200 พิกเซล
$image = ImageCreate(300,200); 
// กำหนดสีของรูปเป็นสีเทา
ImageColorAllocate($image,190,190,190); 
// กำหนดสีของกรอบสี่เหลี่ยมเป็นสีดำ
$photo = ImageColorAllocate($image,0,0,0); 
//สร้างกรอบสี่เหลี่ยมจากพิกัด (0,0) ถึง (299,199)
ImageRectangle($image, 0, 0, 299, 199, $photo); 
// กำหนดสีที่จะเทลงเป็นสีเหลือง
$yellow = ImageColorAllocate($image, 255, 255, 0);
// เทสีเหลืองจากเป็นสี่เหลี่ยมจากพิักัด (50,50) ถึง (250,150)
ImageFilledRectangle($image,50, 50, 250, 150, $yellow);
ImageJpeg($image); // ส่งข้อมูลรูปภาพไปยังบราวเซอร์
ImageDestroy($image); // คืนค่าของหน่วยความจำแก่ระบบ
?> 