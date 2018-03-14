<?
	header("Content-type:image/png"); // สร้างเฮดเดอร์รูปภาพประเภท PNG
	// สร้างรูปภาพขนาด 300x200 พิกเซล
	$image = ImageCreate(300,200) or die("Cannot Initialize new GD image stream");
	ImageColorAllocate($image,0,0,0);  // กำหนดสีของรูปเป็นสีดำ
	// กำหนดสีของเส้นตรงเป็นสีแดง
	$line_color = ImageColorAllocate($image,233,14,91);
	// สร้างเส้นตรงจากพิกัด (1,100) ถึง (299,100)
	ImageLine($image,1,100,299,100,$line_color);
	Imagepng($image);	// ส่งข้อมูลรูปภาพไปยังบราวเซอร์
	Imagedestroy($image);   // คืนค่าของหน่วยความจำแก่ระบบ
?>