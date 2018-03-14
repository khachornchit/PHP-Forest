<?  
$link = mysql_connect("localhost", "root", "1234");	// เชื่อมต่อฐานข้อมูล MySQL		  
$sql = "use productdb";			// เลือกใช้ฐานข้อมูล productdb				
$result = mysql_query($sql);			// query ข้อมูล					 
$sql = "select * from product where name like '%$productname%';";	// ดึงข้อมูลสินค้าจากตาราง product ตามเงื่อนไขชื่อสินค้า
$result = mysql_query($sql);			// query ข้อมูล		
echo "<table border=1>
	<tr>
		<td>รหัสสินค้า</td>
		<td>ชื่อสินค้า</td>
		<td>ราคาต้นทุน</td>
		<td>ราคาขาย</td>
		<td>จำนวน</td>
	</tr>";
while ($dbarr = mysql_fetch_array($result))		// วนลูปเพื่อดึงข้อมูลจากการ query		 
{					
	echo "<tr>";
	echo "<td>$dbarr[code]</td>";
	echo "<td>$dbarr[name]</td>";
	echo "<td>$dbarr[cost]</td>";	
	echo "<td>$dbarr[price]</td>";
	echo "<td>$dbarr[quantity]</td>";
}
mysql_close($link);				// ปิดการเชื่อมต่อฐานข้อมูล MySQL
?>                  