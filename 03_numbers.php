<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c.'<br/>'; // როგორც რეალოგაში აქაც ეგრე მუშაობს მათემატიკა
echo $a % $b . '<br/>'; // modulo ნაშთს აჩვენებს

// Assignment with math operators
$a -= $b; // იგივეა რაც $a = $a - $b;
echo '<hr/>'.$a;

// Increment operator
echo '<hr/>'.$a++.'<br/>'; //ჯერ დაბეჭდე, მერე გაზარდე
echo ++$a.'<br/>'; //ჯერ გაზარდე, მერე დაბეჭდე
// Decrement operator
echo --$a.'<br/>';
echo $a--.'<br/>';
echo $a;

// Number checking functions
echo '<hr/>'.is_float(1.25);//true
echo '<br/>'.is_double(1.25); //true
echo '<br/>'.is_numeric('3g.45');//false
echo '<br/>'.is_numeric('3.45');
echo '<br/>'.is_int(5).'<hr/>';//true

/*true because it undestand value without type*/

// Conversion
$strNumber='12.34';
$number = (float)$strNumber;
var_dump($number);
echo '<br/>';
$number = intval($strNumber);
var_dump($number);

// Number functions
echo '<br/>'."abs(-15) " . abs(-15) . '<br>'; // უარყოფით რიცხვს აბრუნებს დადებითად: 15
echo "pow(2, 3) " . pow(2, 3) . '<br>';       // ხარისხში აყვანა: 2³ = 8
echo "sqrt(16) " . sqrt(16) . '<br>';         // კვადრატული ფესვი: √16 = 4
echo "max(2,9, 3) " . max(2,9, 3) . '<br>';   // აბრუნებს ყველაზე დიდ რიცხვს: 9
echo "min(2, 3) " . min(2, 3) . '<br>';       // აბრუნებს ყველაზე პატარა რიცხვს: 2
echo "round(2.4) " . round(2.4) . '<br>';     // ამრგვალებს უახლოეს მთელ რიცხვამდე: 2
echo "round(2.6) " . round(2.6) . '<br>';     // ამრგვალებს უახლოეს მთელ რიცხვამდე: 3
echo "floor(2.6) " . floor(2.6) . '<br>';     // ყოველთვის ამრგვალებს ქვემოთ: 2
echo "ceil(2.4) " . ceil(2.4) . '<br>';       // ყოველთვის ამრგვალებს ზემოთ: 3
// Formatting numbers
$number = 1232435345.5345345; //
echo number_format($number,2,',',' ');
/*
number_format(რიცხვი, ათწილადის_რაოდენობა, ათწილადის_გამყოფი, ათასების_გამყოფი)
*/
// https://www.php.net/manual/en/ref.math.php
// all math functions
