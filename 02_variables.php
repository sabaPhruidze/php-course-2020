<?php

// What is a variable

/*
ცვლადი არის „ყუთი“, რომელშიც ინახავ რაღაც ინფორმაციას, რათა კოდში მოგვიანებით გამოიყენო.
ყოველთვის იწყება $ (დოლარის) ნიშნით
სახელში დიდი და პატარა ასოები სხვადასხვა რამაა (მაგალითად, 

$saxeli და $Saxeli სხვადასხვა ყუთია).

*/

// Variable types

/*
String ''
Integer 
Float/Double
boolean
Null
Array 
Object
Resource
*/

// Declare variables

$name='saba'; // string
$age=28; // integer (მთელი რიცხვი)
$isMale =true; //bool
$height = 1.85;
$salary = null;


// Print the variables. Explain what is concatenation
echo $name.'<br/>'; 
echo $age. '<br/>';
echo $isMale. '<br/>'; // bool + '' = number ; true = 1 false = empty
echo $salary . '<br/>'; // არ ჩანს მარა ადგილს იკავებს მაინც
echo $height . '<br/>';
/*
PHP-ში წერტილი . ნიშნავს string-ების შეერთებას. აიღე $name-ის მნიშვნელობა + მიამატე <br/> + დაბეჭდე.
იგივეა რაც : console.log(name + "<br>");
*/

// Print types of the variables

echo '<hr/>'.gettype($name).'<br/>'; 
echo gettype($age). '<br/>';
echo gettype($isMale). '<br/>'; 
echo gettype($salary) . '<br/>'; 
echo gettype($height). '<br/>';

// Print the whole variable
echo '<hr/>';
var_dump($name,$age,$isMale,$salary,$height); // გვიჩვენებს ტიპს/length/values
// აქ null ჩაწერა

// Change the value of the variable
$name = false;
// Print type of the variable
echo '<hr/>'.gettype($name).'<br/>'; 
//შეცვლა შეგვიძლია მნიშვნელობის და ტიპის ჩვეულებრივ როგორც let ზე.
// Variable checking functions
echo '<br/>';
var_dump(is_string($name)); //false
echo '<br/>';
echo is_int($age); //1 = true ; emtpy =false
echo '<br/>';
var_dump(is_bool($isMale));
echo '<br/>';
var_dump(is_double($height));

// Check if variable is defined ვამოწმებთ ამ სახელი გვაქვს თუ არა ცვლადი
echo '<hr/>';
echo isset($address);//false
echo '<br/>'.isset($name); //true

// Constants  can not be changed
define('PI',3.14);
echo '<br/>'.PI.'<hr/>';

define('PIO',6.14);
echo '<br/>'.PIO.'<hr/>';

// Using PHP built-in constants
echo SORT_ASC.'<br/>'; // ჩაშენებული 4 
echo PHP_INT_MAX.'<br/>'; // ყველაზე დიდ integer რიცხვი





?>