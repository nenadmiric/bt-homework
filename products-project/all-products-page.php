<?php
session_start();
// PAGE TITLE
$page = "all-products-page";

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}
// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use Models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

try {
    // GET PRODUCTS
    $products = Product::getAvailableProducts($pagPage);

    // TERM AND SORT
    $term = "";
    $sort = "";
    if (!empty($_GET['term'])) {
        $term = $_GET['term'];
    }
    if (!empty($_GET['sort'])) {
        $sort = $_GET['sort'];
    }
    if ($term != "") {
        $products = Product::filteredProducts($term, $products);
    }
    if ($sort != "") {
        $products = Product::sortProductBy($sort, $products);
    }

    $sortby = "";
   
    
    
    if(!empty($_GET['sortby'])) {
        $sortby = $_GET['sortby'];
    }
    
    
    if($sortby == "price-desc") {
        $price = array_column($products, 'price');
    array_multisort($price, SORT_DESC, $products);
    } else {
        $price = array_column($products, 'price');
        array_multisort($price, SORT_ASC, $products);
    }




 

    













    // SHOPPING CART (SESSION)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $shoppingCart = new ShoppingCart($_SESSION['cart']);
    if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
        $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']));
        $shoppingCart->updateSession();
    }
} catch (\Throwable $th) {
    header("Location: ./");
}
// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-products.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
