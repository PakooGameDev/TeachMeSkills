<?php
class Book {
    private string $title;
    private int $author_id;
    private bool $is_available;

    public function __construct($title, $author_id, $is_available)
    {
        $this->title = $title;
        $this->author_id = $author_id;
        $this->is_available = $is_available;
    }

    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isBookAvaliable(): bool
    {
        return $this->is_available;
    }

}


?>