 <?php


//  echo "hello";
//  echo "<h2> hello </h2>";


/*
## variables
 A reusable container that holds the data

## Data types
- string
- integer
- float
- boolean

*/
// $name="John Doe"; //string
// $age=30; //integer
// $height=5.7; //float
// $isMale=true; //boolean


// echo "My name is:".$name;
// echo "<br>";
// echo "</br>My age is:".$age;
// echo "<br>";
// echo "</br>My height is:".$height;
// echo "<br>";
// echo "</br>Am I male:".$isMale;
// echo "<br>";
// echo "<br>";
// var_dump($name);
// echo "<br>";
// echo "<br>";
// var_dump($age);
// echo "<br>";
// echo "<br>";
// var_dump($height);
// echo "<br>";
// echo "<br>";
// var_dump($isMale);


/*
## Arithmetic operators
- Addition +
- Subtraction -
- Multiplication *
- Division /
- Modulus %
- Exponentiation **

## increment and decrement operators
- Increment ++
- Decrement --
## operator precedence
- Parentheses ()
- Exponentiation **
- Multiplication and Division *
- Addition and Subtraction +

*/
// $a=10;
// $b=3;
// echo $a+$b;

/* 
 Predifined functions
 ## String functions
 ## number functions
 ## math functions
*/

// string functions
// $name="John doe";
//  echo strlen($name); //length of string
//  echo "<br> <br>";
//  echo str_replace("John","Jane",$name); //replace string
//  echo "<br> <br>";
//  echo strpos($name,"Doe"); //find position of string
//     echo "<br> <br>";
//     echo str_ireplace("doe","jane",$name); //replace string case insensitive
//     echo "<br> <br>";
//     echo ucwords($name); //capitalize first letter of each word
//     echo "<br> <br>";
//     echo strtolower($name); //convert to lowercase
//     echo "<br> <br>";
//     echo strtoupper($name); //convert to uppercase
//     echo "<br> <br>";
//     echo ucfirst($name); //capitalize first letter of string
//     echo "<br> <br>";

// number functions
$num=10.5;
 echo round($num); //round number
 echo "<br> <br>";
    echo ceil($num); //round up
    echo "<br> <br>";
    echo floor($num); //round down
    echo "<br> <br>";
    var_dump(is_int($num)); //check if number is integer
    echo "<br> <br>";
    var_dump(is_float($num)); //check if number is float
    echo "<br> <br>";
    var_dump(is_numeric($num)); //check if number is numeric
    echo "<br> <br>";
    
?>