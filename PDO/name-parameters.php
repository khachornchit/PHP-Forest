<?php
include 'connect.php';

echo "Name Parameters" . "<br/><br/>";
$stmt = $db->prepare ( "SELECT * FROM actor WHERE first_name = :firstname" );
$first_names = array (
		'JENNIFER',
		'JOHNNY',
		'BETTE',
		'GRACE',
		'MATTHEW' 
);
foreach ( $first_names as $first_name ) {
	$stmt->bindParam ( ':firstname', $first_name );
	$stmt->execute ();
	$row = $stmt->fetch ( PDO::FETCH_ASSOC );
	echo "<pre>" . var_dump ( $row ) . "</pre>";
}

echo "fetchAll()" . "<br/><br/>";
$stmt = $db->prepare ( "SELECT * FROM actor WHERE first_name Like '%he%'" );
$stmt->execute ();
$rows = $stmt->fetchAll ();
foreach ( $rows as $row ) {
	echo "<pre>" . var_dump ( $row ) . "</pre>";
}