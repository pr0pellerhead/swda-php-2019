<?php 

$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Aleksandar', 'prezime' => 'Aleksandrovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
    ['ime' => 'Ana', 'prezime' => 'Aneska'],
    ['ime' => 'Janko', 'prezime' => 'Jankovski']
];

// print_r($studenti);
$MAX_IME = 0;
$MAX_PREZIME = 0;
$MIN_IME = 100;
$MIN_PREZIME = 100;

$najdolgo_ime = '';
$najdolgo_prezime = '';
$najkratko_ime = '';
$najkratko_prezime = '';

for($i = 0; $i < count($studenti); $i++){
    if(strlen($studenti[$i]['ime']) > $MAX_IME) {
        $MAX_IME = strlen($studenti[$i]['ime']);
        $najdolgo_ime = $studenti[$i]['ime'];
    }

    if(strlen($studenti[$i]['prezime']) > $MAX_PREZIME) {
        $MAX_PREZIME = strlen($studenti[$i]['prezime']);
        $najdolgo_prezime = $studenti[$i]['prezime'];
    }

    if(strlen($studenti[$i]['ime']) < $MIN_IME) {
        $MIN_IME = strlen($studenti[$i]['ime']);
        $najkratko_ime = $studenti[$i]['ime'];
    }

    if(strlen($studenti[$i]['prezime']) < $MIN_PREZIME) {
        $MIN_PREZIME = strlen($studenti[$i]['prezime']);
        $najkratko_prezime = $studenti[$i]['prezime'];
    }
}

echo "<p>Најдолго име е името: $najdolgo_ime</p>";
echo "<p>Најкратко име е името: $najkratko_ime</p>";
echo "<p>Најдолго презиме е презимето: $najdolgo_prezime</p>";
echo "<p>Најкратко презиме е презимето: $najkratko_prezime</p>";

?>

<hr/>

<?php

$a = 0;

while($a < 10){
    echo "WHILE...<br/>";
    $a++;
}

echo "<hr/>";
// ********************************************

$b = 20;

do{
    echo $b."<br/>";
    $b++;
}while($b < 10);

echo "<hr/>";
// *********************************************************


foreach($studenti as $student) {
    echo $student['ime']."<br/>";
}

echo "<hr/>";
// *********************************************************

$niza = ['a', 'b', 'c'];

foreach($niza as $bukva){
    echo $bukva."<br/>";
}

echo "<hr/>";
// *********************************************************

foreach($niza as $index => $bukva){
    echo "$index = $bukva<br/>";
}

echo "<hr/>";
// *********************************************************

$stu = ['ime' => 'Pero', 'prezime' => 'Perovski'];

foreach($stu as $key => $value){
    echo "$key = $value<br/>";
}

echo "<hr/>";
// *********************************************************

// $data = file_get_contents('text.txt');
// echo nl2br($data);

$size = filesize('text.txt');
echo "$size<br/>";

$fh = fopen('text.txt', 'r'); // отворање на фајлот со име text.txt во мод за читање (r)ead
$data = fread($fh, $size);
echo $data;
fclose($fh);

echo "<hr/>";
// *********************************************************

$fh = fopen('nov_fajl.txt', 'a+');
fwrite($fh, 'TEST TEST TEST TEST');
fclose($fh);


/*

Домашна

Да се прочита текст од фајл. Да се анализира текстот за следниве точки:

- број на карактери
- број на зборови
- број на реченици
- зборови <4
- зборови >=4 <=7
- зборови >7

fopen, fread, fclose, filesize, explode
*/

$fh = fopen('text.txt', 'r');
$text = fread($fh, filesize('text.txt'));
fclose($fh);

$broj_na_karakteri = strlen($text);
$broj_na_zborovi = count(explode(' ', $text));
$broj_na_recenici = count(explode('. ', $text));

$mali = 0;
$sredni = 0;
$golemi = 0;

$zborovi = explode(' ', $text);

foreach($zborovi as $zbor){
    $d = strlen($zbor);
    if($d < 4){
        $mali++;
    } else if($d >= 4 && $d <= 7) {
        $sredni++;
    } else {
        $golemi++;
    }
}

echo "<p>Број на карактери: $broj_na_karakteri</p>";
echo "<p>Број на зборови: $broj_na_zborovi</p>";
echo "<p>Број на реченици: $broj_na_recenici</p>";
echo "<p>Зборови < 4: $mali</p>";
echo "<p>Зборови >= 4 && <= 7: $sredni</p>";
echo "<p>Зборови > 7: $golemi</p>";
?>