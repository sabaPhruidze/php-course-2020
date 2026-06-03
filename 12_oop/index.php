<?php

// What is class and instance
/*
კლასი არის შაბლონი (ნახაზი / რეცეპტი). ის ფურცელზეა და გვეუბნება, თუ როგორი უნდა იყოს საგანი, მაგრამ თავად საგანი ჯერ არ არსებობს.
ინსტანცია არის რეალური საგანი, რომელიც ამ შაბლონით მზადდება.

*/
 class Person {
    public string $name;
    public string $surname;
    private ?int $age; //is integer but accepts null as well
    public static int $counter =0;
    public function __construct($name,$surname){
     $this->name = $name;
     $this->surname=$surname;
     self::$counter++;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public static function getCounter() {
        return self::$counter;
    }
 }
 $person = new Person('Brad','Traversy');
 $person->setAge(30);
//  $person->name='Brad';
//  $person->surname = 'Traversy';
 

 echo '<pre>';
 var_dump($person);
 echo '</pre>';

echo $person->name.'<br>';
echo $person->getAge();

$person2 = new Person('John','Smith');
$person2->setAge(15);
// $person2->name='John';
// $person2->surname='Smith';

 echo '<pre>';
 var_dump($person2);
 echo '</pre>';
echo $person2->getAge();
echo '<br/>'.Person::getCounter(); //2 object is created
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter