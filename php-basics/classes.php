<?php

class Person {
    public function __construct(private string $name) {
        $this->name = $name;
    }

    public function sayYourName(): void {
        echo $this->name;
    }
}

$person = new Person('Lucas');
echo $person->sayYourName();
