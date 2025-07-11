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

$set1 = [1,2,3,4,5];
$set2 = [3,4,5,6,7];
var_dump(array_intersect($set1, $set2));
var_dump(array_intersect($set2, $set1));
var_dump(array_diff($set1, $set2));
var_dump(array_diff($set2, $set1));

$keys = array_map(fn ($key) => ucfirst($key), array_keys($associativeArray));
$values = array_values($associativeArray);
var_dump($keys, $values);

var_dump(
    array_key_exists('name', $associativeArray),
    in_array('Lily', $associativeArray)
);

$fruitString = implode(', ', $fruits);
$backToArray = explode(', ', $fruitString);
var_dump($fruitString, $backToArray);

var_dump(
    array_merge($set1, $set2),
    array_merge($associativeArray, ['hobby' => 'Daydreaming']),
    $set1 + $set2,
    $associativeArray + ['hoby' => 'Daydreaming'],
    [...$set1, ...$set2],
    [...$associativeArray, ...['hobby' => 'Daydreaming']],
    array_unique(array_merge($set1, $set2)),
    array_slice($set1, 1, 3)
);

var_dump(
    array_search('banana', $fruits)
);
