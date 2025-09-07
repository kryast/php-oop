<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Ahmad";
$manager->sayHello("Syarifuddin");

$vp = new VicePresident("Syarifuddin");
$vp->sayHello("Ahmad");

