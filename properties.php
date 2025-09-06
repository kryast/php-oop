<?php

require_once "data/Person.php";

$person = new Person("Ahmad", null);

$person->name = "Ahmad";
$person->address = "Palembang";
$person->country = "Indonesia";

echo "Name : $person->name"  . PHP_EOL ;
echo "Address : $person->address"  . PHP_EOL ;
echo "Country : $person->country"  . PHP_EOL ;

$person2 = new Person("Syarifuddin", null);

$person2->name = "Syarifuddin";
$person2->address = "Palembang";

echo "Name : $person2->name"  . PHP_EOL ;
echo "Address : $person2->address"  . PHP_EOL ;
echo "Country : $person2->country"  . PHP_EOL ;