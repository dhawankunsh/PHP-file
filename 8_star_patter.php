<?php
// This program prints a pattern of asterisks (*)

// Loop through each row of the pattern
for ($i = 1; $i <= 15; $i++) {
  // Print the asterisks for the current row
  for ($j = 1; $j <= 15 - $i + 1; $j++) {
    echo "*";
  }
  // Print a new line after each row
  echo "<br>";
}

echo "Code written and executed by Kunsh Dhawan (0221BCA004)";
?>
