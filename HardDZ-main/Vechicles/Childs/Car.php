<?php
include './Vechicles/MasterVechicle.php';

class Car extends Vechicle {
        private int $seats = 1;
        private int $pasangerSeats = 1;

        private string  $driveUnit = 'full';
        private string  $brand = 'brand';
        private string  $model = 'model';

        private array $inventory = [];

        public function __construct(string $brand,string $model, string  $driveUnit, int $seats, int $pasangerSeats, array $inventory){
            $this->brand = $brand;
            $this->model = $model;
            $this->seats = $seats;
            $this->pasangerSeats = $pasangerSeats;
            $this->inventory = $inventory;
            $this->driveUnit = $driveUnit;
        }
    
        public function setBrand(string $brand){
            $this->brand = $brand;
        }
        public function setModel(string $model){
            $this->model = $model;
        }
        public function setPasangerSeats(int $pasangerSeats){
            $this->pasangerSeats = $pasangerSeats;
        }
        public function setDriveUnit(string $driveUnit){
            $this->driveUnit = $driveUnit;
        }
        public function setSeats(int $seats){
            $this->seats = $seats;
        }
        public function addToInventory(string $item, int $index = -1){
            if($index == -1){
                $this->inventory[] = $item;
            } else {
                $this->inventory[$index] = $item;
            }
        }
 
        public function getBrand() : string{
            return $this->brand;
        }
        public function getModel() : string{
            return $this->model;
        }
        public function getDriveUnit() : string{
            return $this->driveUnit;
        }
        public function getSeats() : int{
            return $this->seats;
        }
        public function getPasangerSeats() : int{
            return $this->pasangerSeats;
        }
        public function getInventory() : array{
            return $this->inventory;
        }

     }
     
    ?>

    