<?php
include_once "book.php";
include_once "author.php";
include_once "library.php";

$sapkovski = new Author(1, 'Сапковский');
$martin = new Author(2, 'Мартин');

$library = new Library();
$library->addBook(new Book('Последнее желание', 1, true));
$library->addBook(new Book('Песнь льда и пламени', 2, false));

print_r($library->getBookByTitle('Песнь льда и пламени'));
print_r($library->getBooksByAuthor($sapkovski));

$library->removeBook('Песнь льда и пламени');

var_dump($library->getAvailableBooks());

?>
