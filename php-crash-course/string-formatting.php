<?php

$name = "Lily";
$age = 25;

printf("%s is %d years old.\n", $name, $age);

$csv = "apple,banana,cherry";
$fruits = explode(",", $csv);
var_dump(implode(", ", $fruits));

$padded = str_pad("Hello", 11, "-", STR_PAD_BOTH);
echo $padded . "\n";

var_dump(trim("     Hello World        "));
