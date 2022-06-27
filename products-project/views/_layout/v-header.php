<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <title>Shop</title>
</head>
<body>

    <header>
        
        <nav class="navbar navbar-expand-lg bg-primary text-light">
            <div class="container">
                <a class="navbar-brand text-light" href="././index.php"><img src="././public/theme/img/logo.png" alt="logo" width="160px" class="rounded"></a>
                <div class="d-flex">
                    <ul class="navbar-nav h4">
                        <li class="nav-item">
                            <a class="
                                nav-link border border-primary rounded-4 bg-white border border-5
                                <?php if($page == 'index') {
                                echo htmlspecialchars('active');
                                } ?>
                                " href="./">Home</a>
                        </li>
                        <li class="nav-item border border-primary rounded-4 bg-white border border-5">
                            <a class="
                                nav-link
                                <?php if($page == 'all-products-page') {
                                echo htmlspecialchars('active');
                                } ?>
                                " 
                                href="./all-products-page.php"
                                >
                                Products
                            </a>
                        </li>
                        <li class="nav-item border border-primary rounded-4 bg-white border border-5">
                            <a class="nav-link" href="./about-us-page.php">About Us</a>
                        </li>
                        <li class="nav-item border border-primary rounded-4 bg-white border border-5">
                            <a class="nav-link" href="./contact-us-page.php">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
                <div>
                <div class="nav-item ">
                            <a class="nav-link text-dark text-center border border-info rounded bg-warning col-14 mt-1 mb-1" href="./login-page.php">Login</a>
                            </div>
                            <div class="nav-item">
                            <a class="nav-link text-dark text-center border border-info rounded bg-warning col-14 mb-1" href="./reg-index.php">Register</a>
                            </div>
                    <div>
                    <a class="nav-link position-relative bg-success rounded col-14 text-center mb-1" href="./shopping-cart-page.php">
                          Shopping cart <img src="././public/theme/img/sh-cart.png" alt="sh-cart" width="40px">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php 
                            if(!empty($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo 0;
                            }
                            ?>
                            </div>
                        </span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    