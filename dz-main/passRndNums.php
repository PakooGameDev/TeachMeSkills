<?php

$filename = 'example.txt';

if (is_writable($filename)) {
    if (!$fp = fopen($filename, 'w')) {
        echo "Не могу открыть файл ($filename)";
        exit;
    }
    for ($i = 0; $i < 10; $i++) {
        $num = rand(1, 1000);
        if (!fwrite($fp, "$num ")) {
            echo "Не могу произвести запись в файл ($filename)";
            exit;
        }
    }

    fclose($fp);
} else {
   echo "Файл $filename недоступен для записи";
}

if ($fp = fopen($filename, 'r')) {
    while (($buffer = fgets($fp, 4096)) !== false) {
        echo array_sum(explode(" ", $buffer)); 
    }

    if (!feof($fp)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
}
fclose($fp);

?>
