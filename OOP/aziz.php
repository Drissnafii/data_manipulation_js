<?php 

class Product {
    private string $reference;
    private string $name;
    private float $price;

    public function __construct(string $reference, string $name, float $price) {
        $this->reference = $reference;
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): float {
        return $this->price;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getReference(): string {
        return $this->reference;
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
    
    public function getProducts(): array {
        return $this->products;
    }
    
    public function getTotalPrice(): float {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}

class User {
    private string $name;
    private string $email;
    private array $orders = [];
    private array $products = [];

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function addOrder(Order $order) {
        $this->orders[] = $order;
    }
    
    public function addProduct(Product $product) {
        $this->products[] = $product;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getEmail(): string {
        return $this->email;
    }
    
    public function getOrders(): array {
        return $this->orders;
    }
    
    public function getTotalProductPrice(): float {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
}

class Cart {
    private User $user;
    private array $products = [];

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotalPrice(): float {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
    
    public function getUser(): User {
        return $this->user;
    }
    
    public function getProducts(): array {
        return $this->products;
    }
}

// Create user
$user = new User("Driss", "Drissnafi3@gmail.com");

// Create products
$product01 = new Product("1119", "Iphone 13 Pro", 6000);
$product02 = new Product("3242", "Laptop", 4000);
$product03 = new Product("3442", "Phone", 4080);
$product04 = new Product("9742", "Samsung", 4200);
$product05 = new Product("0872", "GWT", 1000);
$product06 = new Product("3222", "BMW", 1200);
$product07 = new Product("320l2", "OOO", 900);

// Create order and add it to user
$order = new Order($user);
$order->addProduct($product01);
$order->addProduct($product02);
$user->addOrder($order);

// Create cart for user
$cart = new Cart($user);
$cart->addProduct($product03);
$cart->addProduct($product04);

// Print some information
echo "User: " . $user->getName() . "\n";
echo "Order total: $" . $order->getTotalPrice() . "\n";
echo "Cart total: $" . $cart->getTotalPrice() . "\n";
