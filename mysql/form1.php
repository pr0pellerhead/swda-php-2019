<?php
require('db.php');

$field_id = '';
$field_full_name = '';
$field_city = '';
$field_button = 'Add';
$field_URL = '';

if(isset($_GET['id'])){
    // echo "EDIT MODE!";
    $query = $db->prepare("SELECT * FROM students WHERE id = :id");
    $query->bindValue(':id', $_GET['id']);
    $query->execute();
    $student = $query->fetchAll(PDO::FETCH_ASSOC);

    $field_id = $student[0]['id'];
    $field_full_name = $student[0]['full_name'];
    $field_city = $student[0]['city'];
    $field_button = 'Edit';
    $field_URL = '_update';
}

$res = $db->query("SELECT students.id, students.full_name, cities.city FROM students JOIN cities ON students.city = cities.id ORDER BY students.id");
$student_data = $res->fetchAll(PDO::FETCH_ASSOC);

$res = $db->query("SELECT * FROM cities");
$cities_data = $res->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="mysql1<?=$field_URL?>.php">
        <input name="full_name" value="<?=$field_full_name?>"/>
        <input type="hidden" name="id" value="<?=$field_id?>">
        <select name="city">
            <?php foreach($cities_data as $c){ 
                $selected = $c['id'] == $field_city ? 'selected' : '';
            ?>
                <option <?=$selected?> value="<?=$c['id']?>"><?=$c['city']?></option>
            <?php } ?>
        </select>
        <button type="submit"><?=$field_button?> Student</button>
    </form>
    <hr/>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Student name</th>
            <th>City</th>
            <th>[Delete]</th>
            <th>[Edit]</th>
        </tr>
        <?php foreach($student_data as $row){ ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['full_name']?></td>
            <td><?=$row['city']?></td>
            <td>
                <a href="mysql1_delete.php?id=<?=$row['id']?>">DELETE</a>
            </td>
            <td>
                <a href="form1.php?id=<?=$row['id']?>">EDIT</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>