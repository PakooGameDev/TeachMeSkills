<?php

include_once('./Traits/Calculate.php');

class Product{

    use Calculate;

    private int|string $id;
    private string $name;
    private float $price;

    public function __construct(int|string $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // CLASS methods

        // ------------------Setter methods---------------

    protected function setId(int|string $id){
        $this->id = $id;
    }
    protected function setName(string $name){
        $this->name = $name;
    }
    protected function setPrice(float $price){
        $this->price = $price;
    }
        // ------------------Getter methods---------------

    protected function getId() : int|string {
        return $this->id;
    }
    protected function getName() : string {
        return $this->name;
    }
    protected function getPrice() : float {
        return $this->price;
    }

    // TRAIT abstract method

    public function calculateProfit() : float {
        return $this->getPrice();
    }
}

?>