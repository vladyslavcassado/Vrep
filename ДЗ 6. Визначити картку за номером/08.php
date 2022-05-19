<?php
$cardNumber = random_int(6, 14);
switch ($cardNumber) {
    case 6;
        echo 'Шесть Пика';
        break;
    case 7;
        echo 'Семь Пика';
        break;
    case 8;
        echo 'Восемь Пика';
        break;
    case 9;
        echo 'Девять Пика';
        break;
    case 10;
        echo 'Десять Пика';
        break;
    case 11;
        echo 'Валет Пика';
        break;
    case 12;
        echo 'Дама Пика';
        break;
    case 13;
        echo 'Король Пика';
        break;
    case 14;
        echo 'Туз Пика';
    break;
}