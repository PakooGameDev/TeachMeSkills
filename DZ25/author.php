<?php

class Author {
    private int $id;
    private string $last_name;

    public function __construct($id, $last_name)
    {
        $this->id = $id;
        $this->last_name = $last_name;
    }
    public function getLastName(): string
    {
        return $this->last_name;
    }
    public function getId(): string
    {
        return $this->id;
    }

}

?>