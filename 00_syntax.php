<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
 echo 'hello world'; // პირდაპირ წერს
 echo ' and PHP'; //პირდაპირ წერს (არ არის console.log)
?>
</br>
</br>
<?php
 echo '<br/>';
 echo 'Hello world another tag';
 /*
 
 HTML სრული სტრუქტურა აუცილებელი არ არის, რომ PHP იმუშაოს.

ესენი:

<!doctype html>
<html>
<head></head>
<body></body>
</html>

საჭიროა იმისთვის, რომ გვერდი იყოს სწორი, სრული HTML დოკუმენტი.

მაგრამ PHP-სთვის აუცილებელი არ არის. PHP უბრალოდ აკეთებს ამას:

echo 'hello world';

და ბრაუზერში აგზავნის ტექსტს/HTML-ს.
 */
?>
</body>
</html>
<!-- sudo /opt/lampp/manager-linux-x64.run სერვერის ჩართვა -->