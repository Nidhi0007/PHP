<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
hello world

<?php
//echo display on web page
echo "printed using php";
//secret algorithm

/*
lorem   
this 
is multi
line comment
*/


//variables

$variable=34;
$variable1=64;
echo $variable;
echo $variable1;
Echo $variable + $variable1;

echo "<br>";
//operators in PHP
//Arithmetic operators
echo "the value of variable  + variable1 is";
echo "<br>";
echo $variable + $variable1;
echo "<br>";
//Assignment operators
$newVar = $variable;
echo  "the balue of newVr is=";
echo $newVar;
echo $newVar-=1;
echo "<br>";
echo $newVar +=1;
echo "<br>";
echo $newVar *=1;
echo "<br>";
echo $newVar /=1;
echo "<br>";


//comparison operator

echo "the valur of 1==4 is";
echo var_dump(1==4);

echo "<br>";
//increment decrement operator
echo $newVar++; //first print after excecuting increment
echo "<br>";
echo ++$newVar; // first incremeent thn prnt
// logical operators
//and(&&)
//or(||)
//xor
echo "<br>";
$myvar = (true and true) ;
echo "<br>";
echo

var_dump($myvar);
?>


<?php
//constant
echo "<br>";
define('pi',3.14);
echo pi;
//data types

// 1. string
// 2. Integer
// 3. float
// 4.boolean
// 5. aarray
// 6 objects
$string="this string";
echo var_dump($string);

echo "<br>";
$int =76;
echo var_dump($int);
$f =76.5;
echo var_dump($f);
?>
</body>
</html>