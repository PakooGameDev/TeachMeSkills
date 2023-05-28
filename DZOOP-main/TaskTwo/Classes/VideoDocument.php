<?php

include_once('./Interfaces/DocumentInterface.php');

class VideoDocument implements DocumentInterface{
    private string $title;
    private string $description;

    private float $duration;

    public function __construct(string $title, string $description, float $duration)
    {
        $this->title = $title;
        $this->description = $description;
        $this->duration = $duration;
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
            'duration' => $this->getDuration(),
        ];
    }

    // CLASS methods

        // ------------------Setter methods---------------

    protected function setDuration(string $duration){
        $this->duration = $duration;
    }
        // ------------------Getter methods---------------

    protected function getDuration() : float{
        return $this->duration;
    }
}

?>