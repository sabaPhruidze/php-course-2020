<?php

// Create simple string
$name = 'Saba';
$string = 'Hello I am $name';
$string2 = "Hello I'm $name";

echo 'ერთი წერტილით '.$string.'<br>';
echo 'ორი წერტილით '.$string2.'<hr/>';

// String concatenation
echo 'Hello ' . 'World ' . 'and PHP'. '<hr/>';
// String functions
$basic = "   Hello World   ";
var_dump($basic);
echo '<br/>';
echo "1 - strlen() ".strlen($basic) . '<br/>'; //length
echo "2 - trim() ";
var_dump(trim($basic));
echo '<br/>';

echo "3 - ltrim() ";
var_dump(ltrim($basic));
echo '<br/>';

echo "4 - rtrim() ";
var_dump(rtrim($basic));
echo '<br/>';

echo "5 - ". str_word_count($basic) . '<br/>';
echo "6 - ".strrev($basic) . '<br/>';
echo "7 - ".strtoupper($basic) . '<br/>';
echo "8 - ".strtolower($basic) . '<br/>';
echo "9 - ".ucfirst('hello') . '<br/>';
echo "10 - ".lcfirst('HELLO') . '<br/>';
echo "11 - ".ucwords("$basic and php") . '<br/>';
echo '12 - '.strpos($basic,'world').'<br/>'; //ეძებს ტექსტს დიდი და პატარა ასოების გათვალისწინებით (case-sensitive)
/*
აქ $basic შეიცავს: Hello World მაგრამ შენ ეძებ: world
World ≠ world ამიტომ შედეგი იქნება: false
*/
echo '13 - '.stripos($basic,'world').'<br/>';// ეძებს ტექსტს დიდი და პატარა ასოების გაუთვალისწინებლად (case-insensitive).

echo '14 - '.substr($basic,8,6).'<br/>';// substr(სტრინგი, საიდან დაიწყოს, რამდენი სიმბოლო)
echo '15 - '.str_replace('world','PHP',$basic).'<br/>'; //(არ ჩაანაცვლა) ტექსტის შეცვლა (ასოების ზომის გათვალისწინებით)
echo '16 - '.str_ireplace('world','PHP',$basic).'<br/>'; //(ჩაანაცვლა) ტექსტის შეცვლა (ასოების ზომის გაუთვალისწინებლად)

// Multiline text and line breaks
// Multiline text and reserve html tags
$longText ="
Hello my name is <b>Saba</b>
        I am <u>25</u> years old
I do sometimes coding
";
echo '<hr/>'.$longText;
echo '<br/>'.nl2br($longText).'<br/>'; // ინარჩუნებს ფორმას ახალი ხაზების მიხედვით
echo '<br/>'.nl2br(htmlentities($longText));// html კოდსაც აღიქვავს და დამატებით ახალ ხაზზე გადაჰყავს
//New Line To <br>
// https://www.php.net/manual/en/ref.strings.php