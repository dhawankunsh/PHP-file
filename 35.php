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

    echo "This Program is written by Radhesh Mutreja 0221BCA031";
?>