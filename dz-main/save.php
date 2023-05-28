<?php

function validateField($fieldName) {
    return isset($_POST[$fieldName]) && !empty($_POST[$fieldName]) ? $_POST[$fieldName] : false;
}

function validateEmailField($fieldName) {
    return isset($_POST[$fieldName]) && !empty($_POST[$fieldName]) && filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = validateField('name');
    $surname = validateField('surname');
    $email = validateEmailField('email');

    $filename = 'data.txt';
    $dataToWrite = "$name, $surname, $email";

    if (is_writable($filename)) {
        if (!$fp = fopen($filename, 'w')) {
                echo "Не могу открыть файл ($filename)";
                exit;
        }
        if (!fwrite($fp, $dataToWrite)) {
                echo "Не могу произвести запись в файл ($filename)";
                exit;
        }

        echo "Данные ($dataToWrite) успешно записаны в файл ($filename)";
       fclose($fp);  
    } else {
       echo "Файл $filename недоступен для записи";
    }
}
?>