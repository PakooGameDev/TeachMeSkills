<?php
class Library{
    private array $books= [];

    public function getBooks(): array
    {
        return $this->books;
    }

    public function addBook (Book $book){
        $this->books[] = $book;
    }

    public function removeBook ($title) {
        for ($i = 0; $i < count($this->books); $i++) {
            if ($this->books[$i]->getTitle() === $title) {
                unset($this->books[$i]);
            }
        }
    }

    public function getAvailableBooks() {
        return array_filter($this->books, function($item){
           return $item->isBookAvaliable() === true;
        });
    }

    public function getBookByTitle($title) {
        return array_filter($this->books, function ($item) use ($title){
           return $item->getTitle() === $title;
        });
    }

    public function getBooksByAuthor(Author $author) {
        $authorID =  $author->getId();
        return array_filter($this->books, function ($item) use ($authorID){
            return $item->getAuthorId() === $authorID;
        });
    }
}


?>