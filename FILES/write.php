<?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Scritto da Fabio";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>