<?php

class Person
{
    // public string $name;
    // public string $age;

    public function __construct(public string $name, public string $age)
    {
        // $this->name = $name;
        // $this->age = $age;
    }

    public function introduce(): string
    {
        return "Hi, I'm {$this->name}, and I'm {$this->age} years old.\n";
    }
}

$person = new Person('Lily', 25);
echo $person->introduce();
$person2 = new Person('Lembayung', 23);
echo $person2->introduce();
