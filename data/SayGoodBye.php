<?php

namespace Data\traits;

trait SayGoodBye {

    public function sayGoodBye(?string $name) {

        if(is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello {

    public function sayHello(?string $name) {

        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

class Person {

    use SayGoodBye, SayHello, HasName;
}