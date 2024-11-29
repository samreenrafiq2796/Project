<?php
  include "../connection.php";
  $fetch_Data= mysqli_query($con,"SELECT * FROM `db_websiteinfo` order by id desc limit 1");
  $row = mysqli_fetch_array($fetch_Data);

?>
<footer id="footer" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <h1><?php echo $row[1]; ?></h1>
                  <p><?php echo $row[5]; ?></p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <a href=" <?php echo $row[6]; ?>" target="_blank">
                          <svg class="facebook">
                            <use xlink:href="#facebook" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href=" <?php echo $row[7]; ?>"target="_blank">
                          <svg class="instagram">
                            <use xlink:href="#instagram" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href=" <?php echo $row[8]; ?>"target="_blank">
                          <svg class="twitter">
                            <use xlink:href="#twitter" />
                          </svg>
                        </a>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu text-capitalize">
                  <h5 class="widget-title pb-2">Quick Links</h5>
                  <ul class="menu-list list-unstyled text-capitalize">
                    <li class="menu-item mb-1">
                      <a href="#">Home</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="About.php">About</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="#">Shop</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="#">Blogs</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="contact.php">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu text-capitalize">
                  <h5 class="widget-title pb-2">Help & Info Help</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item mb-1">
                      <a href="#">Track Your Order</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="privacypolicy.php">Privacy Policies</a>
                    </li>
                  
                    <li class="menu-item mb-1">
                      <a href="#">Contact Us</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="faq.php">Faqs</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-capitalize pb-2">Contact Us</h5>
                  <p>Do you have any queries or suggestions? <a href="mailto:<?php echo $row[2]; ?>"
                      class="text-decoration-underline"><?php echo $row[2]; ?></a></p>
                  <p>If you need support? Just give us a call. <a href="tel: <?php echo $row[3]; ?>" class="text-decoration-underline">
                    <?php echo $row[3]; ?></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <hr>
    <div id="footer-bottom" class="mb-2">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
            <div class="shipping d-flex">
              <p>We ship with:</p>
              <div class="card-wrap ps-2">
                <img src="images/dhl.png" alt="visa">
                <img src="images/shippingcard.png" alt="mastercard">
              </div>
            </div>
            <div class="payment-method d-flex">
              <p>Payment options:</p>
              <div class="card-wrap ps-2">
                <img src="images/visa.jpg" alt="visa">
                <img src="images/mastercard.jpg" alt="mastercard">
                <img src="images/paypal.jpg" alt="paypal">
              </div>
            </div>
          </div>
          <div class="copyright">
            <p>© Copyright 2024 Bookly. HTML Template by <a href="https://templatesjungle.com/"
                target="_blank">TemplatesJungle</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>