<?php

use data\CatShelter;
use data\DogShelter;

require_once "data/AnimalShelter.php";
require_once "data/Animal.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Luna");
echo $cat->name . PHP_EOL;

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
echo $dog->name . PHP_EOL;