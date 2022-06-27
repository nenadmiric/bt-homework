<main class="mt-5">
    <div class="container">
        <form class="row" action="./all-products-page.php" method="GET">
            <div class="col-2">
            <select name="sortby" id="sort" class="col-15 rounded">
                <option value="">None</option>
                <option value="price-asc">Sort by price ascending</option>
                <option value="price-desc">Sort by price descending</option>
            </select>
            <!--
            <select name="sort" class="form-select">
                    
            
                        
                    <option <?php
                           // if ($sort == "") {
                               // echo htmlspecialchars("Selected");
                           // } ?> value="">None</option>
                    <option <?php// if ($sort == $sortOptions['asc']) {
                            //} ?> value="<?php //echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_ASC); ?>">By price asc</option>
                    <option <?php //if ($sort == $sortOptions['desc']) {
                                //echo htmlspecialchars("Selected");
                           // }// ?> value="<?php// echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_DESC); ?>">By price desc</option>
                
            </select>-->
            </div>
            <div class="col-2"></div>
            <input class="col-5 rounded m-2" type="text" name="term" value="<?php echo htmlspecialchars($term); ?>">
            <button type="submit" class="btn btn-success col-2 m-2">Search</button>
            
        </form>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <article class="single-product col-4 row mb-5">
                    <div class='col-12 text-center'>
                        <img src="<?php echo htmlspecialchars($product->img); ?>" alt="" width="350" height="350" class="rounded border border-primary mt-4">
                    </div>
                    <div class='col-12 text-center'>
                        <h6><?php echo htmlspecialchars($product->title); ?></h6>
                        <p>PRICE: <?php echo htmlspecialchars($product->price); ?> $</p>
                        <a class="btn btn-primary" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id) ?>">Show Product</a>
                        <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn btn-warning"><img src="././public/theme/img/shoppingcart.png" width="21px" alt=""></button>
                        <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./all-products-page.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                        </form>
                    </div>
                </article>
            <?php } ?>
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>