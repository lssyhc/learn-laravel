<?php

$status = 200;

$message = match ($status) {
    200, 300 => 'Success',
    400, 404, 500 => 'Error',
    default => 'Unknown Status'
};

echo "$message\n";
