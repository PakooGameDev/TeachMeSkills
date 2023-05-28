<?php

include_once('./Interfaces/DocumentInterface.php');

class ImageDocument implements DocumentInterface{
    private string $title;
    private string $description;

    private int $height = 0;
    private int $width = 0;

    public function __construct(string $title, string $description, int $height = 0, int $width = 0)
    {
        $this->title = $title;
        $this->description = $description;
        $this->height = $height;
        $this->width = $width;
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
            'dimensions' => $this->getDimensions(),
        ];
    }

    // CLASS methods

        // ------------------Setter methods---------------

    protected function setHeight(int $height){
        $this->height = $height;
    }
    protected function setWidth(int $width){
        $this->width = $width;
    }
        // ------------------Getter methods---------------

    protected function getHeight() : int{
        return $this->height;
    }
    protected function getWidth() : int{
        return $this->width;
    }
    protected function getDimensions(){
        return "{$this->getHeight()} px, {$this->getWidth()} px";
    }
}

?>