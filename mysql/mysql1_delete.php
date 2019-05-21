<?php
require('db.php');

$sql = "DELETE FROM students WHERE id = :id";

$query = $db->prepare($sql);
$query->bindValue(':id', $_GET['id']);
$query->execute();

header('location: form1.php');
?>