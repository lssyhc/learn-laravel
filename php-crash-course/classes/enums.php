<?php

enum DaysOfWeek
{
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::WEDNESDAY;
if ($today === DaysOfWeek::WEDNESDAY) {
    echo "Today is Wed!\n";
}

enum Color: string
{
    case RED = 'ff0000';
    case BLUE = '00ff00';
    case GREEN = '0000ff';
}
echo Color::RED->value . "\n";

function isWeekend(DaysOfWeek $day): bool
{
    return DaysOfWeek::SATURDAY === $day || DaysOfWeek::SUNDAY === $day;
}
echo isWeekend(DaysOfWeek::MONDAY) ? 'Yes' : 'No' . "\n";
