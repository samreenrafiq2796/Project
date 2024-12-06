<?php
include('header.php');
?> 
 <?php
    include('_navbar.php');
    ?>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <?php
        include('_sidebar.php');
        ?>
         <!-- partial -->
         <div class="main-panel">
          <div class="content-wrapper">

          <div class="container mt-5">
        <h2>Product Information Form</h2>
        <!-- 2 -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Name -->
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="productName" placeholder="Enter product name" required>
            </div>

            <!-- Rating -->
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <select class="form-select" name="rating" required>
                    <option value="" disabled selected>Select rating</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>

            <!-- Quantity -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" placeholder="Enter quantity" required min="1">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter price" required min="1">
            </div>
            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter product description" required></textarea>
            </div>

            <!-- Brand -->
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <select name="brand" id="" class="form-select">
                  <option value="">Brand will show here</option>
                  <?php
                      $fetch=mysqli_query($con,"SELECT * FROM `brand`")  ;
                       while($record = mysqli_fetch_array($fetch) ){
                          echo" <option value='$record[0]'>$record[1]</option>";
                       }               
                  ?>
                </select>
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="" class="form-select">
                  <option value="">Category will show here</option>
                  <?php
                      $fetch=mysqli_query($con,"SELECT * FROM `category`")  ;
                       while($record = mysqli_fetch_array($fetch) ){
                          echo" <option value='$record[0]'>$record[1]</option>";
                       }               
                  ?>
                </select>
            </div>
            <!-- 1 -->
            <div class="mb-3">
                <label for="brand" class="form-label">Select Image</label>
                       <input type="file" name="proimage" id="" accept="image/*">
            </div>
            <!-- Submit Button -->
            <button type="submit" name="b" class="btn btn-primary">Submit</button>
        </form>
    </div>

          </div>
 </div>
 </div>

 <?php
    if(isset($_POST["b"])){
        $a = $_POST["productName"];
        $b = $_POST["rating"];
        $c = $_POST["description"];
        $d = $_POST["brand"];
        $e = $_POST["category"];
        $f = $_POST["price"];
        $g = $_POST["quantity"];
        // 3
        $image_name = $_FILES["proimage"]["name"];
        $temp_location = $_FILES["proimage"]["tmp_name"];
        $folder_add = "../ProductImage/" . $image_name;
        $folder_add2 = "../../ProductImage/" . $image_name;

// 4
        $query = "INSERT INTO `tbl_product`
        (`Name`, `Price`, `rating`, `quantity`, `description`, `Brandid`, `CategoryId`,`image`) 
        VALUES ('$a','$f','$b','$g','$c','$d','$e','$folder_add')";

        if (mysqli_query($con, $query)) {
            // 5
            move_uploaded_file($temp_location,$folder_add2);
            ?>
            <script>
              alert("Product Added Successfully");
            </script>
  <?php      }

    }
?>

 <?php
        // include('footer.php');
        ?>