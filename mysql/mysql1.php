<?php
require('db.php');

$sql = "INSERT INTO students (full_name, city) VALUES (:full_name, :city)";

$query = $db->prepare($sql);
$query->bindValue(':full_name', $_POST['full_name']);
$query->bindValue(':city', $_POST['city']);

$query->execute();

header('location: form1.php'); // redirect to form1.php
?>