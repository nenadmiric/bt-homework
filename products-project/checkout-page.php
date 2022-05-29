<?php

require_once __DIR__ . "/models/products-model.php";


if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
}

$product = getOneProductById($productId);



// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-checkout-page.php";



// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";