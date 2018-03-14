<?
// สร้างเฮดเดอร์รูปภาพประเภท PNG
header("Content-type: image/png");
// สร้างรูปภาพขนาด 400x300 พิกเซล
$image = ImageCreate(400, 300) or die("Cannot Initialize new GD image stream");
// กำหนดสีของรูปเป็นสีดำ
ImageColorAllocate($image, 0, 0, 0);
// กำหนดสีของกรอบรูปหลายเหลี่ยมเป็นสีขาว
$col_poly = ImageColorAllocate($image, 255, 255, 255);

// วาดรูปหลายเหลี่ยมโดยเป็นรูป 3 เหลี่ยมมีพิกัดคือ (0,0),(100,200),(300,200)
ImagePolygon($image, array (
        0,   0,
        100, 200,
        300, 200
    ),
    3,
    $col_poly);
Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
Imagedestroy($image); // คืนค่าของหน่วยความจำแก่ระบบ
?> 