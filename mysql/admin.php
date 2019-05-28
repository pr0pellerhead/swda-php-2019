<?php
session_start();

if(isset($_SESSION['email'])) {
    echo 'welcome';
    echo '<br/>';
    echo $_SESSION['email'];
    echo '<br/>';
    echo $_SESSION['full_name'];
} else {
    // echo 'restricted area!';
    header('location: login.php?err=3');
}

?>