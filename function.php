<?php

require_once "data/Person.php";

$person = new Person("Syarifuddin", null);
$person->name = "Syarifuddin";

$person->sayHello("Ahmad");
$person->sayHello(null);

$person->info();