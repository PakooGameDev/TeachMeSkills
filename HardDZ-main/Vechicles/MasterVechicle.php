<?php
class Vechicle {
        private string $name = 'vechicle';
        private string $color = 'white';

        private float $mass = 0;
        private float $fuel = 0;
        private float $speed = 0;
        private float $power = 0;

        private bool $isEngineInWork = false;

        public function __construct(string $name, string $color, float $mass, float $fuel, float $speed, float $power, bool $isEngineInWork)
        {
            $this->name = $name;
            $this->color = $color;
            $this->mass = $mass;
            $this->fuel = $fuel;
            $this->speed = $speed;
            $this->power = $power;
            $this->isEngineInWork = $isEngineInWork;
        }

        public function setName(string $name){
            $this->name = $name;
        }
        public function setColor(string $color){
            $this->color = $color;
        }
        public function setMass(float $mass){
            $this->mass = $mass;
        }
        public function setFuel(float $fuel){
            $this->fuel = $fuel;
        }
        public function setPower(float $power){
            $this->power = $power;
        }
        public function setSpeed(float $speed){
            $this->speed = $speed;
        }
        public function setIsEngineInWork(bool $isEngineInWork){
            $this->isEngineInWork = $isEngineInWork;
        }
    

        public function getName() : string{
            return $this->name;
        }
        public function getColor() : string{
            return $this->color;
        }
        public function getMass() : float{
            return $this->mass;
        }
        public function getFuel() : float{
            return $this->fuel;
        }
        public function getSpeed() : float{
            return $this->speed;
        }
        public function getPower() : float{
            return $this->power;
        }
        public function getIsEngineInWork() : bool{
            return $this->isEngineInWork;
        }

        
        public function startTheEngine(){
            if($this->getFuel() > 0 && $this->getIsEngineInWork() == false){
                $this->setIsEngineInWork(true);
            }
        }

        public function stopTheEngine(){
            if($this->getIsEngineInWork() == true){
                $this->setIsEngineInWork(false);
            }
        }
       

        public function showInfoOnPannelByType(string $type) : string{
            switch (strtoupper($type)) {
                case 'FUEL':
                    return "{$this->getFuel()}<br>\n";
                    break;
                case 'SPEED':
                    return "{$this->getSpeed()}<br>\n";
                    break;
                case 'POWER':
                    return "{$this->getPower()}<br>\n";
                    break;
                case 'ENGINE':
                    return $this->getIsEngineInWork() ? "<span color=`green`>EngineTurnedOn</span><br>\n" : "<span color=`red`>EngineTurnedOff</span><br>\n";
                    break;                                                
                default:
                    return "{$this->getName()}<br>\n";
                    break;
            }
        }
     }
?>