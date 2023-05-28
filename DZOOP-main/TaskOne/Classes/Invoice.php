<?php

include_once('./Traits/Calculate.php');

class Invoice extends Product{
    
    use Calculate;

    private int|string $id;
    private string $customer;
    private array $products = [];

    public function __construct(int|string $id, string $customer, array $products)
    {
        $this->id = $id;
        $this->customer = $customer;
        $this->products = $products;        
    }

    // CLASS methods

        // ------------------Setter methods---------------

    protected function setCustomer(string $customer){
        $this->customer = $customer;
    }
    protected function setProducts(array $products){
        $this->products = $products;
    }
        // ------------------Special methods---------------

    public function calculateProfit() : float {
        $sum = 0;
        foreach($this->products as $product){
            $sum += $product->calculateProfit();
        }
        return $sum;
    }
        // ------------------Getter methods---------------

    protected function getProducts() : array {
        return $this->products;
    }
    public function getCustomer() : string {
        return $this->customer;
    }
        // ------------------User methods---------------

    public function changeCustomer(string $customer){
        if(strlen($customer) > 0 && preg_match('/^([а-яё\s]+|[a-z\s]+)$/iu', trim(strtolower($customer) ) ) ){
            $this->setCustomer($customer);
        } 
    }
    
    public function addProduct(Order $order){
        $this->products[] = $order;   // Функция кажется не очень гибкой, но в рамках ДЗ, наверное, сойдет
    }


}

?>