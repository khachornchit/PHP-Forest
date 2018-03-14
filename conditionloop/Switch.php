<?
	$month = date("M");
	echo "เดือนปัจจุบัน ณ.วันนี้ คือ เดือน ";
	switch($month)
	{
		case "Jan": echo "มกราคม"; 
		case "Feb": echo "กุมภาพันธ์"; 
		case "Mar": echo "มีนาคม"; 
		case "Apr": echo "เมษายน"; 
		case "May": echo "พฤษภาคม"; 
		case "Jun": echo "มิถุนายน"; 
		case "Jul": echo "กรกฎาคม"; 
		case "Aug": echo "สิงหาคม"; 
		case "Sep": echo "กันยายน"; 
		case "Oct": echo "ตุลาคม"; 
		case "Nov": echo "พฤศจิกายน"; 
		case "Dec": echo "ธันวาคม"; 
	}
?>