<?php

function greet($name)
{
    return "Hello, $name!\n";
}

echo greet("Lily");

function greetWithTime($name, $time = "day")
{
    return "Good $time, $name\n";
}

echo greetWithTime("Violet");
echo greetWithTime("Lembayung", "evening");
