<?php
// abstract class PDORepository {
// const USERNAME = "root";
// const PASSWORD = "1234";
// const HOST = "localhost:3306";
// const DB = "sakila";
// protected function getConnection() {
// $username = self::USERNAME;
// $password = self::PASSWORD;
// $host = self::HOST;
// $db = self::DB;
// $connection = new PDO ( "mysql:dbname=$db;host=$host;charset=utf8", $username, $password );
// return $connection;
// }
// protected function queryList($sql, $args) {
// $connection = $this->getConnection ();
// $stmt = $connection->prepare ( $sql );
// $stmt->execute ( $args );
// return $stmt;
// }
// }

try {
	$db = new PDO ( 'mysql:host=localhost:3306;dbname=sakila;charset=utf8', 'root', '1234' );
} catch ( Exception $e ) {
	echo $e->getMessage ();
}