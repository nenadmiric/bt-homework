<main>
    <div class="container">
        
        <div class="d-flex justify-content-around mb-5 d-inline p-2 bg-primary text-white rounded">
            <div class="col-4">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top rounded" alt="...">
            </div>
            <div>
                <h1 class="card-title mb-4"><?php echo htmlspecialchars($product['title']); ?></h1>
                <div class='col-3 bg-warning rounded mb-4'>
                    <span><strong>Price: </strong><?php echo htmlspecialchars($product['price']); ?></span>
                </div>
                <div class='col-6 mb-4'>
                    <span><strong>Brand: </strong><?php echo htmlspecialchars($product['brand']); ?></span>
                </div>
                <div class='col-6 mb-4'>
                    <span><strong>Category: </strong><?php echo htmlspecialchars($product['category']); ?></span>
                </div>
                <div class="col-7 mb-4">
                    <p><?php echo htmlspecialchars($product['description']); ?></p>
                </div>
                <div class='col-6'>
                    <a class="btn btn-success" href="./checkout-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Buy now</a>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

        <div>

        </div>

        <div class="row">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-4 row mb-4">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="100" height="100">
                </div>
                <div class='col-6'>
                    <span><?php echo htmlspecialchars($singleRelated['title']); ?></span>
                    <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>