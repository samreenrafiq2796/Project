<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header.php") ?>
    <div class="container">


     <!-- Hero Section -->
     <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">About Us</h1>
            <p class="lead">Learn more about our mission, values, and the team behind it.</p>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
    <?php
        $fetch = mysqli_query($con,"SELECT * FROM db_about order by `RecordInsertionTime` desc limit 5");
        while($d = mysqli_fetch_array($fetch)){?>
                <div class="col-lg-4">
                    <h2 class="mb-4"><?php echo $d[1]?></h2>
                    <p><?php echo $d[2]?></p>

                </div>
    <?php    }
    ?>

  
              
                
            </div>
        </div>
    </section>

    <!-- Team Section -->
   
    
    </section>
   <?php
    include("footer.php") ?>

</body>
</html>