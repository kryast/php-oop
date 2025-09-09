<?php

require_once "data/SayGoodBye.php";

use Data\traits\{SayGoodBye, SayHello, Person};

$person = new Person();
$person->sayGoodBye("Ahmad");
$person->sayHello("Syarifuddin");

$person->name = "Ahmad";
var_dump($person);