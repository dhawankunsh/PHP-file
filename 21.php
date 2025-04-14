<?php

    
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "\t";
    }
    
   
    echo "\nAnother Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "\t";
    }
    echo "This Program is written by Radhesh Mutreja 0221BCA031";

?>