<?php

require_once "helper/MathHelper.php";

use helper\MathHelper;

// $helper = new MathHelper();
// echo $helper->name . PHP_EOL; Error 

echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Ahmad Syarifuddin";

echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,10,10,10,10);
echo "Result : $result" . PHP_EOL;