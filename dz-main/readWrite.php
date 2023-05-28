<?php

$filename = 'example.txt';
$somecontent = "Hello world\n";


if (is_writable($filename)) {

    if (!$fp = fopen($filename, 'w')) {
            echo "Не могу открыть файл ($filename)";
            exit;
    }

    if (!fwrite($fp, $somecontent)) {
            echo "Не могу произвести запись в файл ($filename)";
            exit;
    }

    fclose($fp);
} else {
   echo "Файл $filename недоступен для записи";
}

if ($fp = fopen($filename, 'r')) {
    while (($buffer = fgets($fp, 4096)) !== false) {
        echo "Прочли $buffer";
    }
    if (!feof($fp)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
}
fclose($fp);

?>
