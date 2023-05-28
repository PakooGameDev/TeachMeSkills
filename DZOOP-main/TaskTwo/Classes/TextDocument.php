<?php

include_once('./Interfaces/DocumentInterface.php');

class TextDocument implements DocumentInterface{
    private string $title;
    private string $description;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    // INTERFACE methods

        // ------------------Setter methods---------------

    protected function setTitle(string $title){
        $this->title = $title;
    }
    protected function setDescription(string $description){
        $this->description = $description;
    }
        // ------------------Getter methods---------------

    public function getTitle() : string{
        return $this->title;
    }
    public function getDescription() : string{
        return $this->description;
    }
    public function process() : string{
        return "{$this->title} file is processing";
    }
    public function getInfo() : array{
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'wordAmount' => $this->getWordCount(),
        ];
    }

    // CLASS methods

        // ------------------Getter methods---------------

    protected function getWordCount() : int{
        return count(preg_split('/\s+/', $this->getDescription())); // str_word_count считает только латинские слова
    }

}

?>