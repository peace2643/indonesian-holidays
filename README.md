# Indonesian Holidays

Simple package to check Indonesian public holidays.

## Installation

```bash
composer require peace2643/indonesian-holidays
Usage
<?php
require 'vendor/autoload.php';

use peace2643\IndonesianHolidays\IndonesianHolidays;

$holidays = new IndonesianHolidays();

// Check if today is a holiday
$today = $holidays->isToday();
if ($today) {
    echo "Today is: " . $today;
} else {
    echo "Today is not a holiday";
}

// Check if tomorrow is a holiday
$tomorrow = $holidays->isTomorrow();
if ($tomorrow) {
    echo "Tomorrow is: " . $tomorrow;
}

// Get all holidays this month
$thisMonth = $holidays->isThisMonth();
print_r($thisMonth);

// Get next holiday
$next = $holidays->getNext();
if ($next) {
    echo "Next holiday: " . $next['name'] . " on " . $next['date'];
}
Available Methods

isToday() - Check if today is a holiday
isYesterday() - Check if yesterday was a holiday
isTomorrow() - Check if tomorrow is a holiday
isHoliday($date) - Check specific date
isThisMonth() - Get all holidays this month
isThisYear() - Get all holidays this year
getAllHolidays() - Get all holidays
getNext() - Get next upcoming holiday
**## Credit**
Data is sourced from the awesome web at [tanggalans.id](https://tanggalans.id/). Terima kasih!
**License**
MIT License
