<?
	function pass($val)
	{
		$val = $val + 10;
		return $val;
	}

	$value = 100;
	echo "สมมติค่าตัวแปร \$value มีค่าเท่ากับ $value <br>";
	echo "ค่าของตัวแปร \$value ก่อนที่จะส่งผ่านค่าไปยังฟังก์ชันมีค่าเท่ากับ $value <br>";
	pass($value);
	echo "ค่าของตัวแปร \$value หลังจากคืนค่ากลับจากฟังก์ชันมีค่าเท่ากับ $value <br>";		
?>