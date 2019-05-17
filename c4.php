<?php

echo $_POST['ime'].'<br/>';
echo $_POST['prezime'].'<br/>';

if(isset($_POST['vistina'])){
    echo $_POST['vistina'].'<br/>';
}

if(isset($_POST['hrana'])){
    print_r($_POST['hrana']);
}

if(isset($_POST['sex'])){
    echo $_POST['sex'].'<br/>';
}

?>