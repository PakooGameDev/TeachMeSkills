<?php

include_once('./Interfaces/DocumentInterface.php');
include_once('./Classes/TextDocument.php');
include_once('./Classes/ImageDocument.php');
include_once('./Classes/VideoDocument.php');

$textDocument = new TextDocument('Бегемотики', 'Текст про бегемотиков');
print_r($textDocument->getInfo());
echo "<br>\n{$textDocument->process()}<br>\n";


$imageDocument = new ImageDocument('Картинка с раком', 'На фото изображен типичный юниоры-разработчик', 100, 150);
print_r($imageDocument->getInfo());
echo "<br>\n{$imageDocument->process()}<br>\n";

$videoDocument = new VideoDocument('Домашка по ООП', 'Кадры 50+, жанр: ужасы', 666.0);
print_r($videoDocument->getInfo());
echo "<br>\n{$textDocument->process()} <br>\n";

?>