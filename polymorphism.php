<?php

require_once "data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Ahmad Syarifuddin");
var_dump($company);

$company->programmer = new BackendProgrammer("Syarifuddin");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ahmad");
var_dump($company);

sayHelloProgrammer(new Programmer("Ahmad Syarifuddin"));
sayHelloProgrammer(new BackendProgrammer("Syarifuddin"));
sayHelloProgrammer(new FrontendProgrammer("Ahmad"));