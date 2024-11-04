<?php
function isEligibleToVote($age) {
    return $age >= 18;
}

// Example
$age = 20;
if (isEligibleToVote($age)) {
    echo "The person is eligible to vote.";
} else {
    echo "The person is not eligible to vote.";
}
?>