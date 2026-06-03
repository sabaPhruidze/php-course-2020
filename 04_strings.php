<?php

// Create simple string
$name = 'Saba';
$string = 'Hello I m $name';
$string2 = "Hello I'm $name";

echo $string.'<br>';
echo $string2.'<br>';

// String concatenation
echo 'Hello ' . 'World' . 'and PHP'. '<br/>';
// String functions
$basic = "   Hello World   ";

echo "1 - ".strlen($basic) . '<br/>'; //length
echo "2 - ".trim($basic) . '<br/>';
echo "3 - ".ltrim($basic) . '<br/>';
echo "4 - ".rtrim($basic) . '<br/>';
echo "5 - ".str_word_count($basic) . '<br/>';
echo "6 - ".strrev($basic) . '<br/>';
echo "7 - ".strtoupper($basic) . '<br/>';
echo "8 - ".strtolower($basic) . '<br/>';
echo "9 - ".ucfirst('hello') . '<br/>';
echo "10 - ".lcfirst('HELLO') . '<br/>';
echo "11 - ".ucwords("$basic and php") . '<br/>';
echo '12 - '.strpos($basic,'world').'<br/>';
echo '13 - '.stripos($basic,'world').'<br/>';
echo '14 - '.substr($basic,8,6).'<br/>';
echo '15 - '.str_replace('world','PHP',$basic).'<br/>';
echo '16 - '.str_ireplace('world','PHP',$basic).'<br/>';

// Multiline text and line breaks
// Multiline text and reserve html tags
$longText ="
Hello my name is <b>Saba</b>
        I am <u>25</u> years old
I do sometimes coding
";
echo '<hr/>'.$longText;
echo '<br/>'.nl2br($longText).'<br/>'; // ინარჩუნებს ფორმას ახალი ხაზების მიხედვით
echo '<br/>'.nl2br(htmlentities($longText));

// https://www.php.net/manual/en/ref.strings.php