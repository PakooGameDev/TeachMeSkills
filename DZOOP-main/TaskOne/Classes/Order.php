<?php

include_once('./Traits/Calculate.php');

class Order extends Product{

    use Calculate;

    private int|string $id;
    private Product $product;
    private int $quantity;

    public function __construct(int|string $id, Product $product, int $quantity)
    {
        $this->id = $id;
        $this->product = $product;
        $this->quantity = $quantity;
    }

    // CLASS methods

        // ------------------Setter methods---------------

    protected function setProduct(Product $product){
        $this->product = $product;
    }
    protected function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }
    public function changeQuantity(int $quantity){
        if($quantity > 0){
            $this->setQuantity($quantity);
        }  
    }
        // ------------------Getter methods---------------
        
    protected function getProduct() : Product {
        return $this->product;
    }
    public function getProductInfo() : string {
        return "{$this->getProduct()->getId()}, {$this->getProduct()->getName()}, {$this->getProduct()->getPrice()}";
    }
    public function getQuantity() : int{
        return $this->quantity;
    }
    public function calculateProfit() : float{
        return $this->quantity * $this->product->getPrice();
    }

}

?>