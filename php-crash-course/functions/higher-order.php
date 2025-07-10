<?php

$users = [
  ['id' => 1, 'name' => 'Lily', 'role' => 'admin'],
  ['id' => 2, 'name' => 'Lembayung', 'role' => 'user'],
  ['id' => 3, 'name' => 'Jokowi', 'role' => 'user']
];

function createFilter($key, $value)
{
    return fn ($item) => $item[$key] === $value;
}

$isAdmin = createFilter('role', 'admin');
$isJokowi = createFilter('name', 'Jokowi');
$admins = array_filter($users, $isAdmin);
var_dump($admins);
var_dump(array_filter($users, $isJokowi));
