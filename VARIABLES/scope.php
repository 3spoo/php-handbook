<?php
    function myTest() {
        $x = 5; // LOCAL SCOPE
        echo "<p>Variable x inside function is: $x</p>";
        }
    myTest();
    
    // GENERA UN ERRORE
    echo "<p>Variable x outside function is: $x</p>";
?>

<?php
    $x = 5; // GLOBAL SCOPE

    function myTest() {
        // GENERA UN ERRORE ALL'INTERNO DELLA FUNZIONE
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";
?>