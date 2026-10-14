<?php
    // IF STATEMENT
    if (5 > 3) {
        echo "Have a good day!";
    }
?>

<?php
    $t = date("H");

    // IF - ELSE
    if ($t < "20") {
        echo "Have a good day!";
    } 
    else {
        echo "Have a good night!";
    }
?>

<?php
    $t = date("H");

    // ELSEIF
    if ($t < "10") {
        echo "Have a good morning!";
    } 
    elseif ($t < "20") {
        echo "Have a good day!";
    } 
    else {
        echo "Have a good night!";
    }
?>

<?php
    $a = 13;
    // SHORT HAND IF
    $b = $a < 10 ? "Hello" : "Good Bye";
    echo $b;
?>

<?php
    $favcolor = "red";

    // SWITCH CASE
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
}
?>