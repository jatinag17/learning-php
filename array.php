<?php
/*
 * PHP Array
 * An array is a special variable, which can hold more than one value at a time.
 * An array is a data structure that stores one or more similar types of values in a single variable.
 * 
 * Types of Arrays in PHP
 * 1. Indexed Array
 * 2. Associative Array
 * 3. Multidimensional Array
 */
// Indexed Array
$colors = array("Red", "Green", "Blue", "Yellow", "Pink");

$colors[0] = "Red";
$colors[1] = "Green";
$colors[2] = "Blue";
$colors[3] = "Yellow";
$colors[4] = "Pink";
$colors[5] = "Black";
$colors[6] = "White";
$colors[7] = "Purple";
// echo $colors[0] . "\n"; // Output: Red

foreach ($colors as $color) {
    echo $color. "<br> <br>"; // Output: Red Green Blue Yellow Pink Black White Purple
}

?>