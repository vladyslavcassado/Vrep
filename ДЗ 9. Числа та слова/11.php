<?php

$number = random_int(1000, 9999);

echo 'Number: '.$number.PHP_EOL;

if (0 ===$number) {
    exit('Нема доларів');
}

$first = (int) ($number / 1000) % 10;
$second = (int) ($number / 100) % 10;
$third =  (int) ($number / 10) % 10;
$fourth = $number % 10;

switch ($first) {

    case 1:
        $output = 'одна тисяча';
        break;
    case 2:
        $output = 'дві тисячі';
        break;
    case 3:
        $output = 'три тисячі';
        break;
    case 4:
        $output = 'чотири тисячі';
        break;
    case 5:
        $output = 'п^ять тисяч';
        break;
    case 6:
        $output = 'шість тисяч';
        break;
    case 7:
        $output = 'сім тисяч';
         break;
    case 8:
        $output = 'вісім тисяч';
        break;
    case 9:
        $output = 'дев^ять тисяч';
        break;
    default:
        $output = '';
        break;
}

switch ($second) {
    case 1:
        $output .= 'сто';
        break;
    case 2:
        $output .= 'двісті';
        break;
    case 3:
        $output .= 'триста';
        break;
    case 4:
        $output .= 'чотириста';
        break;
    case 5:
        $output .= 'п^ятсот';
        break;
    case 6:
        $output .= 'шістсот';
        break;
    case 7:
        $output .= 'сімсот';
        break;
    case 8:
        $output .= 'вісімсот';
        break;
    case 9:
        $output .= 'дев^ятсот';
        break;
    default:
        $output .= '';
        break;
}

if (1 === $third) {
    switch ($third) {
        case 1:
            $output .= 'одинадцять';
            break;
        case 2:
            $output .= 'дванадцять';
            break;
        case 3:
            $output .= 'тринадцять';
            break;
        case 4:
            $output .= 'чотирнадцять';
            break;
        case 5:
            $output .= 'п^ятнадцять';
            break;
    case 6:
        $output .= 'шістнадцять';
        break;
    case 7:
        $output .= 'сімнадцять';
        break;
    case 8:
        $output .= 'вісімнадцять';
        break;
    case 9:
        $output .= 'дев^ятнадцять';
        break;
    default:
        $output .= '';
        break;
}

} else {
    switch ($third) {
        case 2:
            $output .= 'двадцять';
            break;
        case 3:
            $output .= 'тридцять';
            break;
        case 4:
            $output .= 'сорок';
            break;
        case 5:
            $output .= 'п^ятдесят';
            break;
    case 6:
        $output .= 'шістдесят';
        break;
    case 7:
        $output .= 'сімдесят';
        break;
    case 8:
        $output .= 'вісімдесят';
        break;
    case 9:
        $output .= 'дев^яносто';
        break;
    default:
        $output .= '';
        break;
    }
    
    switch ($fourth) {
        case 1:
            $output .= 'один долар';
            break;
        case 2:
            $output .= 'два долари';
            break;
        case 3:
            $output .= 'три долари';
            break;
        case 4:
            $output .= 'чотири долари';
            break;
        case 5:
            $output .= 'п^ять доларів';
            break;
        case 6:
            $output .= 'шість доларів';
             break;
        case 7:
             $output .= 'сім доларів';
             break;
        case 8:
             $output .= 'вісім доларів';
             break;
        case 9:
             $output .= 'дев^ять доларів';
             break;
        default:
            $output .= 'доларів';
            break;


    }
}

echo $output.PHP_EOL;



