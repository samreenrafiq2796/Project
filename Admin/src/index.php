<?php
include('header.php');
?> 
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-3">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white mr-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.php -->
    <?php
    include('_navbar.php');
    ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <?php
        include('_sidebar.php');
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Category <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">
                      <?php 
                        $a = mysqli_query($con,"SELECT * FROM `category`");
                         echo mysqli_num_rows($a);
                      
                      ?>
                    </h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Brands <i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">
                    <?php 
                        $a = mysqli_query($con,"SELECT * FROM `brand`");
                         echo mysqli_num_rows($a);
                      
                      ?>
                    </h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Contact<i class="mdi mdi-diamond mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">
                    <?php 
                        $a = mysqli_query($con,"SELECT * FROM `tbl_contact`");
                         echo mysqli_num_rows($a);
                      
                      ?>
                    </h2>
                  
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Product<i class="mdi mdi-diamond mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">
                    <?php 
                        $a = mysqli_query($con,"SELECT * FROM `tbl_product`");
                         echo mysqli_num_rows($a);
                      
                      ?>
                    </h2>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
             <div class="col-md-12">
             <div class="container-fluid my-3">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Delete</th>

                            
                        </tr>
                    </thead>
          
                <?php
                $run_Query = mysqli_query($con, "SELECT * FROM `tbl_product` ORDER BY `TimeOfRecord` DESC limit 3");
                if (mysqli_num_rows($run_Query) ==0 ) {?>
                    <tr>
                        <td colspan="9">No Data Found</td>
                    </tr>
               <?php } else {
                 while($fetch =mysqli_fetch_array($run_Query)){?>
                    <tr>
                        <td><?php echo $fetch['0']?></td>
                        <td><?php echo $fetch['1']?></td>
                        <td class="text-wrap"><?php echo $fetch['5']?></td>
                        <td class="text-wrap"><?php echo $fetch['2']?></td>
                        <td><img src="../<?php echo $fetch['6']?>" alt=""></td>

                        <td><a href="DeleteLogics/deleteproduct.php?a=<?php echo $fetch['0']?>"><i class="fa fa-trash text-danger"></i></a></td>
                    </tr>

                 <?php }
                }
                
                
                ?>

                </table>
            </div>
             </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Assignee </th>
                            <th> Subject </th>
                            <th> Status </th>
                            <th> Last Update </th>
                            <th> Tracking ID </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                            </td>
                            <td> Fund is not recieved </td>
                            <td>
                              <label class="badge badge-gradient-success">DONE</label>
                            </td>
                            <td> Dec 5, 2017 </td>
                            <td> WD-12345 </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                            </td>
                            <td> High loading time </td>
                            <td>
                              <label class="badge badge-gradient-warning">PROGRESS</label>
                            </td>
                            <td> Dec 12, 2017 </td>
                            <td> WD-12346 </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                            </td>
                            <td> Website down for one week </td>
                            <td>
                              <label class="badge badge-gradient-info">ON HOLD</label>
                            </td>
                            <td> Dec 16, 2017 </td>
                            <td> WD-12347 </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                            </td>
                            <td> Loosing control on server </td>
                            <td>
                              <label class="badge badge-gradient-danger">REJECTED</label>
                            </td>
                            <td> Dec 3, 2017 </td>
                            <td> WD-12348 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          <!-- content-wrapper ends -->
          <?php
        include('footer.php');
        ?>