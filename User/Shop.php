<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container">
        <div class="container">
            <form action="" method="get">
            <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="searchtxt" placeholder="Enter Name of Product" class="form-select">
                    </div>
                    <div class="col-md-3">
                        <select name="category" class="form-select">
                            <option value="">Select Category</option>
                            <?php 
                                $fetch_categopry = "SELECT * FROM `category` ORDER BY `Record Insertion Time` Desc";
                                $run_category = mysqli_query($con, $fetch_categopry);
                                while($a = mysqli_fetch_array($run_category)){ ?>
                                    <option value="<?php $a[0] ?>"><?php echo $a[1] ?></option>
                              <?php  }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="Brand" class="form-select">
                            <option value="">Select Brand</option>
                            <?php 
                                $fetch_brand = "SELECT * FROM `brand` ORDER BY `Record Insertion Time` desc";
                                $run_brand = mysqli_query($con, $fetch_brand);
                                while($a = mysqli_fetch_array($run_brand)){ ?>
                                    <option value="<?php $a[0] ?>"><?php echo $a[1] ?></option>
                              <?php  }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                    <select name="option" class="form-select">
                            <option value="">Sort Filter</option>
                            <option value="a">Price low to high</option>
                            <option value="b">Price High to Low</option>
                            <option value="c">Ascending</option>
                            <option value="d">Descending</option>
                        </select>
                    </div>
                    <div style="margin: auto;">
                        <input type="submit" class="mt-2 btn btn-primary"  name="btn "value="Search" style="width: 200px; height:50px"/>
                    </div> 
            </div>
            </form>
        </div>

            <?php
                if(isset($_GET["btn"])){
                   
                }
                else{ ?>
 <div class="mt-3 row">
            <?php
            $fetch_quey = "select * from tbl_product order by timeofrecord desc";
            $run = mysqli_query($con, $fetch_quey);
            if (mysqli_num_rows($run) != 0) {
                while ($a = mysqli_fetch_array($run)) { ?>
                    <div class="col-md-3">
                        <div class="mx-2 card" style="width: 18rem;">
                            <img src="<?php echo $a[6]?>" class="card-img-top" alt="..." height="250">
                            <div class="card-body">
                                <a href="productdetail.php?id=<?php echo $a[0]?>" class="h5 card-title fw-bold">
                                    <?php echo $a[1] ?>
                                 </a>
                                <p class="card-text text-primary text-end">Rs <?php echo $a[2] ?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php  }
            } else { ?>
                <div class="alert alert-danger" role="alert">
                    No Product Found
                </div>
            <?php   }
            ?>
        </div>
    </div>

            <?php    }
            ?>


       

    <?php include("footer.php"); ?>

</body>

</html>