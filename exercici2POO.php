<?php

class Shape {
    protected $amplada;
    protected $alcada;

    
    public function __construct($amplada, $alcada) {
        $this->amplada = $amplada;
        $this->alcada = $alcada;
    }

    public function area() {
        return 0;
    }
}

class Triangle extends Shape {
    public function area() {
        return 0.5 * $this->amplada * $this->alcada;
    }
}

class Rectangle extends Shape {
    public function area() {
        return $this->amplada * $this->alcada;
    }
}

$triangle = new Triangle(3, 6);
$rectangle = new Rectangle(10, 15);

echo "Area del Triangle: " . $triangle->area() . "<br>";
echo "Area del Rectangle: " . $rectangle->area() . "<br>";


?>
