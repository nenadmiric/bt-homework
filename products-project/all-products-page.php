<?php

require_once __DIR__ . "/models/products-model.php";

$filter = "";
$sort = "";

if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}

$products = getAvailableProducts();

if($filter != "") {
    $products = filteredProducts($products, $filter);
}


 

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





require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";