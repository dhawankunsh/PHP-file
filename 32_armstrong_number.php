<?php
function isArmstrongNumber($num){
    
    $numDigits = 

    $sum = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return $sum == $num;
}

$number = 153; 
if (isArmstrongNumber($number)) {
    echo $number . " is an Armstrong number.";
} else {
    echo $number . " is not an Armstrong number.";
}

echo "<br>";
echo "Code written and executed by Kunsh Dhawan (0221BCA004)";
?>
