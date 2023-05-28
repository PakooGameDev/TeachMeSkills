<?php

function GetHomeworkByID ($i = 0) {
    if ($i > 0 || $i != NULL && $i < 10) {
    switch ($i) {
        case 1:
            $x = 5;
            echo $x + 3, "\n";
            break;
        case 2:
            $a = 10;
            $b = 7;
            echo $a / $b, "\n";
            break;
        case 3:
            $name = "Алиса";
            $age = 25;
            echo "Меня зовут {$name} и мне {$age} лет \n";
            break;
        case 4:
            $x = 12;
            echo $x * 2, "\n" ;
            break;
        case 5:
            $x = 6;
            $y = 4;
            echo $x * $y, "\n";
            break;
        case 6:
            $a = 7;
            $b = 3;
            echo $a + $b, "\n";
            break;     
        case 7:
            $x = "Я кодер и ";
            $y = $x . "мне нравится програмирование";
            echo $y, "\n";
            break;
        case 8:
            $a = 5;
            echo $a++, "\n";
            break;
        case 9:
            $x = "Чистое";
            $y = "Небо";
            echo $x . $y, "\n";
            break;
        case 10:
            $a = '21';
            $b = 34;
            echo $a + $b, "\n";
            break;    
        }
    } else if($i > 10){
        echo "There is no such a result";
    } else {
        echo "There is no input";
    }
}

// GetHomedorkByID (); // put the number in the brackets

for($i = 1; $i <= 10; $i++) {
    echo "{$i}. ", GetHomeworkByID ($i);
}

?>