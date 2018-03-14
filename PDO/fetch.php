<?php
include 'connect.php';
echo "Actor Database" . "<br/><br/>";
$stmt = $db->Query ( "SELECT * FROM actor" );

echo "FETCH_ASSOC" . "<br/>";
while ( $row = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
	// echo htmlentities ( $row ['first_name'] ) . " " . htmlentities ( $row ['last_name'] ) . "<br>";
	echo "<pre>" . var_dump ( $row ) . "</pre>";
	break;
}
echo "<br/>";

echo "FETCH_NUM" . "<br/>";
while ( $row = $stmt->fetch ( PDO::FETCH_NUM ) ) {
	// echo htmlentities ( $row ['first_name'] ) . " " . htmlentities ( $row ['last_name'] ) . "<br>";
	echo "<pre>" . var_dump ( $row ) . "</pre>";
	break;
}
echo "<br/>";

echo "FETCH_BOTH" . "<br/>";
while ( $row = $stmt->fetch ( PDO::FETCH_BOTH ) ) {
	// echo htmlentities ( $row ['first_name'] ) . " " . htmlentities ( $row ['last_name'] ) . "<br>";
	echo "<pre>" . var_dump ( $row ) . "</pre>";
	break;
}
echo "<br/>";

// ------
echo "FETCH ALL" . "<br/>";
$count = 0;
$results = $stmt->fetchAll ();
foreach ( $results as $row ) {
	$firtname = htmlentities ( $row ['first_name'] );
	$lastname = htmlentities ( $row ['last_name'] );
	
	echo $firtname . " " . $lastname . "<br />";
	$count = $count + 1;
	if ($count > 2) {
		break;
	}
}
