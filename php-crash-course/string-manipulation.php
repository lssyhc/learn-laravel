<?php

$str = "Hello, World!";
echo "{$str[0]}\n";
echo "{$str[-1]}\n";

echo substr($str, 0, 5) . "\n";
echo substr($str, 5) . "\n";

echo strtoupper($str) . "\n";
echo strtolower($str) . "\n";
echo ucfirst(strtolower($str)) . "\n";

$greeting = "Hello, " . "World!";
$greeting .= " How are you?";
echo $greeting;
