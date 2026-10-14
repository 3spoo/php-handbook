<?php
    // CREARE UN ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
?>

<?php
    // ARRAY INDICIZZATI
    $cars = array("Volvo", "BMW", "Toyota"); 
    var_dump($cars);

    // STAMPARE UN ELEMENTO
    echo $cars[0];

    // CAMBIARE IL VALORE DI UN ELEMENTO
    $cars[1] = "Ford";
    var_dump($cars);
?>

<?php
    // ARRAY ASSOCIATIVI (DICTIONARY)
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    var_dump($car);
?>

<?php
    // ELEIMINARE UN ELEMENTO DI UN ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);

    // ELEIMINARE UN ELEMENTO DI UN ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    unset($cars[1]);
?>

<?php
    // ELEIMINARE IL PRIMO ELEMENTO DI UN ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    array_shift($cars);

    // ELEIMINARE L'ULTIMO ELEMENTO DI UN ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    array_pop($cars);
?>