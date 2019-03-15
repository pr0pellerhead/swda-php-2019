<?php 
// echo "Zdravo svetu!";
// $ime = "Pero";
// $Godini = 23;
// $_polnoleten = true;
// $pi = 3.14;

// echo $ime;
// echo "<br/>";
// echo $Godini;
// echo $_polnoleten;
// echo $pi;
// echo "<h1>".$ime."</h1>";
?>

<!-- <h2>PEROOOOOOOOO!</h2> -->

<?php

// $br = 7;

// if($br % 2 == 0){
//     echo "par";
// } else {
//     echo "nepar";
// }

// switch($ime) {
//     case 'Pero':
//         echo "Zdravo Pero";
//         break;
//     case 'Janko':
//         echo 'Zdravo Janko';
//         break;
//     case "Stanko":
//         echo 'Stanko Janko';
//         break;
//     default:
//         echo 'Nema zdravo';
// }

// function sobiranje($a, $b){
//     echo $a + $b;
// }

// sobiranje(5, 6);

// function odzemanje($a, $b){
//     return $a - $b;
// }

// $res = odzemanje(6, 19);
// echo $res;

// echo odzemanje(3, 1);

// ****************************************

// function ubavMesec($mesec) {
//     switch(strlen($mesec) % 2){
//         case 0:
//             echo "Ubav mesec";
//             break;
//         case 1:
//             echo "Neubav mesec";
//             break;
//     }
// }

// echo "<br/>";
// ubavMesec("Januari");
// echo "<br/>";
// ubavMesec("Dekemvri");
// ****************************************************
?>


<?php

echo "lhcbds c87q3r9p87[yq9 d4piuc axcpo ]d0i234-650&#$@*^#%(*&!@^)(#*_!@"; // string
echo 'lhcbds c87q3r9p87[yq9 d4piuc axcpo ]d0i234-650&#$@*^#%(*&!@^)(#*_!@'; // string
echo 123; // integer - цел број
echo 3.14; // float - децимални броеви
echo true; // boolean (true/false)

$ovoshje = "praska";
$godini = 53;
$den = true;
$visina = 1.73;

echo "Pero e visok $visina metri";
echo 'Pero e visok '.$visina.' metri';

// + - собирање
// - - одземање
// / - делење
// * - множење
// % - модул (остаток од целобројно делење)
// за групирање на математички операции се користат загради ()

$a = 10 * 2 - 3;
$b = 10 * (2 - 3);
echo '<br/>'.$a;
echo '<br/>'.$b;

echo '<br/>'.(5 % 2);
echo '<br/>'.(9 % 5);
echo '<br/>'.(11 % 3);

// a == b - проста споредба на левата и десната стана (дали а е еднакво со b)
echo 4 == 4;
// a === b - споредба по вредност и тип (дали а има иста вредност и тип во b)
echo '2' === 2;
// a < b - дали вредноста на a е помала од вредноста на b
echo 2 < 1;

// a > b - дали вредноста на а е поголема од вредноста на b
echo 3 > 2;

// a >= b - дали вредноста на а е поголема или еднаква со вредноста на b
echo 4 >= 4;

// a <= b - дали вредноста на а е помала или еднаква со вредноста на b
echo 6 <= 4;


$q = 5 > 2;

if($q) {
    echo "5 e поголемо од 2";
} else {
    echo "5 не е поголемо од 2";
}

$q = 10 <= 2;

if(!$q){ // ! јаменува вредноста true -> false / false -> true
    echo "Вистина...";
}

// и и или оператори
// && = и
// || = или

// true && true = true
// true && false = false
// false && false = false
// false && true = false

// true || true = true
// true || false = true
// false || false = false
// false || true = true

$q = !(true || false) && (false || !true && (true || true));

$q = 10 < 5 || ('2' == 2 && (!(4 >=8 || 55*2 < 150) && 10 === 10));

$q = false || (true && (!(false || true) && true));

$q = false || (true && (!(true) && true));

$q = false || (true && (false && true));

$q = false || (true && false);

$q = false || false;

$q = false;

$ime = 'pero';

if($ime == 'pero'){
    echo "Перо";
} else if ($ime == 'persa') {
    echo 'Перса';
} else {
    echo 'Непознато име';
}

switch($ime){
    case 'pero':
        echo 'Pero';
        break;
    case 'persa':
        echo 'Persa';
        break;
    default:
        echo 'Nepoznato ime';
}

function broiDoSto() { // "broiDoSto()" -> function signature
    // function body
}

function broiDo($a) {
    echo "Избројав до $a";
}

broiDo('lubenica');
// функции кои не враќаат податоци се викаат void функции


function sobiranje($d, $f) {
    return $d + $f; // не ја печати вредноста, туку ја враќа
}

$g = sobiranje(3, 10); // $g ја добива вредноста која функцијата sobiranje ја враќа

function mat($a, $b){
    $r = $a + $b;
    if($r % 2 == 0){
        return $r;
    } else {
        return $r / 2;
    }
}

echo mat(4, 10);
echo mat(3, 8);


$niza = ['a', 'b', 'c'];
// echo $niza;
// print_r($niza);
// var_dump($niza);
echo $niza[0];
echo $niza[1];
echo $niza[2];
// echo $niza[3];
array_push($niza, 'd');
print_r($niza);
echo count($niza);

echo "<ul>";
for($i = 0; $i < 10; $i++) {
    echo "<li> $i </li>";
}
echo "</ul>";

echo "<ol>";
for($i = 0; $i < count($niza); $i++){
    echo "<li> ".$niza[$i]." </li>";
}
echo "</ol>";

// асоцијативни низи

$student = ["Pero", "Perovski"]; // нумерирана низа
$student = ["ime" => "Pero", "prezime" => "Perovski"]; // асоцијативна низа

echo $student["ime"];
echo $student["prezime"];

$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Aleksandar', 'prezime' => 'Aleksandrovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
    ['ime' => 'Ana', 'prezime' => 'Aneska'],
    ['ime' => 'Janko', 'prezime' => 'Jankovski']
];

echo $studenti[0]['prezime'];

for($i = 0; $i < count($studenti); $i++){
    echo '<hr/>'.$studenti[$i]['prezime'];
}


?>






