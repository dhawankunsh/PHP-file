<?php
$num1 = 56;
$num2 = 98;

$hcf = 1;

$min = ($num1 < $num2) ? $num1 : $num2;

for ($i = 1; $i <= $min; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i; // Update HCF if i divides both numbers
    }
}

echo "The HCF of $num1 and $num2 is: $hcf";
echo "This Program is written by Radhesh Mutreja 0221BCA031";
?>