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
    <?php
                $run_Query = mysqli_query($con, "SELECT * FROM `db_privacypolicy` ORDER BY `Record Insertion Time` DESC");
                if (mysqli_num_rows($run_Query) ==0 ) {?>
                    <p>No Record Found</p>
               <?php } else {
                 while($fetch =mysqli_fetch_array($run_Query)){?>
                        <li class="fw-bold"><?php echo $fetch[1]; ?></li>
                        <hr>



    <?php }}
    echo "</div>";
    include("footer.php") ?>

</body>
</html>