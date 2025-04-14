<?php

    $file = fopen("Hi.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
    
   echo"This Program is written by Radhesh 0221BCA031";
   
?>