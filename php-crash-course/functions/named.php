<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false)
{
    $message = "$greeting, $name!\n";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Lily");
echo greet("Lembayung", "Hi");
echo greet("Ken", "Hey", true);

echo greet(name: "Jokowi", shout: false);
