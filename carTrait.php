<?php

trait carTrait
{
    public $make;
    protected $model; 
    private $vin;

    public function showVin(){
        return $this->vin;
    }

    protected function changeModel($model){
        $this->model = $model;
    }

    private function changeVin($vin){
        $this->vin = $vin;
    }
}

//The base clase 
class car{
    use carTrait;
    public function __construct(
        $make = 'Toyota', 
        $model = 'Camry',
        $Vin = 78492002323
        ){
        $this->__construct($make, $model, $Vin);
    }
}

//This child class CarMaker inherits the code from the base class
class CarMaker extends car
{
    //
}

//Create an instance from the child class
$carMaker = new CarMaker();
echo $carMaker->showVin();

// Set the value of the class’ property.
$carMaker->changeModel('corolla');

//private methode cannot be called out of its class it was decleared
$carMaker->changeVin('879484203');
