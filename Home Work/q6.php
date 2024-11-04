<?php
function checkOddOrEven($number) {
    return ($number % 2 == 0) ? "Even" : "Odd";
}

// Example
$number = 4;
echo checkOddOrEven($number);



function checkDataType($data) {
    if (is_int($data)) {
        return "Integer";
    } elseif (is_string($data)) {
        return "String";
    } else {
        return "Other";
    }
}

// Example
$data = "Hello";
echo checkDataType($data);
?>