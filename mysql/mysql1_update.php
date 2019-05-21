<?php
require('db.php');

$sql = "UPDATE students SET full_name = :full_name, city = :city WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(':full_name', $_POST['full_name']);
$query->bindValue(':city', $_POST['city']);
$query->bindValue(':id', $_POST['id']);
$query->execute();

header('location: form1.php');
?>