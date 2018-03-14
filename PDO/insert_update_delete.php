<?php
include 'connect.php';
echo "<h1>Instert new record</h1>";
$stmt = $db->prepare("INSERT INTO `sakila`.`actor` (`first_name`,`last_name`,`last_update`) VALUES (:firstname, :lastname, '2018-02-11 04:34:33'); ");
$stmt->bindValue(':firstname', 'test');
$stmt->bindValue(':lastname', 'test');
$stmt->execute();
echo "<p>Insert record successfully !</p><br />";

$stmt = $db->prepare("SELECT * FROM `sakila`.`actor` WHERE first_name = 'test'");
$stmt->execute();
$rows = $stmt->fetchAll();

echo "<h1>Update test records</h1>";
foreach ($rows as $row) {
    $actor_id = $row['actor_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    echo "<p>" . $actor_id . "/" . $first_name . "/" . $last_name . "</p>";

    $update = $db->prepare("UPDATE `sakila`.`actor` SET `first_name` = 'updated', `last_name` = 'updated' WHERE `actor_id` = :actor_id;");
    $update->bindValue(':actor_id', $actor_id);
    $update->execute();

    $afterUpdate = $db->prepare("SELECT * FROM `sakila`.`actor` WHERE `actor_id` = :actor_id;");
    $afterUpdate->bindValue(':actor_id', $actor_id);
    $afterUpdate->execute();
    $rowAfter = $afterUpdate->fetch(PDO::FETCH_ASSOC);

    $actor_id = $rowAfter['actor_id'];
    $first_name = $rowAfter['first_name'];
    $last_name = $rowAfter['last_name'];
    echo "<p>" . $actor_id . "/" . $first_name . "/" . $last_name . "</p>";
}
echo "<p>Update test records successfully !</p><br />";

echo "<h1>Delete test records</h1>";
$stmt = $db->prepare("DELETE FROM `sakila`.`actor` WHERE first_name Like 'updated%' OR first_name Like 'test%';");
$stmt->execute();
echo "<p>Delete test records successfully !</p><br />";
