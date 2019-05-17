<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Student {
    // properties (variables)
    private $firstName; // член на класата
    private $lastName; // член на класата

    public function __construct($fn, $ln) {
        $this->firstName = $fn;
        $this->lastName = $ln;
    }

    // methods (functions)
    public function takeExam() { // член на класата
        // $this се однесува на класата во која се наоѓате
        echo $this->firstName." is taking the exam<br/>";
    }

    public function exam() {
        $this->takeExam();
    }

    // setFirstName е "setter"
    // setter-и се користат за да се додели вредност на
    // приватни особини (properties)
    // во овој случај на firstName
    public function setFirstName($fn) {
        if(is_string($fn)){
            $this->firstName = $fn;
        } else {
            exit('firstName must be string');
        }
    }

    public function getFirstName() {
        return $this->firstName;
    }
}

$s = new Student('Pero', 'Perovski'); // ****
// со стрелка (->) се пристапува до членовите на класата
// $s->firstName = 'Pero'; 
// $s->lastName = 'Perovski';
$s->setFirstName('Stanko');
$s->takeExam();
// echo $s->firstName;
echo $s->getFirstName();
echo '<br/>';

// print_r($s);

$t = new Student('Janko', 'Jankovski'); // ****
// $t->firstName = 'Janko';
// $t->lastName = 'Jankovski';
// $t->setFirstName('Janko');
$t->takeExam();

// print_r($t);

/*
Да се напишат 3 класи (Цвеќе, Монитор, Автомобил).
Секоја од класите треба да има минимум 3 особини (properties)
За секое property треба да постои setter и getter метод
Секоја класа треба да поседува конструктор кој ќе се користи да сетира едно од 3те property-ја
Од секоја класа треба да се инстанцираат барем 2 објекти
*/

?>