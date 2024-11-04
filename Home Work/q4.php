<?php
function isEligibleForMarriage($age, $gender) {
    if (strtolower($gender) == 'female' && $age >= 18) {
        return true;
    } elseif (strtolower($gender) == 'male' && $age >= 21) {
        return true;
    }
    return false;
}

// Example
$age = 19;
$gender = 'female';
if (isEligibleForMarriage($age, $gender)) {
    echo "The person is eligible for marriage.";
} else {
    echo "The person is not eligible for marriage.";
}
?>