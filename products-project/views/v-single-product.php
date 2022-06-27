<main class="mt-5">
    <div class="container">
        <h1 class="card-title mb-4 text-center text-warning"><?php echo htmlspecialchars($product->title); ?></h1>
        <div class="row">
            <div class="col-7 mb-5">
                <img src="<?php echo htmlspecialchars($product->img); ?>" class="card-img-top rounded border border-primary" alt="...">
            </div>
            <div class="col-5">
                <p><?php echo htmlspecialchars($product->description); ?></p>
                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary">PRICE:</span>
                        </div>
                        <input name="price" disabled type="text" class="form-control" value="<?php echo htmlspecialchars($product->price); ?>" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary">$</span>
                        </div>
                    </div>
                </div>
                <form method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning">QUANTITY:</span>
                        </div>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="quantity" value="1">
                        <div class="input-group-append">
                            <span class="input-group-text bg-warning">QTY</span>
                        </div>
                    </div>
                    <?php if(!empty($systemErrors['quantity'])) { ?>
                    <div class="error-msg text-danger">
                        <?php echo htmlspecialchars($systemErrors['quantity']) ?>
                    </div>
                    <?php } ?>
                    <input hidden name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                    <button type="submit" class="btn btn-outline-success">Add to Cart</button>
                </form>
                <div class="d-flex justify-content-around mt-5">
                    <a class="btn btn" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->getPrevProductId()); ?>"><img src="./public/theme/img/prev.png" alt="PREV" width="45px"></a>
                    <a class="btn btn" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->getNextProductId()); ?>"><img src="./public/theme/img/next.png" alt="NEXT" width="45px"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($relatedProducts as $singleRelated) { ?>
                <article class="single-product col-4 row mb-5 text-center">
                    <div class='col-4'>
                        <img src="<?php echo htmlspecialchars($singleRelated->img); ?>" alt="" width="100" height="100">
                    </div>
                    <div class='col-8'>
                        <h5><?php echo htmlspecialchars($singleRelated->title); ?></h5>
                        <p>PRICE: <?php echo htmlspecialchars($singleRelated->price); ?> $</p>
                        <a class="btn btn-primary" href="./single-product-page.php?product=<?php echo htmlspecialchars($singleRelated->id); ?>">Show Product</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</main>