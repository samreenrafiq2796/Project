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
        <div class="row">
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


    <?php include("footer.php"); ?>

</body>

</html>