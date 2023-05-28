<?php
    class Permission {
        private string $name;
        private int $id; // не уверен как правильно все это нужно было делать... в задании не указано, что нужно создавать это свойство

        public function __construct(int $id, string $name){
            $this->id = $id;
            $this->name = $name;
        }

        public function getName() : string { 
            return $this->name;
        }
        
        public function getId() : int {
            return $this->id;
        }
    }
?>