<?php

abstract class Shape{
  abstract public function calculateArea();
}

interface Drawable{
  public function draw();
}

class Circle extends Shape implements Drawable{
  private $radius;
   function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14159 * $this->radius * $this->radius;
    }

    public function draw() {
        echo "Drawing a Circle<br>";
    }
}

// Rectangle class
class Rectangle extends Shape implements Drawable {
    private $length;
    private $width;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function draw() {
        echo "Drawing a Rectangle<br>";
    }
}

// Demonstration
$circle = new Circle(5);
$rectangle = new Rectangle(10, 4);

echo "<b>Circle:</b><br>";
$circle->draw();
echo "Area: " . $circle->calculateArea() . "<br><br>";

echo "<b>Rectangle:</b><br>";
$rectangle->draw();
echo "Area: " . $rectangle->calculateArea() . "<br>";

?>
