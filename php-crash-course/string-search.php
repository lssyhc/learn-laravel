<?php

$haystack = "The quick brown fox jumps over the lazy dog";
$pos = strpos($haystack, "quick");
var_dump($pos);

var_dump(str_replace("quick", "slow", $haystack));

preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);
