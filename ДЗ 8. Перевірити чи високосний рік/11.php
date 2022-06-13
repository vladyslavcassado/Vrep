<?php

$year = random_int(0, 9999);

if (($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) {
    echo 'Leap year';
} else {
    echo 'Not leap year';
}
