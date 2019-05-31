<?php
session_start();

require('db.php');

if(
    isset($_POST['email']) 
    && strlen(trim($_POST['email'])) > 0
    && isset($_POST['password']) 
    && strlen(trim($_POST['password'])) > 0
){
    // echo 'ready to log in!';
    $sql = "SELECT * FROM students WHERE email = :email AND password = :password";
    $query = $db->prepare($sql);
    $query->bindValue(':email', $_POST['email']);
    $query->bindValue(':password', $_POST['password']);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    if(count($res) > 0) {
        // echo 'successfull login';
        $_SESSION['full_name'] = $res[0]['full_name'];
        $_SESSION['email'] = $res[0]['email'];
        header('location: admin.php');
    } else {
        // echo 'bad username or password';
        header('location: login.php?err=2'); // $_GET['err'] = 2
    }

} else {
    // echo 'fields missing';
    header('location: login.php?err=1'); // $_GET['err'] = 1
}

?>