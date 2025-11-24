<?php

class M {
  const PI=3.1419;

  public static function areaofCircle($radius){
    return self::PI*$radius*$radius;
  }
}
$radius=5;
$area=M::areaofCircle($radius);

echo "Radius: $radius<br>";
echo "Area of Circle: $area";
?>