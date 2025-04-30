<?php
class Circle {
    const PI = 3.14159;

    public static function area($r) {
        return self::PI * ($r**2);
    }
}
echo "Aire d'un cercle de rayon 5 es: " . Circle::area(5);