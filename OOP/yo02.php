<?php
interface ShapeInterface {
    public function getArea();
}

abstract class Shape implements ShapeInterface {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function describe() {
        echo "Ceci est une forme appelee: " . $this->name . PHP_EOL;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea() {
        
    }

}