<?php

$products =  [
    [
        'id' => 125,
        'title' => "Shoes1",
        'description' => "text text text",
        'available' => 0,
        'price' => 3500,
        'category' => 1,
        'img' => "./public/theme/img/shoes1.png"
    ],
    [
        'id' => 126,
        'title' => "Shoes2",
        'description' => "text text text",
        'available' => true,
        'price' => 1588,
        'category' => 88,
        'img' => "./public/theme/img/shoes2.png"
    ],
    [
        'id' => 127,
        'title' => "Shoes3",
        'description' => "text text text",
        'available' => 0,
        'price' => 9000,
        'category' => 1,
        'img' => "./public/theme/img/shoes3.png"
    ],
    [
        'id' => 128,
        'title' => "Shoes4",
        'description' => "text text text",
        'available' => true,
        'price' => 1368,
        'category' => 1,
        'img' => "./public/theme/img/shoes4.png"
    ],
    [
        'id' => 129,
        'title' => "Shoes5",
        'description' => "text text text",
        'available' => true,
        'price' => 1500,
        'category' => 4,
        'img' => "./public/theme/img/shoes5.png"
    ],
    [
        'id' => 130,
        'title' => "Shoes6",
        'description' => "text text text",
        'available' => 0,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes6.png"
    ],
    [
        'id' => 131,
        'title' => "Shoes7",
        'description' => "text text text",
        'available' => true,
        'price' => 400,
        'category' => 1,
        'img' => "./public/theme/img/shoes7.png"
    ],
    [
        'id' => 132,
        'title' => "Shoes8",
        'description' => "text text text",
        'available' => 0,
        'price' => 500,
        'category' => 1,
        'img' => "./public/theme/img/shoes8.png"
    ],
    [
        'id' => 133,
        'title' => "Shoes9",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes9.png"
    ],
    [
        'id' => 400,
        'title' => "Shoes10",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes10.png"
    ],
    [
        'id' => 401,
        'title' => "Shoes11",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes11.png"
    ],
    [
        'id' => 402,
        'title' => "Shoes12",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes12.png"
    ],
    [
        'id' => 403,
        'title' => "Shoes13",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes13.png"
    ],
    [
        'id' => 404,
        'title' => "Shoes14",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes14.png"
    ],
    [
        'id' => 405,
        'title' => "Shoes15",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes15.png"
    ],
    [
        'id' => 406,
        'title' => "Shoes16",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes16.png"
    ],
    [
        'id' => 407,
        'title' => "Shoes17",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes17.png"
    ],
    [
        'id' => 408,
        'title' => "Shoes18",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes18.png"
    ],
    [
        'id' => 409,
        'title' => "Shoes19",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes19.png"
    ],
    [
        'id' => 450,
        'title' => "Shoes20",
        'description' => "text text text",
        'available' => true,
        'price' => 368,
        'category' => 1,
        'img' => "./public/theme/img/shoes20.png"
    ]
];

/* * * mysql hostname ** */
$hostname = "localhost";
/* * * mysql username ** */
$username = "root";
/* * * mysql password ** */
$password = "";
/* * * mysql database name ** */
$database = "shop-bt";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($products as $product) {
        $sqlQueryString = "INSERT INTO ec_products (title, description, price, stock, img, status, barcode, category)"
                        . " VALUES (" . ":title" . ", " . ":description" . ", " . ":price" . ", " . ":stock" . ", " . ":img" . ", "
                        . ":status" . ", " . ":barcode" . ")";
        $statement = $connection->prepare($sqlQueryString);
        $params = [
            'title' => $product["title"],
            'description' => $product["description"],
            'price' => $product["price"],
            'stock' => rand(1, 10),
            'img' => $product["img"],
            'status' => $product["available"],
            'barcode' => $product["id"],
            'category' => $category["category"],
        ];
        $status = $statement->execute($params);
    }
} catch (PDOException $exception) {
    echo "Something went wrong: " . $exception->getMessage() . "<br>";
}
