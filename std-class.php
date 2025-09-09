<?php

$array = [
    "firstName" => "Ahmad",
    "lastName" => "Syarifuddin"
];

$object = (object)$array;

var_dump($object);

echo "First Name : $object->firstName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;

var_dump($arrayLagi);