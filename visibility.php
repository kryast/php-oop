<?php

require_once "data/Product.php";

$product = new Product("Apple", 10000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

