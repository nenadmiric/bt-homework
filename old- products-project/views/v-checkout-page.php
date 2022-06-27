<main>
<form action="./thanks.php" method="POST">


<!--
<div class="card-footer py-3 border-0  col-md-5" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
              </div>
            </div>
          </div>
</div>
-->





<div class="container d-flex justify-content-around">
  <div class="">
    <div class="col-12">
        <div>
            <div class="form-row">
            <div class="">
                <label for="firstname">Your name:</label><br>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" required>
                </div><br>
                <div class="">
                <label for="lastname">Your last name:</label><br>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email_user" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                <label for="inputPhone">Phone</label>
                <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="phone" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" required>
                </div>
                <div class="form-group">
                <label for="inputState">State</label>
                <select id="inputState" name="state" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group">
                <label for="inputZip">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip" required>
                </div>
        </div>
            <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Do you agree with the terms of purchase?
                    </label>
                    </div>
            </div>
            <input class="btn btn-success" type="submit" value="Buy now">
    </div>
    </div>
    </div>
    <div class="col-5">
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
            </div>
        </div>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Choose the quantity:</label>
  </div>
  <select class="custom-select" name="quantity" id="inputGroupSelect01">
    <option selected>Quantity</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>
<div>
    <label>Total price: </label>
</div>

    </div>
  </div>
</div>

</form>


</main>