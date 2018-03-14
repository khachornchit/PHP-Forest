<?
	$sell = array(1250, 2000, 1000, 3500, 4000);
	$count = 0;
	While ($count <= 4)
	{
		$sellno = $count + 1;
		echo "พนักงานคนที่ $sellno มียอดขายเท่ากับ $sell[$count] <br>";
		$sum = $sum + $sell[$count];
		$count = $count + 1;
	}
	echo "ผลรวมของพนักงานขายทั้ง 5 คน มีค่าเท่ากับ $sum";
?>