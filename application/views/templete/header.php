<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Buupass - Online Bus Ticket Bookings</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/lineicons.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/weather-icons.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
     <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/moment.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse navbar-theme navbar-theme-abs navbar-theme-transparent navbar-theme-border" id="main-nav">
      <div class="container">
        <div class="navbar-inner nav">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button" area-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url('Home')?>">
              <img src="<?=base_url()?>assets/img/logo.png" alt="Image Alternative text" title="Image Title"/>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
              <li class="active dropdown">
                <a class="dropdown-toggle" href="<?=base_url('Home')?>" role="button" aria-expanded="false">Homepages</a>
                <div class="dropdown-menu dropdown-menu-lg" style="display: none;">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="index.html">Index 1</a>
                        </li>
                        <li>
                          <a href="index-2.html">Index 2</a>
                        </li>
                        <li>
                          <a href="index-3.html">Index 3</a>
                        </li>
                        <li>
                          <a href="index-4.html">Index 4</a>
                        </li>
                        <li>
                          <a href="index-5.html">Index 5</a>
                        </li>
                        <li>
                          <a href="index-6.html">Index 6</a>
                        </li>
                        <li>
                          <a href="index-7.html">Index 7</a>
                        </li>
                        <li>
                          <a href="index-8.html">Index 8</a>
                        </li>
                        <li>
                          <a href="index-9.html">Index 9</a>
                        </li>
                        <li>
                          <a href="index-10.html">Index 10</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Misc</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="blog.html">Blog</a>
                        </li>
                        <li>
                          <a href="blog-post.html">Blog Post</a>
                        </li>
                        <li>
                          <a href="404.html">404</a>
                        </li>
                        <li>
                          <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                          <a href="contact.html">Contact</a>
                        </li>
                        <li>
                          <a href="login.html">Login</a>
                        </li>
                        <li>
                          <a href="login-2.html">Login 2</a>
                        </li>
                        <li>
                          <a href="register.html">Register</a>
                        </li>
                        <li>
                          <a href="pwd-reset.html">Reset password</a>
                        </li>
                        <li>
                          <a href="payment-success.html">Sucess Payment</a>
                        </li>
                        <li>
                          <a href="coming-soon.html">Coming Soon</a>
                        </li>
                        <li>
                          <a href="loading.html">Loading</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Country/City</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="index-city-1.html">Index City 1</a>
                        </li>
                        <li>
                          <a href="index-city-2.html">Index City 2</a>
                        </li>
                        <li>
                          <a href="index-city-3.html">Index City 3</a>
                        </li>
                        <li>
                          <a href="index-country-1.html">Index Country 1</a>
                        </li>
                        <li>
                          <a href="index-country-2.html">Index Country 2</a>
                        </li>
                        <li>
                          <a href="index-country-3.html">Index Country 3</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="navbar-nav-item-user dropdown">
                <a class="dropdown-toggle" href="account.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>My Account
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">Preferences</a>
                  </li>
         <!--          <li>
                    <a href="account-notifications.html">Notifications</a>
                  </li>
                  <li>
                    <a href="account-cards.html">Payment Methods</a>
                  </li>
                  <li>
                    <a href="account-travelers.html">Travelers</a>
                  </li>
                  <li>
                    <a href="account-history.html">History</a>
                  </li>
                  <li>
                    <a href="account-bookmarks.html">Bookmarks</a>
                  </li> -->
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>