<?php

$number = random_int(1000, 9999);

echo 'Number: '.$number.PHP_EOL;

$first = $number / 1000 % 10;
$second = $number / 100 % 10;
$third = $number / 10 % 10;
$fourth = $number % 10;

$result = $first + $second + $third + $fourth;

echo 'Result:'.$result.PHP_EOL;







