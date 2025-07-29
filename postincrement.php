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

if($a !== $b) echo '$a $b non sono identici';