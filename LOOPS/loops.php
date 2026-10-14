<?php
    $i = 1;

    // WHILE LOOP
    while ($i < 6) {
        echo $i;
        $i++;
    }
?>

<?php
    $i = 1;

    # DO WHILE LOOP
    do {
        echo $i;
        $i++;
    } while ($i < 6);
?>

<?php
    // FOR LOOP
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?>

<?php
    $colors = array("red", "green", "blue", "yellow");

    // ARRAY - FOREACH LOOP
    foreach ($colors as $x) {
        echo "$x <br>";
    }

?>

<?php
    $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    // DICTIONARY - FOREACH LOOP
    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }
?>
