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

trait CanRun {

    public abstract function run(): void;
}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun{

        // sayGoodBye as private;
        // sayHello as private;
    }
}

class ParentPerson {

      public function goodBye(): void
    {
        echo "Goodbye in Person" . PHP_EOL;
    }

    public function hello(): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

class Person extends ParentPerson{

    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

  
}

// ParentClass=override by => Trait = override by => ChildClass