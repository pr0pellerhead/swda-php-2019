<?php

print_r($_FILES['document']);
$MAX_FILESIZE = 10240;
$FILETYPES_ALLOWED = ['image/jpeg', 'image/gif', 'image/png', 'text/plain'];

if($_FILES['document']['size'] > $MAX_FILESIZE){
    echo "Фајлот е преголем...";
    exit(); // 
}

if(!in_array($_FILES['document']['type'], $FILETYPES_ALLOWED)){
    echo "Типот на фајл не е дозволен...";
    exit(); // 
}

$from = $_FILES['document']['tmp_name']; // привремена локација
$to = 'uploads/'.$_FILES['document']['name']; // сакана локација

move_uploaded_file($from, $to);

/*

Да се направи формулар кој ќе се користи за прикачување на текстуален документ
(.txt). Да се провери дали документот е од типот кој што го очекуваме
ако е се во ред, зачувајте го и отворете го преку php. Направете анализа на
текстот како во претходната домашна задача.

Направете прикачување на документи каде во input type="file" го 
има атрибутот multiple

*/


?>