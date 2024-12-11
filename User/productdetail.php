<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .product-image {
      max-width: 100%;
      height: auto;
    }
    .product-price {
      font-size: 24px;
      color: #28a745;
    }
    .product-description {
      margin-top: 20px;
    }
    .review-section {
      margin-top: 40px;
    }
    .review {
      border-bottom: 1px solid #ddd;
      padding-bottom: 15px;
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
    <?php include("header.php");
    if (!isset($_GET["id"])) { ?>
        <script>
            window.location.href="shop.php";
        </script>
<?php    } 
    $a = $_GET["id"];
    $fetch_query = "select * from tbl_product where id = $a";
    $runquery = mysqli_query($con, $fetch_query);
    $my_data = mysqli_fetch_array($runquery);

    $fetch_brand_name = mysqli_fetch_array(
        mysqli_query($con , "select * from brand where id = $my_data[7]")
    );

    $fetch_category_name = mysqli_fetch_array(
        mysqli_query($con,"select * from category where id = $my_data[8]")
    );

?>

    <div class="container">
    <div class="container my-5">
    <div class="row">
      
      <div class="col-md-6">
        <img src="<?php echo $my_data[6] ?>" alt="Product Image" class="product-image img-fluid">
      </div>
      
      <!-- Product Info -->
      <div class="col-md-6">
        <h6><?php echo $my_data[1] ?></h6>
        <p class="product-price">Rs <?php echo $my_data[2] ?></p>
        <p class="text-warning text-end"><?php echo $my_data[3] ?> Stars</p>
        <p class="product-description">
        <?php echo $my_data[5] ?>
        </p>

        <p class="product-description">
            Brand 
            <b>
        <?php echo $fetch_brand_name[1] ?>
        </b>
        Category
        <b>
        <?php echo $fetch_category_name[1] ?>
        </b>
        </p>
        <form action="">
            <input type="number" class="form-control" 
            placeholder="Enter Quantity" min="1" max="10">
        <button class="my-3 btn btn-primary">Add to Cart</button>
        </form>
      </div>
    </div>

    <!-- Reviews Section -->
    <div class="review-section">
      <h3>Customer Reviews</h3>

      <div class="review">
        <h5>John Doe</h5>
        <p>⭐⭐⭐⭐⭐</p>
        <p>The product is amazing! It exceeded my expectations, and I would definitely recommend it to others.</p>
      </div>

      <div class="review">
        <h5>Jane Smith</h5>
        <p>⭐⭐⭐⭐</p>
        <p>Very good quality and performance. A bit pricier than expected, but still worth the buy!</p>
      </div>

      <div class="review">
        <h5>Michael Lee</h5>
        <p>⭐⭐⭐⭐⭐</p>
        <p>Excellent product! I use it every day and it works perfectly.</p>
      </div>
      
      <!-- Add Review Section -->
      <h4>Add a Review</h4>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="rating" class="form-label">Rating</label>
          <select class="form-select" id="rating" required>
            <option value="5">⭐⭐⭐⭐⭐</option>
            <option value="4">⭐⭐⭐⭐</option>
            <option value="3">⭐⭐⭐</option>
            <option value="2">⭐⭐</option>
            <option value="1">⭐</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="review" class="form-label">Review</label>
          <textarea class="form-control" id="review" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit Review</button>
      </form>
    </div>
  </div>

    </div>


    <?php include("footer.php"); ?>

</body>

</html>