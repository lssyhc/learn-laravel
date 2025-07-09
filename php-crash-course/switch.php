<?php

$size = "M";

switch ($size) {
    case "S":
    case "M":
        echo "Small or Medium Size\n";
        break;
    case "L":
    case "XL":
        echo "Large or Extra Large Size\n";
        break;
    default:
        echo "Unknown size\n";
}

if ($size == "S" || $size == "M") {
    echo "Small or Medium Size\n";
} elseif ($size == "L" || $size == "XL") {
    echo "Large or Extra Large Size\n";
} else {
    echo "Unknown size\n";
}

$badAttemps = 2;

switch ($badAttemps) {
    case 3:
        echo "You blocked!\n";
        // no break
    default:
        echo "Bad attempt detected!\n";
}
