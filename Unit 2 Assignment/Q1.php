<!DOCTYPE html>
<html>
<head>
    <title>Car Information</title>
</head>
<body style="font-family: Arial;">

<h2>Enter Car Details</h2>
<form method="post">
    <label>Brand:</label>
    <input type="text" name="brand" required><br><br>

    <label>Model:</label>
    <input type="text" name="model" required><br><br>

    <label>Year:</label>
    <input type="number" name="year" required><br><br>

    <input type="submit" name="submit" value="Display Info">
</form>

<?php
class Car {
    public $brand;
    public $model;
    public $year;

    function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    function displayInfo() {
        echo "<div style='margin-top:20px; padding:10px; border:2px solid black; width:300px;'>";
        echo "<h3>Car Information</h3>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "</div>";
    }
}

if(isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];

    $car1 = new Car($brand, $model, $year);
    $car1->displayInfo();
}
?>

</body>
</html>
