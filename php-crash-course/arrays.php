<?php

$simpleArray = [1,2,3,4,5];
$associativeArray = [
  'name' => 'Lily',
  'age' => 25,
  'city' => 'Bandung'
];

echo "{$simpleArray[0]}\n";
echo "{$associativeArray['name']}\n";

$simpleArray[] = 6;
$associativeArray['hobby'] = 'Reading';

$matrix = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
echo $matrix[1][1];

$fruits = ['apple', 'banana', 'orange'];
var_dump(count($fruits));
rsort($fruits);
var_dump($fruits);
sort($fruits);
var_dump($fruits);

var_dump($associativeArray);
asort($associativeArray);
var_dump($associativeArray);
ksort($associativeArray);
var_dump($associativeArray);

$numbers = range(1, 5);
var_dump($numbers);
$squared = array_map(fn ($n) => $n ** 2, $numbers);
var_dump($squared);
$evenNumbers = array_filter($numbers, fn ($n) => $n % 2 == 0);
var_dump($evenNumbers);

$sum = array_reduce($numbers, fn ($carry, $n) => $carry + $n, 0);
var_dump($sum);

$moreNumbers = [0, ...$numbers, 6];
var_dump($moreNumbers);

[$first, , $second] = $fruits;
var_dump($first, $second);
