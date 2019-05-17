<?php

$host = "127.0.0.1";
$dbname = "school";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname";

$db = new PDO($dsn, $username, $password); // creating the connection

$res = $db->query("SELECT * FROM students"); // send sql query to database
$data = $res->fetchAll(PDO::FETCH_ASSOC); // get the data from db

?>
<table border="1" width="50%">
    <?php foreach($data as $row){ ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['full_name']?></td>
        <td><?=$row['city']?></td>
    </tr>
    <?php } ?>
</table>

<?php

$query = $db->prepare("INSERT INTO students (full_name, city) VALUES (:full_name, :city)");
$query->bindValue(":full_name", "Davos Seaworth");
$query->bindValue(":city", 1);
$res = $query->execute();
print_r($res);

?>