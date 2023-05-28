<?php

// 1

class student{

    private $name;
    private $surname;
    private $age;
    private $course;

    public function __construct(string $name,string $surname,int $age,int $course){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->course = $course;
    }

    public function setName(string $name){
        $this->name = $name;
    }
    public function setSurname(string $surname){
        $this->surname = $surname;
    }
    public function setAge(int $age){
        $this->age = $age;
    }
    public function setCourse(int $course){
        $this->course = $course;
    }

    public function getName() : string{
        return $this->name;
    }
    public function getSurname() : string{
        return $this->surname;
    }
    public function getAge() : int{
        return $this->age;
    }
    public function getCourse() : int{
        return $this->course;
    }
    public function showInfo() : string{
        return "{$this->getName()}, {$this->getSurname()}, {$this->getAge()}, {$this->getCourse()}<br>\n";
    }
}

$student = new student('Вася', 'Пупкин', 21, 4);

$student->setAge(67);

echo "{$student->showInfo()}";

// 2

class vechicle{

    private $brand;
    private $model;
    private $color;
    private $manufactureYear;

    public function __construct(string $brand,string $model,string $color,int $manufactureYear){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->manufactureYear = $manufactureYear;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }
    public function setModel(string $model){
        $this->model = $model;
    }
    public function setColor(string $color){
        $this->color = $color;
    }
    public function setManufactureYear(int $manufactureYear){
        $this->manufactureYear = $manufactureYear;
    }

    public function getBrand() : string{
        return $this->brand;
    }
    public function getModel() : string{
        return $this->model;
    }
    public function getColor() : string{
        return $this->color;
    }
    public function getManufactureYear() : int{
        return $this->manufactureYear;
    }
    public function showInfo() : string{
        return "{$this->getBrand()}, {$this->getModel()}, {$this->getColor()}, {$this->getManufactureYear()}<br>\n";
    }
}

$car = new vechicle('BMW', 'Gran Coupe G15', 'Белый', 2019);

$car->setColor('black');

echo $car->showInfo();

// 3


class circle {

    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return round(pow($this->radius, 2) * pi(), 2);
    }

}

$circle = new circle(10);

echo "{$circle->calculateArea()}<br>\n";

// 4

class human{

    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function isAdult() : bool {   
        return $this->age >= 18;
    }
}

$human = new human('Гжэгош Бженьчишчикевич', 27, 'MALE');

print_r("{$human->isAdult()}<br>\n");

?>
