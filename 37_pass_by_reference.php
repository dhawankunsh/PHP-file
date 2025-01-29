<?php
    function selfMultiply(&$number)
    {
        $number += $number;
        return $number;
    }

    $mynum = 5;
    echo "Original value:{$mynum} <br>";

    selfMultiply($mynum);
    echo "Value after function call: {$mynum} <br>";

    echo ">Code written and executed by Kunsh Dhawan (0221BCA004)";
?>