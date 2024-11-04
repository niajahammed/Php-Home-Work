<?php
function checkPositiveOrNegative($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

// Example
$number = -5;
echo checkPositiveOrNegative($number);
?>