<?php


function getAllProducts() {
    $products = [
        [
            'id' => 123,
            'title' => "Nike 1",
            'description' => "Nike 1 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14000
        ],
        [
            'id' => 124,
            'title' => "Nike 2",
            'description' => "Nike 2 namenjene sportistima i rekreativcima za sve vrste sportskih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19880
        ],
        [
            'id' => 125,
            'title' => "Nike 3",
            'description' => "Kvalitet i udobnost za svakodnevne izazove.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 12250
        ],
        [
            'id' => 126,
            'title' => "Nike 4",
            'description' => "Sportski djon prilagodnjen najsurovijim terenima.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 18000
        ],
        [
            'id' => 127,
            'title' => "Nike 5",
            'description' => "Anatomski kreiran djon koji se prilagodjava obliku Vasih stopala.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 11000
        ],
        [
            'id' => 128,
            'title' => "Nike 6",
            'description' => "Patike koje dodatno podsticu brzinu prilikom trcanja.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 12500
        ],
        [
            'id' => 129,
            'title' => "Nike 7",
            'description' => "Udobne i mekane, za Vas svakodnevni hod.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14000
        ],
        [
            'id' => 130,
            'title' => "Nike 8",
            'description' => "Kvalitet i udobnost za svakodnevne izazove.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14500
        ],
        [
            'id' => 131,
            'title' => "Nike 9",
            'description' => "Nike 9 namenjene sportistima i rekreativcima za sve vrste sportskih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 9000
        ],
        [
            'id' => 132,
            'title' => "Nike 10",
            'description' => "Nike 10 za prave sportiste.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 21000
        ],
        [
            'id' => 133,
            'title' => "Nike 11",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 134,
            'title' => "Nike 12",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 135,
            'title' => "Nike 13",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 136,
            'title' => "Nike 14",
            'description' => "Nike 1 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14000
        ],
        [
            'id' => 137,
            'title' => "Nike 15",
            'description' => "Nike 2 namenjene sportistima i rekreativcima za sve vrste sportskih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19880
        ],
        [
            'id' => 138,
            'title' => "Nike 16",
            'description' => "Kvalitet i udobnost za svakodnevne izazove.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 12250
        ],
        [
            'id' => 139,
            'title' => "Nike 17",
            'description' => "Sportski djon prilagodnjen najsurovijim terenima.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 18000
        ],
        [
            'id' => 140,
            'title' => "Nike 18",
            'description' => "Anatomski kreiran djon koji se prilagodjava obliku Vasih stopala.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 11000
        ],
        [
            'id' => 141,
            'title' => "Nike 19",
            'description' => "Patike koje dodatno podsticu brzinu prilikom trcanja.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 12500
        ],
        [
            'id' => 142,
            'title' => "Nike 20",
            'description' => "Udobne i mekane, za Vas svakodnevni hod.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14000
        ],
        [
            'id' => 143,
            'title' => "Nike 21",
            'description' => "Kvalitet i udobnost za svakodnevne izazove.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14500
        ],
        [
            'id' => 144,
            'title' => "Nike 22",
            'description' => "Nike 9 namenjene sportistima i rekreativcima za sve vrste sportskih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 9000
        ],
        [
            'id' => 145,
            'title' => "Nike 23",
            'description' => "Nike 10 za prave sportiste.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 21000
        ],
        [
            'id' => 146,
            'title' => "Nike 24",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 147,
            'title' => "Nike 25",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 148,
            'title' => "Nike 26",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 149,
            'title' => "Nike 27",
            'description' => "Nike 1 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14000
        ],
        [
            'id' => 150,
            'title' => "Nike 28",
            'description' => "Nike 2 namenjene sportistima i rekreativcima za sve vrste sportskih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19880
        ],
        [
            'id' => 151,
            'title' => "Nike 29",
            'description' => "Kvalitet i udobnost za svakodnevne izazove.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 12250
        ],
        [
            'id' => 152,
            'title' => "Nike 30",
            'description' => "Sportski djon prilagodnjen najsurovijim terenima.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 18000
        ],
        [
            'id' => 153,
            'title' => "Nike 31",
            'description' => "Anatomski kreiran djon koji se prilagodjava obliku Vasih stopala.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 11000
        ],
        [
            'id' => 154,
            'title' => "Nike 32",
            'description' => "Patike koje dodatno podsticu brzinu prilikom trcanja.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 12500
        ],
        [
            'id' => 155,
            'title' => "Nike 33",
            'description' => "Udobne i mekane, za Vas svakodnevni hod.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14000
        ],
        [
            'id' => 156,
            'title' => "Nike 34",
            'description' => "Kvalitet i udobnost za svakodnevne izazove.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 14500
        ],
        [
            'id' => 157,
            'title' => "Nike 35",
            'description' => "Nike 9 namenjene sportistima i rekreativcima za sve vrste sportskih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 9000
        ],
        [
            'id' => 158,
            'title' => "Nike 36",
            'description' => "Nike 10 za prave sportiste.",
            'available' => false,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 21000
        ],
        [
            'id' => 159,
            'title' => "Nike 37",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 160,
            'title' => "Nike 38",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ],
        [
            'id' => 161,
            'title' => "Nike 39",
            'description' => "Nike 11 za vrhunsku udobnost prilikom svakodnevnih aktivnosti.",
            'available' => true,
            'category' => "Patike",
            'img' => "./public/theme/img/news123.png",
            'brand' => "Nike",
            'price' => 19000
        ]

    ];

    return $products;
}

function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availabaleProducts[] = $product;
        }
    }
    return $availabaleProducts;
}

function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term)) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}

function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

    


function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}


