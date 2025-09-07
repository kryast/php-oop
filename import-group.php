<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample as Sample1, Dummy as Dummy1};
use function Helper\helpMe as help;

$conflict = new Conflict1();
$sample = new Sample1();
$dummy = new Dummy1();

help();
