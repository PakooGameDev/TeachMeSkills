<?php
class Department {
    private string $name = 'department';

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName() : string { 
        return $this->name;
    }
}
?>
