<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class RemoteControl {
    public $height;
    private $width;
    private $numButtons;
    private $model;

    public function __construct($m) {
        $this->model = $m;
    }

    public function turnOn() {
        echo "The TV has been turned on";
    }
    
    public function turnOff() {
        echo "The TV has been turned off";
    }

    public function setWidth($w) {
        $this->width = $w;
    }

    public function getWidth() {
        return $this->width;
    }
}

$rc1 = new RemoteControl('rc001');
// $rc1->turnOn();
// echo '<br/>';
// $rc1->turnOff();

$rc1->height = 11;
// echo '<br/>';
// echo $rc1->height;
$rc1->setWidth(4);
// echo '<br/>';
// echo $rc1->getWidth();

// echo '<br/>';
// print_r($rc1);

$rc2 = new RemoteControl('rc002');
$rc2->height = 20;
$rc2->setWidth(5);
// echo '<br/>';
// print_r($rc2);


// **********************************************************
// **********************************************************

class Classroom {
    private $name;
    private $capacity;
    private $sittingArrangement;

    public static $SITTING_CIRCULAR = 'circular'; // static properties
    public static $SITTING_ROWS = 'rows'; // static properties

    public function __construct($n) {
        $this->name = $n;
    }

    // public function __destruct() {
    //     echo '<br/>The classroom ' . $this->name . ' has been closed';
    // }

    public function setCapacity($c) {
        if(is_int($c)){
            $this->capacity = $c;
        }
    }

    public function setSittingArrangement($a) {
        $sa = ['rows', 'circular'];
        if(in_array($a, $sa)){
            $this->sittingArrangement = $a;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getSittingArrangement() {
        return $this->sittingArrangement;
    }
}


$c1 = new Classroom('a1');
$c1->setCapacity(12);
$c1->setSittingArrangement(Classroom::$SITTING_ROWS); // static properties in use

// echo '<br/>';
// print_r($c1);

$c2 = new Classroom('b1');
$c2->setCapacity(20);
$c2->setSittingArrangement(Classroom::$SITTING_CIRCULAR); // static properties in use

// echo '<br/>';
// print_r($c2);


abstract class MotornoVozilo {
    protected $zafatninaNaMotor; // protected allows child classes to access property
    protected $potroshuvachka; // protected allows child classes to access property

    public function setZafatnina($z) {
        $this->zafatninaNaMotor = $z;
    }

    public function setPotroshuvachka($p) {
        $this->potroshuvachka = $p;
    }

    public function getZafatnina() {
        return $this->zafatninaNaMotor;
    }

    public function getPotroshuvachka() {
        return $this->potroshuvachka;
    }
}

class Avtomobil extends MotornoVozilo {
    private $klasa;

    public function setKlasa($k) {
        $this->klasa = $k;
    }

    public function getKlasa() {
        return $this->klasa;
    }

    public function opis() {
        echo 'Klasa: ' . $this->klasa . ' Zafantnina: ' . $this->zafatninaNaMotor . ' Potroshuvachka: ' . $this->potroshuvachka;
    }
}

$av1 = new Avtomobil;
// echo '<br/>';
$av1->setPotroshuvachka(6.5);
$av1->setZafatnina(1900);
$av1->setKlasa('sedan');
// $av1->opis();
// print_r($av1);

// $mv = new MotornoVozilo;



class File {
    private $fh;
    private $filename;

    public function __construct($fn){
        $this->filename = $fn;
        $this->fh = fopen($this->filename, 'a+');
    }

    public function write($text) {
        fwrite($this->fh, $text);
    }

    public function read() {
        rewind($this->fh);
        return fread($this->fh, $this->size());
    }

    public function size() {
        return filesize($this->filename);
    }
}



$f = new File('test.txt');
$f->write('test test test');
echo $f->read();
echo $f->size();

$f2 = new File('test2.txt');
$f2->write('blah blah blah ');
echo $f->read();
echo $f->size();


// Да се креираат 10 различни класи кои:
// ќе користат наследување
// деструктори
// абстрактни класи
// статички особини (properties)





?>