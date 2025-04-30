<?php 

class User {
    private string $name;
    private string $email;
    private array $order = [];

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function addOrders(Order $order) {
        $this->order[] = $order;
    }

    public function getTotalProduct(Product $product) {
        $price = 0;
        foreach ($this->products as $product) {
            
        }
    }
}

class Order {
    private User $user;
    private array $products = [];


    public function __construct(User $user) {
        $this->user = $user;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }
}


class Product {
    private string $reference;
    private string $name;
    private float $price;

    public function __construct($reference, $name, $price) {
        $this->reference = $reference;
        $this->name = $name;
        $this->price = $price;
    }
}


$user = new User("Driss", "Drissnafi3@gmail.com");


$product01 = new Product("1119", "Iphone 13 Pro", "6000");
$product02 = new Product("3242", "Laptop", "4000");
$product03 = new Product("3442", "phone", "4080");
$product04 = new Product("9742", "samsung", "4200");
$product05 = new Product("0872", "gwt", "1000");
$product06 = new Product("3222", "BMW", "1200");
$product07 = new Product("320l2", "ooo", "900");

$order = new Order($user);
$user->addOrders($order);
