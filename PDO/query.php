<?php
include 'connect.php';

foreach ( $db->query ( "select * from actor" ) as $row ) {
	echo htmlentities ( $row ['first_name'] ) . " " . htmlentities ( $row ['last_name'] ) . "<br>";
}