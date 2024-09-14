<?php
class Circle {
    private $radius;

    //Constructor to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }
    //Calculate the area of the circle
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle {
    private $width;
    private $height;

    // Constructor to initialize the width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    //Calculate the area of the rectangle
    public function getArea() {
        return $this->width * $this->height;
    }
}


//Circle and Rectangle object
$circle = new Circle(10);
$rectangle = new Rectangle(5, 10);

//Printing
echo "Area of the circle: " . $circle->getArea() . "\n";
echo "Area of the rectangle: " . $rectangle->getArea() . "\n";

?>
