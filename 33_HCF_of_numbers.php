<?php
function hcf($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Example usage:
$num1 = 56;
$num2 = 98;
echo "The HCF of $num1 and $num2 is " . hcf($num1, $num2);

echo "Code written and executed by Kunsh Dhawan (0221BCA004)";
?>
 