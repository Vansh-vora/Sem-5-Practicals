<?php
# Create a class Car with attributes: brand, model, and year.
# • Add a method displayInfo() that prints car details.
# • Create 2 objects and display their information.

class Car{
  public $brand;
  public $model;
  public $year;

  function __construct($brand,$model,$year){
    $this->brand=$brand;
    $this->model=$model;
    $this->year=$year;
  }

  function displayinfo(){
    echo "Brand: $this->brand<br>";
    echo "model: $this->model<br>";
    echo "Year: $this->year<br>";
  }
}

$brand=$_POST['brand'];
$model=$_POST['model'];
$year=$_POST['year'];

$car1 =new Car($brand,$model,$year);
$car1->displayinfo();

?>