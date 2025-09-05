<?php

class Person{
    var string $name;
    var ?string $address;
    var string $country = "Indonesia";

    function sayHello(?string $name) {
        if (is_null($name)) {
            echo "Hello, my name is $this->name". PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }
}