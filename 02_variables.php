<?php

// What is a variable

/*
ცვლადი არის „ყუთი“, რომელშიც ინახავ რაღაც ინფორმაციას, 
რათა კოდში მოგვიანებით გამოიყენო.ყოველთვის იწყება $ (დოლარის) ნიშნით.
სახელში დიდი და პატარა ასოები სხვადასხვა რამაა (მაგალითად, 
$saxeli და $Saxeli სხვადასხვა ყუთია).
*/

// Variable types

/*
String ''
Integer მთელი რიცხვი, ბრჭყალების გარეშე: 25
Float/Double ათწილადი რიცხვი: 5.75
boolean
Null
Array 
Object
Resource გარე რესურსზე მითითება (ფაილი, მონაცემთა ბაზის კავშირი და ა.შ.)
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
PHP-ში წერტილი . ნიშნავს string-ების შეერთებას. აიღე $name-ის მნიშვნელობა 
+ მიამატე <br/> + დაბეჭდე.იგივეა რაც : console.log(name + "<br>");
*/

// Print types of the variables

echo '<hr/>'.gettype($name).'<br/>'; 
echo gettype($age). '<br/>';
echo gettype($isMale). '<br/>'; 
echo gettype($salary) . '<br/>'; 
echo gettype($height) .'<br/>';

// Print the whole variable
echo '<hr/>';
var_dump($name,$age,$isMale,$salary,$height); // გვიჩვენებს ტიპს/length/values
// აქ null ჩაწერა
//კომპიუტერი ათწილად რიცხვებს (float) ზუსტად ვერ ინახავს ორობით სისტემაში.

/*
დავწერე:
$height = 1.85;
var_dump($height);

მივიღე:
float(1.850000000000000088817841970012523233890533447265625)
1.85 ჩვენთვის ზუსტი რიცხვია, მაგრამ კომპიუტერის მეხსიერებაში ის ინახება 
აახლოებით ასე: 1.8500000000000000888...
იგივე ხდება სხვა ენებშიც: console.log(0.1 + 0.2);
გამოიტანს: 0.30000000000000004
float ტიპზე var_dump() სიმბოლოების რაოდენობას არ წერს.
*/



// Change the value of the variable
$name = false;
//შეცვლა შეგვიძლია მნიშვნელობის და ტიპის ჩვეულებრივ როგორც let ზე.

// Print type of the variable
echo '<hr/>'.gettype($name).'<br/>'; 

// Variable checking functions
echo '<br/>';
var_dump(is_string($name)); //false emtpy
echo '<br/>';
echo is_int($age).'<br/>'; //1 = true ; emtpy =false
var_dump(is_bool($isMale));
echo '<br/>';
var_dump(is_double($height));

// Check if variable is defined ვამოწმებთ ამ სახელი გვაქვს თუ არა ცვლადი
echo '<hr/>';
echo isset($address);//false
echo '<br/>'.isset($name).'<hr/>'; //true

// Constants  can not be changed
define('PI',3.14);
define('PA',34523.32);
echo '<br/>'.PI;
echo '<br/>'.PA.'<br/>';
define('PIO',6.14);
echo '<br/>'.PIO.'<hr/>';

// Using PHP built-in constants PHP-ის ჩაშენებული კონსტანტები (Predefined Constants)
/*
ესენი არის წინასწარ განსაზღვრული, უცვლელი მნიშვნელობები (რიცხვები ან ტექსტები), 
რომლებიც PHP-ში თავიდანვე ჩაწერილია და მათი შეცვლა კოდის მუშაობის პროცესში 
შეუძლებელია
*/
echo SORT_ASC.'<br/>'; // PHP იყენებს სორტირების (დალაგების) დროს
echo PHP_INT_MAX.'<br/>'; // ყველაზე დიდ integer რიცხვი 9223372036854775807
echo PHP_VERSION.'<br/>';
echo M_PI.'<br/>';
echo SORT_DESC;

/*
PHP-ში: მასივები ჩვეულებრივ მუშაობენ ასლის შექმნის პრინციპით (By Value). 
თუ მასივს სხვა ცვლადს მიანიჭებ და შეცვლი, ორიგინალი ხელუხლებელი რჩება.

როდესაც PHP-ში ვიყენებთ ჩაშენებულ სორტირების ფუნქციებს (მაგალითად sort()), 
ეს ფუნქციები მიზანმიმართულად მუშაობენ რეფერენსით და ახდენენ ორიგინალი მასივის 
მუტაციას.
SORT_DESC და SORT_ASC არ იწვევს მუტაციას
*/
$numbers = [1,5345,4,4234,1234];
sort($numbers,SORT_ASC); // მუტაციას აკეთებს თუმცა აქ პრობლემას არ წარმოადგენს
print_r($numbers);
//echo თი არ წერს . 
?>