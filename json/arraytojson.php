<?php
header ( 'Cache-Control: no-cache, must-revalidate' );
header ( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
header ( "Content-type: application/json;charset=utf-8" );

$arr = array (
		'data',
		'data2' => 'more data',
		'data3' => array (
				'even',
				'more',
				'data' 
		) 
);

echo json_encode ( $arr );
?>