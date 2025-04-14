<?php

function findLargestNumber($arr) {
    
    $largest = $arr[0];
    
    foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }
    
    return $largest;
}

$arr = array(10, 23, 45, 12, 67, 34);
echo "The largest number in the array is: " . findLargestNumber($arr);

echo "This Program is written by Radhesh Mutreja 0221BCA031";

?>