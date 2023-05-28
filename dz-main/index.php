<form action="save.php" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="surname" placeholder="surname">
    <input type="email" name="email" placeholder="email">
    <button type="submit" name="submit">Send</button>
</form>


<?php

$filename = 'example.txt';
$somecontent = "Hello world\n";


if (is_writable($filename)) {

    if (!$fp = fopen($filename, 'w+')) {
            echo "Не могу открыть файл ($filename)";
            exit;
    }

    if (!fwrite($fp, $somecontent)) {
            echo "Не могу произвести запись в файл ($filename)";
            exit;
    }

    if ($fp) {
        while (($buffer = fgets($fp, 4096)) !== false) {
            echo "Прочли $buffer";
        }
        if (!feof($fp)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
        }
    }

    fclose($fp);

} else {
   echo "Файл $filename недоступен для записи";
}

?>

