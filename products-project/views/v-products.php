<main>
    <div class="container">
        <form class="row" action="./all-products-page.php" method="get">
            <select name="sortby" id="sort" class="col-3">
                <option value="">None</option>
                <option value="price-asc">Sort by price ascending</option>
                <option value="price-desc">Sort by price descending</option>
            </select>
            <input class="col-7" type="text" name="filter">
            <button type="submit" class="btn btn-warning col-2">Search</button>
        </form>
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <article class="single-product col-4 row mt-3 mb-5">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="" width="100" height="100">
                </div>
                <div class='col-6 mt-5'>
                    <span><strong>Price: </strong><?php echo htmlspecialchars($product['price']); ?></span>
                </div>
                <div class='col-6'>
                    <span class="d-block p-2 bg-primary text-white">Patike <?php echo htmlspecialchars($product['title']); ?></span>
                </div>
                <div class='col-6'>
                    <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show products</a>
                </div>
                
            </article>
            <?php } ?>
        </div>
    </div>
</main>