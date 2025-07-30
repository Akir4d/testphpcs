<?php
$x = 1;
$a = $x++; //qui prima assegna il valore attuale e poi incremenenta

echo $a . '<br>'; // uscira' 1 

$a = ++$x;

echo $a . '<br>'; // sara' 3

$a += 5;

echo $a . '<br>'; // sara' 8

$a = 5;
$b = "5";

if($a !== $b) echo '$a $b non sono identici <br>';

$nomi = array("Marta", "Giuditta", "Genoveffa", "PierClaudia");

echo $nomi[2] . '<br>';

$nome = ["Marta", "Giuditta", "Genoveffa", "PierClaudia"];

echo $nome[3] . '<br>';

$nome[4] = "Zaira";

echo $nome[4] . '<br>';

$myArray[0] = "John";
$myArray[1] = "PHP";
$myArray[2] = 21;

echo "$myArray[0] ha $myArray[2] anni e conosce il $myArray[1]";

// Outputs "John ha 21 anni e conosce il PHP"
$people = ["David"=>"27", "Amy"=>"21", "John"=>"42"];
echo $people['Amy']; // Outputs "21"

$people = array(
  'online'=>array('David', 'Amy'),
  'offline'=>array('John', 'Rob', 'Jack'),
  'away'=>array('Arthur', 'Daniel')
);

echo '<pre>',var_dump($people), '</pre>';

echo '<pre>',var_export($people), '</pre>';

$x = 10;
$y = 20;

if ($x >= $y) {
  echo "x è maggiore o uguale a y<br>";
} else {
  echo "y è maggiore di x<br>";
}

$age = 11;

if ($age < 13) {
  echo "Bambino<br>";
} elseif ($age > 13 && $age < 19) {
  echo "Teenager<br>";
} else {
  echo "Adulto<br>";
}

$i = 1;
while($i < 7) {
  echo '<br>The value is ' . $i++;
}

for ($a = 0; $a < 6; $a++) {
  echo "Value of a : ". $a . "<br>";
}

