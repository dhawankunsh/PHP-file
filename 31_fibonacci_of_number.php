<?php
function fibonacci($n) {
    $first = 0;
    $second = 1;

    echo "Fibonacci series up to $n terms: ";
    
    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$n = 10;  
fibonacci($n);

echo "Code Written and Executed by Kunsh Dhawan(0221BCA004)";
?>
