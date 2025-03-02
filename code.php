<?php
function calculate($a, $b, $op) {
    switch($op) {
        case '+': return $a + $b;
        case '-': return $a - $b;
        case '*': return $a * $b;
        case '/': return $b != 0 ? $a / $b : "Cannot divide by zero";
    }
}
echo calculate(10, 5, '*');
?>
