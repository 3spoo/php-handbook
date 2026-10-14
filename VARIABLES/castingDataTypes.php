<?php 
    $a = 5;       // INT
    $b = 5.34;    // FLOAT
    $c = "hello"; // STRINGA
    $d = true;    // BOOL
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    // VERIFICA DEL CASTING
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
?>

<?php
    $a = 5;       // INT
    $b = 5.34;    // FLOAT
    $c = "25 kilometers"; // STRING
    $d = "kilometers 25"; // STRING
    $e = "hello"; // STRING
    $f = true;    // BOOL
    $g = NULL;    // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;
?>

<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;
?>

<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;
?>

<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;
?>

<?php
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
        }
        public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    
    $myCar = new Car("red", "Volvo");
    
    $myCar = (array) $myCar;
    var_dump($myCar);
?>

<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;
?>

<?php
    $a = array("Volvo", "BMW", "Toyota"); // indexed array
    $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

    $a = (object) $a;
    $b = (object) $b;
?>

<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (unset) $a;
    $b = (unset) $b;
    $c = (unset) $c;
    $d = (unset) $d;
    $e = (unset) $e;
?>