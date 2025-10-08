<!DOCTYPE html>
<html>
<head>
    <title>Shape Example</title>
</head>
<body style="font-family: Arial;">

<h2>Calculate Area of Shapes</h2>
<form method="post">
    <h3>Circle</h3>
    Radius: <input type="number" name="radius" step="0.01" required><br><br>

    <h3>Rectangle</h3>
    Length: <input type="number" name="length" step="0.01" required><br><br>
    Width: <input type="number" name="width" step="0.01" required><br><br>

    <input type="submit" name="submit" value="Show Areas">
</form>

<?php
// Abstract class
abstract class Shape {
    abstract public function calculateArea();
}

// Interface
interface Drawable {
    public function draw();
}

// Circle class
class Circle extends Shape implements Drawable {
    public $radius;
    const PI = 3.14159;

    function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return self::PI * $this->radius * $this->radius;
    }

    public function draw() {
        echo "Drawing a Circle with radius " . $this->radius . "<br>";
    }
}

// Rectangle class
class Rectangle extends Shape implements Drawable {
    public $length;
    public $width;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function draw() {
        echo "Drawing a Rectangle of length " . $this->length . " and width " . $this->width . "<br>";
    }
}

// If form is submitted
if(isset($_POST['submit'])) {
    $radius = $_POST['radius'];
    $length = $_POST['length'];
    $width = $_POST['width'];

    // Circle object
    $circle = new Circle($radius);
    $circle->draw();
    echo "Area of Circle: " . round($circle->calculateArea(), 2) . "<br><br>";

    // Rectangle object
    $rectangle = new Rectangle($length, $width);
    $rectangle->draw();
    echo "Area of Rectangle: " . round($rectangle->calculateArea(), 2) . "<br>";
}
?>
</body>
</html>
