<?php

// 1
    function sendMessageByAge(int $age){
        if($age >= 18 || $age <= 65){
            return "Вы взрослый";
        } else if($age < 18) {
            return "Вы несовершеннолетний";
        } else {
            return "Вы пенсионер";
        }
    }

// 2 
    function isNumberOdd($num) {
        return ($num % 2 == 0) ? "Число является четным":"Число является нечетным";
    }

// 3  
    function dayOfWeakNum($num) {
       switch($num){
        case 1:
            return $num;
        break;
        case 2:
            return $num;
        break;
        case 3:
            return $num;
        break;
        case 4:
            return $num;
        break;
        case 5:
            return $num;
        break;
        case 6:
            return $num;
        break;
        case 7:
            return $num;
        break;
        default:
            echo "unavaliable number";
            return 0;
       }
    }

// 4  
    function daysInMonth($num) {
        switch($num){
            case 2:
                return "В этом месяце 28 дней";
            break;
            case 4:
            case 6:
            case 9:
            case 11:
                return "В этом месяце 30 дней";
            break;
            default:
                return "В этом месяце 31 день";
        }
    }

// 5
    function isPalindrome($str) {
        $result = match (true) {
            $str == strrev($str) => 'палиндром',
            default => 'не палиндром',
        };
        return $result;
    }  
    echo isPalindrome('level');

// 6
    function isMultipleOfThree($num) {
        $result = match (true) {
            $num % 2 == 0 => 'четное',
            $num % 3 == 0 => 'кратно 3-м',
            $num % 5 == 0 => 'кратно 5-м',
        };
        return $result;
    }  
    echo isMultipleOfThree(15);

// 7 
    function sumOfOdd($num = 10, $sum = 0, $i = 1){
        while ($i <= $num) {
            if ($i % 2 != 0) {
                $sum += $i;
            }
            $i++;
        }      
        return $sum;  
    }
    echo sumOfOdd();

// 8 
    function getPositiveMultipleOfSeven($i = 1){
        while ($i % 7 != 0) {
            $i++;
        }      
        return $i;  
    }
    echo getPositiveMultipleOfSeven();

// 9 
    function arrSum($numbers){
        $sum = 0;
        for($i = 0; $i <= count($numbers); $i++){
            $sum += $i;
        }
        return $sum;  
    }
    echo arrSum([1, 2, 3, 4, 5]);

// 10 
    function getArrOfEven($numbers){
        $evenNumbers = [];
        for($i = 0; $i <= count($numbers); $i++){
            if($i % 2 == 0){
                $evenNumbers[] = $i;
            }
        }
        return $evenNumbers;  
    }
    print_r(getArrOfEven([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])) ;

// 11 
    $words = [
        "red" => "красный",
        "blue" => "синий",
        "green" => "зеленый"
    ];
    $words += ['yellow'=>'желтый'];

    foreach($words as $key)
    {
        echo "$key\n";
    }

// 12 
    $words = [
        "red" => "красный",
        "blue" => "синий",
        "green" => "зеленый"
    ];
    $otherWords = [
        "yellow" => "желтый",
        "pink" => "розовый"
    ];

    $result = $words + $otherWords;

    foreach($result as $key => $value)
    {
        echo "$key : $value \n";
    }
    ?>
?>