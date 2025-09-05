<?php

require_once "data/Person.php";

$person = new Person();

$person->nama = "Ahmad";
$person->address = "Palembang";
$person->country = "Indonesia";

var_dump($person);