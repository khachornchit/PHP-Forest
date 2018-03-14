<?
function Bar_Chart($title,$value)
{
	header("Content-type: image/png");       //กำหนดเฮดเดอร์
	$img = ImageCreate(450, 440);            //สร้างรูปขนาด 450x440 พิกเซล
	ImageColorAllocate($img, 255, 255, 255); //กำหนดพื้นรูปเป็นสีขาว

	//กำหนดสีที่ใช้ในการวาด
	$line = ImageColorAllocate($img ,176, 208, 210);
	$dataFill = ImageColorAllocate($img, 122, 176, 180);
	$black = ImageColorAllocate($img, 0, 0, 0);

	//สร้างเส้นตรงในแนวนอน
	ImageLine($img, 20, 420, 430, 420, $black);

	//สร้างเส้นตรงในแนวตั้ง
	ImageLine($img, 20, 420, 20, 20, $black);

	$bartick = 20;   //ความหนาของแผนภูมิแท่งแต่ละอัน
	$barspace = 90;  //ระยะห่างระหว่างแผนภูมิแท่งแต่ละอัน
	$barmax = 400;   //ความยาวสูงสุดของแผนภูมิแท่ง
	$baseX = 30;     //จุดเริ่มต้นในแนวนอนของแผนภูมิแท่ง
	$baseY = 420;     //จุดเริ่มต้นในแนวตั้งของแผนภูมิแท่ง

	//วนลูปเพื่อสร้างแผนภูมิแท่งทั้งห้า
	for ($i=0; $i<=4; $i++) {
	// สร้างตัวแปรอาร์เรย์เก็บพิกัดของมุมต่างๆของแผนภูมิแท่ง เพื่อนำไปกำหนดให้ฟังก์ชั่น ImagePolygon() 
	$setBar[$i] = array($baseX, $baseY, $baseX,($baseY-$barmax),($baseX+$bartick),($baseY-$barmax),($baseX+$bartick),$baseY);
	//ใช้ฟังก์ชั่น ImagePolygon() เพื่อสร้างแผนภูมิแท่ง
	ImagePolygon($img, $setBar[$i], 4, $line);
	//วาดแผนภูมิแท่ง โดยใช้ฟังก์ชั่น ImageFilledRectangle()
	ImageFilledRectangle($img, $baseX, ($baseY-$value[$i]), ($baseX+$bartick),$baseY, $dataFill);
  
	ImageString($img, 3, ($baseX + 10), ($baseY + 5), $title[$i], $black);
	ImageString($img, 3, ($baseX + 10), ($baseY-$value[$i]-15) , $value[$i], $black);

	$baseX += $barspace;     //ขยับจุดเริ่มต้นในแนวตั้งของแผนภูมิแท่ง
	}
	ImagePNG($img);
	ImageDestroy($img);
}

//กำหนดตัวแปรอาร์เรย์ของชื่อข้อมูล 5 ตัว
	$title = array("Beef","Pork","Chicken","Lamb","Fish");
//กำหนดตัวแปรอาร์เรย์ของมูลค่าของข้อมูล 5 ตัว
	$value = array("150","180","300","250","400");

// เรียกฟังก์ชัน Bar_Chart() 
Bar_Chart($title,$value);

?>
