<?php
// If Conditional Statements in PHP
//if some condition is true, then execute the code inside the block

## Relational Operators
// > (greater than)
// < (less than)
// >= (greater than or equal to)
// <= (less than or equal to)
// == (equal to equal to)
/*!(not) */

$age=18;
if ($age > 18) {
    echo "You are an adult";
} elseif ($age == 18) {
    echo "You are 18 years old";
} else {
    echo "You are a minor";
}
?>