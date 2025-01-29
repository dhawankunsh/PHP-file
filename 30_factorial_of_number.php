<?php
function factorial($number) {
    $fact = 1;
    for ($i = 1; $i <= $number; $i++) {
        $fact *= $i;
    }
    return $fact;
}

$number = 5;
echo "The factorial of $number is: " . factorial($number);

echo "Code Written and Executed by Kunsh Dhawan(0221BCA004)";
?>
