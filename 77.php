<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$file = fopen("Welcome.txt", "r");
if ($file) {
   echo"This Program is written by Radhesh 0221BCA031";
    fclose($file);
} else {
    echo "<br>Failed to open file.";
}
?>