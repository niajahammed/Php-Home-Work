<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "Invalid operation";
    }
}

// Example usage
$num1 = 10;
$num2 = 5;
echo "Addition: " . calculator($num1, $num2, 'add') . "\n";
echo "Subtraction: " . calculator($num1, $num2, 'subtract') . "\n";
echo "Multiplication: " . calculator($num1, $num2, 'multiply') . "\n";
echo "Division: " . calculator($num1, $num2, 'divide') . "\n";
?>