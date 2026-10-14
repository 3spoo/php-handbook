<?php
    /*
    \'	Single Quote	
    \"	Double Quote	
    \$	PHP variables	
    \n	New Line	
    \r	Carriage Return	
    \t	Tab	
    \f	Form Feed	
    \ooo	Octal value	
    \xhh	Hex value
    */
    
    // ERRORE
    $x = "We are the so-called "Vikings" from the north.";
    // FIX
    $x = "We are the so-called \"Vikings\" from the north.";
?>