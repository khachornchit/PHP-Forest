<?
	function cal_triangle($base,$height)
	{
		$area = 0.5*$base*$height;
		return $area;
	}

	echo "รูปสามเหลี่ยมมีความยาวฐานเท่ากับ 5 หน่วยและความสูงเท่ากับ 10 หน่วย <br>";
	echo "สามเหลี่ยมรูปนี้จะมีพื้นที่เท่ากับ ".cal_triangle(5,10)." หน่วย";  
?>