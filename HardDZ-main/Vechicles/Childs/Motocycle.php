<?php
include './Vechicles/MasterVechicle.php';

class Motorcycle extends Vechicle {
    private int $seats = 1;
    private string  $brand = 'brand';
    private string  $model = 'model';

    private array $attachments = [];

    public function __construct(string $brand,string $model, int $seats, array $attachments){
        $this->brand = $brand;
        $this->model = $model;
        $this->seats = $seats;
        $this->attachments = $attachments;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }
    public function setModel(string $model){
        $this->model = $model;
    }
    public function setSeats(int $seats){
        $this->seats = $seats;
    }

    public function getBrand() : string{
        return $this->brand;
    }
    public function getModel() : string{
        return $this->model;
    }
    public function getSeats() : int{
        return $this->seats;
    }
    public function getAttachments() : array{
        return $this->attachments;
    }
}

?>