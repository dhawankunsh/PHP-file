<?php
$number = 153;
$sum = 0;

$temp = $number;

$digits = strlen((string)$number);

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $digits);  
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "This Program is written by Radhesh Mutreja 0221BCA031";
?>