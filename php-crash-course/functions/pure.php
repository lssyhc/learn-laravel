<?php

function add(int $a, int $b)
{
    return $a + $b;
}
var_dump(add(1, 3), add(1, 3));

$toal = 0;

function addTo($value)
{
    global $total;
    $total += $value;
    return $total;
}
var_dump(addTo(3), addTo(3));
