<?php

    function factiorial($num)
    {
        if($num == 0 || $num == 1)
        {
            return 1;
        }
        else 
        {
            return $num *factiorial($num -1); 
        }

    }

    $f = factiorial(5);
    echo "$f";
    echo"<br>";
    echo "This Program is written by Radhesh Mutreja 0221BCA031";

?>