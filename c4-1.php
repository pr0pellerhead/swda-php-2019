<?php

$proceed = isset($_POST['a']) && isset($_POST['b']) && isset($_POST['op']);

if($proceed){
    switch($_POST['op']){
        case '+':
            echo $_POST['a'] + $_POST['b'];
            break;
        case '-':
            echo $_POST['a'] - $_POST['b'];
            break;
        case '/':
            echo $_POST['a'] / $_POST['b'];
            break;
        case '*':
            echo $_POST['a'] * $_POST['b'];
            break;
    }
} else {
    echo "Некои од полињата фалат...";
}

?>