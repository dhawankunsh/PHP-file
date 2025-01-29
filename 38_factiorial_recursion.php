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

    echo "Code written and executed by Kunsh Dhawan (0221BCA004)";

?>