<?php

class Person
{
    public function __construct(public string $name, public string $age)
    {
    }

    public function introduce(): string
    {
        return "Hi, I'm {$this->name}, and I'm {$this->age} years old.";
    }
}

class Employee extends Person
{
    public function __construct(public string $name, public string $age, public string $position)
    {
    }

    public function introduce(): string
    {
        return parent::introduce() . " I work as a {$this->position}.";
    }
}

$people = [
  new Employee('Lembayung', 23, 'Programmer'),
  new Person('Lily', 25)
];

function introduce(Person $person)
{
    echo "{$person->introduce()}\n";
}

foreach ($people as $person) {
    introduce($person);
}
