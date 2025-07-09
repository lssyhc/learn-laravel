<?php

declare(strict_types=1);

function add(int $a, int $b): int
{
    return $a + $b;
}

var_dump((add(5, 3)));
// var_dump((add("5", 3)));
// var_dump((add(5.0, 3)));
// var_dump((add((int)"5", 3)));
