<?php
session_start();

if(!isset $_SESSION['cartItems']) {
    $_SESSION['cartItems']=0;
}

if(!empty $_SESSION['cartItems']) {
    echo count($_SESSION['cartItems']);
} else {
    echo 0;
}

class Product {
    public $barcode;
    public $title;
    public $price;

    public function __construct($barcode,$title,$price) {
        $this->barcode=$barcode; 
        $this->title=$title; 
        $this->price=$price;
    }

    public function getBarcode() {
        return $this->barcode;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }
}

class ShoppingCartItem extends Product {
    public Product $product;
    public $quantity;

    public function setProduct(Product $product) {
        $this->product=$product; 
    }

    public function setQuantity($quantity) {
        $this->quantity=$quantity; 
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

class ShoppingCart {
    public $cartItems = [];  

    public function setCartItems($cartItems) {
        $this->cartItems=$cartItems; 
    }
    
    public function getCartItems() {
        return $this->cartItems;
    }

    public function addToCart($product) {
        if ($product instanceof Product) {
            $this->cartItems[]=$product;

            foreach ($this->cartItems as $item) {
                if($product == $item) {
                $item->quantity+1;
                } 
            }    
        }
                 
    } 



    public function listAllItems() {
        $cartItems = [];
        if(isset $_SESSION['cartItems']) && !empty($_SESSION['cartItems']) {
            if(is_array($_SESSION['cartItems'])) {
                foreach ($_SESSION['cartItems'] as $product) {
                    $cartItems = getProduct($product);
                }
            }
        } return $cartItems;
    }

    $items=listAllItems();

    public function removeItems() {
        
        if(!empty($_SESSION['cartItems'])) {
            foreach (($_SESSION['cartItems'] as $key=>$item) {
                if($item==$product) {
                    unset($_SESSION['cartItems'][$key]);
                }
            }
        }
    }
}





$product1 = new Product(101, 'trenerica', 3500);
$product2 = new Product(102, 'patike', 7500);
$product3 = new Product(103, 'duks', 5500);
$product4 = new Product(104, 'cipele', 12000);
$product5 = new Product(105, 'kosulja', 2500);


?>