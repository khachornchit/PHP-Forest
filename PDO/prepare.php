<?php
include 'connect.php';
echo "Prepare Statement bindValue" . "<br/><br/>";
$stmt = $db->prepare ( "SELECT * FROM actor WHERE first_name LIKE ?" );
$stmt->bindValue ( 1, '%EN%' );
$stmt->execute ();

echo "FETCH_ASSOC" . "<br/>";
while ( $row = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
	echo "<pre>" . var_dump ( $row ) . "</pre>";
	break;
}
echo "<br/>";

echo "Prepare Statement bindParam" . "<br/><br/>";
$stmt = $db->prepare ( "SELECT * FROM actor WHERE actor_id=? AND first_name LIKE ?" );
$name = '%EN%';
$stmt->bindValue ( 1, 53 );
$stmt->bindParam ( 2, $name );
$stmt->execute ();

echo "FETCH_ASSOC" . "<br/>";
while ( $row = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
	echo "<pre>" . var_dump ( $row ) . "</pre>";
	break;
}

echo "Prepare Statement using Array" . "<br/><br/>";
$stmt = $db->prepare ( "SELECT * FROM actor WHERE first_name = ?" );
$first_names = array (
		'JENNIFER',
		'JOHNNY',
		'BETTE',
		'GRACE',
		'MATTHEW' 
);

foreach ($first_names as $first_name) {
	$stmt->bindParam ( 1, $first_name );
	$stmt->execute ();
	$row = $stmt->fetch ( PDO::FETCH_ASSOC );
	echo "<pre>" . var_dump ( $row ) . "</pre>";
}