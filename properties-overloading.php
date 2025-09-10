<?php

class Zero {

    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
}

$zero = new Zero();
$zero->firstName = "Ahmad";
$zero->lastName = "Syarifuddin";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;