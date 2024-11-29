<?php
  include("../connection.php")
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bookly - Bookstore eCommerce Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  </head>

  <body>
    
  <header id="header" class="site-header">

<div class="top-info border-bottom d-none d-md-block ">
  <div class="container-fluid">
    <div class="row g-0">
      <div class="col-md-4">
        <p class="fs-6 my-2 text-center">Need any help? Call us <a href="#">112233344455</a></p>
      </div>
      <div class="col-md-4 border-start border-end">
        <p class="fs-6 my-2 text-center">Summer sale discount off 60% off! <a class="text-decoration-underline"
            href="index.html">Shop Now</a></p>
      </div>
      <div class="col-md-4">
        <p class="fs-6 my-2 text-center">2-3 business days delivery & free returns</p>
      </div>
    </div>
  </div>
</div>

<nav id="header-nav" class="navbar navbar-expand-lg py-3">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="images/main-logo.png" class="logo">
    </a>
    <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <svg class="navbar-icon">
        <use xlink:href="#navbar-icon"></use>
      </svg>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
      <div class="offcanvas-header px-4 pb-0">
        <a class="navbar-brand" href="index.html">
          <img src="images/main-logo.png" class="logo">
        </a>
        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"
          data-bs-target="#bdNavbar"></button>
      </div>
      <div class="offcanvas-body">
        <ul id="navbar"
          class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
          <li class="nav-item">
            <a class="nav-link me-4 active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" href="index.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" href="index.html">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" href="index.html">Blogs</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
              aria-expanded="false">Pages</a>
            <ul class="dropdown-menu animate slide border">
              <li>
                <a href="index.html" class="dropdown-item fw-light">About</a>
              </li>
              <li>
                <a href="index.html" class="dropdown-item fw-light">Shop</a>
              </li>
              <li>
                <a href="index.html" class="dropdown-item fw-light">Single Product</a>
              </li>
              <li>
                <a href="index.html" class="dropdown-item fw-light">Cart</a>
              </li>
              <li>
                <a href="index.html" class="dropdown-item fw-light">Checkout</a>
              </li>
              <li>
                <a href="index.html" class="dropdown-item fw-light">Blog</a>
              </li>
              <li>
                <a href="index.html" class="dropdown-item fw-light">Single Post</a>
              </li>
              <li>
                <a href="contact.php" class="dropdown-item fw-light">Contact</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4" href="contact.php">Contact</a>
          </li>
        </ul>
        <div class="user-items d-flex">
          <ul class="d-flex justify-content-end list-unstyled mb-0">
            <li class="search-item pe-3">
              <a href="#" class="search-button">
                <svg class="search">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
            <li class="pe-3">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg class="user">
                  <use xlink:href="#user"></use>
                </svg>
              </a>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="tabs-listing">
                        <nav>
                          <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                            <button class="nav-link text-capitalize active" id="nav-sign-in-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-sign-in" type="button" role="tab" aria-controls="nav-sign-in"
                              aria-selected="true">Sign In</button>
                            <button class="nav-link text-capitalize" id="nav-register-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register"
                              aria-selected="false">Register</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel"
                            aria-labelledby="nav-sign-in-tab">
                            <div class="form-group py-3">
                              <label class="mb-2" for="sign-in">Username or email address *</label>
                              <input type="text" minlength="2" name="username" placeholder="Your Username"
                                class="form-control w-100 rounded-3 p-3" required>
                            </div>
                            <div class="form-group pb-3">
                              <label class="mb-2" for="sign-in">Password *</label>
                              <input type="password" minlength="2" name="password" placeholder="Your Password"
                                class="form-control w-100 rounded-3 p-3" required>
                            </div>
                            <label class="py-3">
                              <input type="checkbox" required="" class="d-inline">
                              <span class="label-body">Remember me</span>
                              <span class="label-body"><a href="#" class="fw-bold">Forgot Password</a></span>
                            </label>
                            <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Login</button>
                          </div>
                          <div class="tab-pane fade" id="nav-register" role="tabpanel"
                            aria-labelledby="nav-register-tab">
                            <div class="form-group py-3">
                              <label class="mb-2" for="register">Your email address *</label>
                              <input type="text" minlength="2" name="username" placeholder="Your Email Address"
                                class="form-control w-100 rounded-3 p-3" required>
                            </div>
                            <div class="form-group pb-3">
                              <label class="mb-2" for="sign-in">Password *</label>
                              <input type="password" minlength="2" name="password" placeholder="Your Password"
                                class="form-control w-100 rounded-3 p-3" required>
                            </div>
                            <label class="py-3">
                              <input type="checkbox" required="" class="d-inline">
                              <span class="label-body">I agree to the <a href="#" class="fw-bold">Privacy
                                  Policy</a></span>
                            </label>
                            <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Register</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="wishlist-dropdown dropdown pe-3">
              <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                <svg class="wishlist">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-primary">Your wishlist</span>
                  <span class="badge bg-primary rounded-pill">2</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                    <div>
                      <h5>
                        <a href="index.html">The Emerald Crown</a>
                      </h5>
                      <small>Special discounted price.</small>
                      <a href="#" class="d-block fw-medium text-capitalize mt-2">Add to cart</a>
                    </div>
                    <span class="text-primary">$2000</span>
                  </li>
                  <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                    <div>
                      <h5>
                        <a href="index.html">The Last Enchantment</a>
                      </h5>
                      <small>Perfect for enlightened people.</small>
                      <a href="#" class="d-block fw-medium text-capitalize mt-2">Add to cart</a>
                    </div>
                    <span class="text-primary">$400</span>
                  </li>
                  <li class="list-group-item bg-transparent d-flex justify-content-between">
                    <span class="text-capitalize"><b>Total (USD)</b></span>
                    <strong>$1470</strong>
                  </li>
                </ul>
                <div class="d-flex flex-wrap justify-content-center">
                  <a href="#" class="w-100 btn btn-dark mb-1" type="submit">Add all to cart</a>
                  <a href="index.html" class="w-100 btn btn-primary" type="submit">View cart</a>
                </div>
              </div>
            </li>
            <li class="cart-dropdown dropdown">
              <a href="index.html" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                aria-expanded="false">
                <svg class="cart">
                  <use xlink:href="#cart"></use>
                </svg><span class="fs-6 fw-light">(02)</span>
              </a>
              <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-primary">Your cart</span>
                  <span class="badge bg-primary rounded-pill">2</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                    <div>
                      <h5>
                        <a href="index.html">Secrets of the Alchemist</a>
                      </h5>
                      <small>High quality in good price.</small>
                    </div>
                    <span class="text-primary">$870</span>
                  </li>
                  <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                    <div>
                      <h5>
                        <a href="index.html">Quest for the Lost City</a>
                      </h5>
                      <small>Professional Quest for the Lost City.</small>
                    </div>
                    <span class="text-primary">$600</span>
                  </li>
                  <li class="list-group-item bg-transparent d-flex justify-content-between">
                    <span class="text-capitalize"><b>Total (USD)</b></span>
                    <strong>$1470</strong>
                  </li>
                </ul>
                <div class="d-flex flex-wrap justify-content-center">
                  <a href="index.html" class="w-100 btn btn-dark mb-1" type="submit">View Cart</a>
                  <a href="index.html" class="w-100 btn btn-primary" type="submit">Go to checkout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

</header>
  </body>