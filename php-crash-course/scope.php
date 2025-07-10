<?php

$superhero = "Superman";

function revealIdentity()
{
    global $superhero;
    // $superhero = "Spiderman";
    $message = "real name is Clark Kent";
    echo "$superhero $message\n";
}

revealIdentity();
echo "$superhero\n";

function countVisitors()
{
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived!\n";
}

countVisitors();
countVisitors();
countVisitors();
