<?php
// 1. Создание функции-счетчика (без использования static). Каждый вызов функции +1 к исходному результату от начального значения функции. Использовать только замыкание и начальное значение переменной.
function updateCounter(){
    $num = 0;
    return function() use(&$num){
        return ++$num;
    };
}   
$counter = updateCounter();
echo $counter();

// 2. Создать замыкание для генератора случайных чисел в заданном диапазоне в передаваемых аргументах ($min, $max).
function randomIntInRange(){
    $min = 1;
    $max = 10;
    return function() use($min,$max){
        return rand($min, $max);
    };
}

$number = randomIntInRange();

echo $number();
?>