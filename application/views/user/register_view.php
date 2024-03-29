<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->
    
    <!-- Title -->
    <title>Kazi Connect</title>
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/Favicon.ico">
    
    <!-- CSS Stylesheet -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="<?=base_url()?>assets/css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" /><!-- font css --> 
	<link href="<?=base_url()?>assets/css/jquery.selectbox.css" rel="stylesheet" /><!-- select Box css -->
    <link href="<?=base_url()?>assets/css/docs.css" rel="stylesheet"><!--  template structure css -->
    
    <!-- Used Fonts -->
    <link href="<?=base_url()?>assets/https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?=base_url()?>assets/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>


<body class="registerPage">
    <div class="page">
        <header id="headerRegister">
            <div class="container">
                <div class="logo"><a href="<?=base_url()?>assets/index.html"><img src="<?=base_url()?>assets/images/main-logo.png" alt="logo" style="height: 87px;"></a></div>
                <div class="register-pageLogin">
                    <div class="login-title">
                        <label>Login</label>
                        <a href="assets/#">Forgot password ?</a>
                         <div id="alert" style="display: none" class="alert alert-danger" role="alert">
                           The email and password do not match. Please try again !
                        </div>
                    </div>
                    <form id="loginForm"> 
                    <div class="login-box">
                        <div class="input-box">
                            <input type="email" id="email" name="email" placeholder="Email ID">
                            <div class="icon icon-user"></div>
                        </div>
                        <div class="input-box">
                            <input type="password" id="password" name="password" placeholder="Password">
                            <div class="icon icon-lock"></div>
                        </div>
                        </form>
                        <div class="submit-box">
                            <input onclick="Login()" type="button" class="btn" value="Login">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="register-banner">
            <img src="<?=base_url()?>assets/images/banner-img/registration-banneBg.png" alt="" class="register-bannerImg">
            <div class="inner-banner">
                <div class="text">Create an Account <span> </span></div>
                <div class="register-form">
                    <div class="inner-form">
                        <h1>Register Now</h1>
                        <div id="alert_sucess" style="display: none;" class="alert alert-success" role="alert">
                            Registration Successful, Please Login!
                        </div>
                        <div id="alert_err" style="display: none" class="alert alert-danger" role="alert">
                           The user Existents, Please login !
                        </div>
                        <form id="reg_form">
                        <div class="form-filde">
                        <div class="select-row">
                                <select name="user_type_id" id="user_type_id" class="form-control">
                                    <option>Please Select user type</option>
                                    <?php if(!empty($userType)): foreach($userType as $row): ?>
                                    <option value="<?=$row->user_type_id?>"><?=$row->name?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                        </div>
                            <div class="col-md-4">
                            <div class="input-slide">
                                <input type="text" name="first_name" id="first_name" placeholder="First Name"  required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="input-slide">
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="input-slide">
                                <input type="text" name="other_name" id="other_name" placeholder="Other Name">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="input-slide">
                                <input type="text" placeholder="Date of Birth" name="birth" id="birth" class="date">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="input-slide">
                                <input type="text" name="id_number" id="id_number" placeholder="ID / Passport Number" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="select-row">
                                <select name="gender_id" id="gender_id" class="form-control" required="">
                                   <option value="">Gender</option>
                                    <?php if(!empty($Gender)): foreach($Gender as $row): ?>
                                    <option value="<?=$row->gender_id?>"><?=$row->name?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-slide">
                                <input type="email" name="email" id="email" placeholder="Email" required="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-slide">
                                <input type="number" name="phone_number" id="phone_number" placeholder="Phone" required="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="input-slide">
                                <input type="text" name="location" name="location" placeholder="Physical Location" required="">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="select-row">
                                <select name="country_id" id="country_id" class="form-control" >
                                    <option value="">Country</option>
                                    <?php if(!empty($Country)): foreach($Country as $row): ?>
                                    <option value="<?=$row->country_id?>"><?=$row->name?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                            </div>
                            </div>

                            <div class="input-slide">
                                <input type="password" id="reg_password" name="reg_password" placeholder="Password" required="">
                            </div>
                            <div class="input-slide">
                                <input type="password" id="conf_password" name="conf_password" placeholder="Confirm Password">
                            </div>
                            </form>
                            <!-- <div class="check-slide">
                                <label for="checkbox-99" class="label_check c_on"><input type="checkbox" value="1" id="checkbox-99" name="sample-checkbox-01">I agree to Event Planning terms of services</label>
                            </div> -->
                            <div class="submit-slide">
                                <input type="button" onclick="register()" value="Submit" class="btn">
                            </div>
                        </div>
                    </div>
                    <div class="normal-link">
                        <a href="assets/#">More than just a calendar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-content">
            <div class="benefits">
                <div class="container">
                    <div class="heading">
                        <div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>Benefits</h2>
                        </div>
                    </div>
                    <div class="benefits-view">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="box-view">
                                    <div class="iconBox icon1"><div class="icon icon-conversion-rates"></div></div>
                                    <div class="text">Increase your conversion rates</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="box-view">
                                    <div class="iconBox icon2"><div class="icon icon-customer-base"></div></div>
                                    <div class="text">Increase customer base</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="box-view">
                                    <div class="iconBox icon3"><div class="icon icon-negotiations"></div></div>
                                    <div class="text">Low multiple negotiations</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="box-view">
                                    <div class="iconBox icon4"><div class="icon icon-wider-customer"></div></div>
                                    <div class="text">Wider customer reach</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-us">
                <div class="container">	
                    <div class="heading">
                        <div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>Why Choose Us?</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-lead-management"></div></div>
                                <h3>Lead Management</h3>
                                <p>Increase occupancy, automate the lead management process, grow your  customer relationships, match sales-ready leads to the appropriate sales people.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-sales"></div></div>
                                <h3>Sales</h3>
                                <p>Track sales opportunities, manage the sales process and generate proposals. Built-in process provides an aggregate view of account activity from the past, present and future.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-booking"></div></div>
                                <h3>Booking</h3>
                                <p>Manage calendars , share availability, easily view events color-coded by status, type or location. Book and manage multiple spaces, venues, and sites all from one master calendar.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-operations"></div></div>
                                <h3>Operations</h3>
                                <p>Assign resources and review stock alerts. Create detailed reports, work orders, and generate invoices. Receive alerts on changes as they take place.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-info">
                <div class="container">
                    <div class="heading">
                        <div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>How it works</h2>
                        </div>
                        <div class="info-text">Once you have registered, listing is just a four step process</div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="box">
                                <div class="iconBox">
                                    <div class="inner-box">
                                        <div class="icon icon-step-1"></div>
                                    </div>
                                </div>
                                <div class="text"><span>1.</span> Sign up for free, set up your Gig, and offer your work to our global audience.</div>
                            </div>
                            <div class="box">
                                <div class="iconBox">
                                    <div class="inner-box">
                                        <div class="icon icon-step-4"></div>
                                    </div>
                                </div>
                                <div class="text"><span>2.</span> Get notified when you get an order and use our system to discuss details with customers.</div>
                            </div>
                            <div class="box last">
                                <div class="iconBox">
                                    <div class="inner-box">
                                        <div class="icon icon-step-3"></div>
                                    </div>
                                </div>
                                <div class="text"><span>3.</span> Get paid on time, every time. Payment is transferred to you upon order completion.</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-info">
                <div class="container">
                    <div class="heading">
                        <div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>Pricing</h2>
                        </div>
                        <div class="info-text">Enjoy promotional rates for listing on Event Planning for a limited period only</div>
                    </div>
                    <div class="listing-view">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="list">No monthly subscription fee</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="list">Listing of venues absolutely free</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="list">Zero installation charges</div>
                            </div>
                        </div>
                    </div>
                    <div class="register-btn">
                        <!-- <a href="assets/#" class="btn">Register Now</a> -->
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <h5>Latest Updates</h5>
                            <div class="update-slide">
                                <div class="img"><img src="<?=base_url()?>assets/images/event-img/update-img1.png" alt=""></div>
                                <div class="text">
                                    <p>Lorem ipsum is a dummy text full  service industrial design.</p>
                                    <a href="assets/#">Read More</a>
                                </div>
                            </div>
                            <div class="update-slide">
                                <div class="img"><img src="<?=base_url()?>assets/images/event-img/update-img2.png" alt=""></div>
                                <div class="text">
                                    <p>Integrated Design Systems is a  full-service industrial design.</p>
                                    <a href="assets/#">Read More</a>
                                </div>
                            </div>
                            <div class="update-slide">
                                <div class="img"><img src="<?=base_url()?>assets/images/event-img/update-img3.png" alt=""></div>
                                <div class="text">
                                    <p>when an unknown printer took a galley of type and specimen book.</p>
                                    <a href="assets/#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                            <div class="footer-link">
                                <h5>Company</h5>
                                <ul>
                                    <li><a href="<?=base_url()?>assets/aboutUs.html">About Us</a></li>
                                    <li><a href="<?=base_url()?>assets/privacy_policy.html">Privacy Policy</a></li>
                                    <li><a href="<?=base_url()?>assets/career.html">Careers</a></li>
                                    <li><a href="<?=base_url()?>assets/blog.html">Blogs</a></li>
                                    <li><a href="<?=base_url()?>assets/contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <div class="footer-contact">
                                <h5>Contact us</h5>
                                <div class="contact-slide">
                                    <div class="icon icon-location-1"></div>
                                    <p>74 West Main Street, Oyster Bay, Berlin, 10963 - Germany </p>
                                </div>
                                <div class="contact-slide">
                                    <div class="icon icon-phone"></div>
                                    <p>516-482-2181 ext 101</p>
                                </div>
                               
                                <div class="contact-slide">
                                    <div class="icon icon-message"></div>
                                    <a href="<?=base_url()?>assets/MailTo:info@eventplanning.com">info@eventplanning.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <div class="contact-form">
                                <h5>Connect with us</h5>
                                <p>We'll keep you informed and updated Sign up for our email newsletters </p>
                                <div class="input-row">
                                    <div class="input-box">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="input-box">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="input-row email">
                                    <div class="input-box">
                                        <input type="text" placeholder="Email Address">
                                    </div>
                                    <div class="submit-box">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                                <div class="sosal-midiya">
                                    <ul>
                                        <li><a href="<?=base_url()?>assets/#"><span class="icon icon-facebook"></span></a></li>
                                        <li><a href="<?=base_url()?>assets/#"><span class="icon icon-twitter"></span></a></li>
                                        <li><a href="<?=base_url()?>assets/#"><span class="icon icon-linkedin"></span></a></li>
                                        <li><a href="<?=base_url()?>assets/#"><span class="icon icon-skype"></span></a></li>
                                        <li><a href="<?=base_url()?>assets/#"><span class="icon icon-google-plus"></span></a></li>
                                        <li><a href="<?=base_url()?>assets/#"><span class="icon icon-play"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>Copyright &copy; <span></span> - Kazi Connect  | All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/placeholder.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/coustem.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap-datepicker.js"></script>

    <script>
     $('.date').datepicker({
        format: 'mm-dd-yyyy',
     });
     
     function register() { 
  
    var validator = $("#reg_form").validate({ 
        rules : { reg_password : { minlength : 5 },conf_password : { minlength : 5,equalTo : "#reg_password" }}
    });
    validator.form();
    if (validator.checkForm()) {     

        Submit();

     }
         
     }
     

     function Submit() {
      
        $.ajax({
            url: '<?=base_url('Register/VerifyReg')?>',
            type: 'POST',
            // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            data: $('#reg_form').serialize(),
        })
        .done(function(data) {
            console.log("success");
            if (data=="exists") {
                $('#alert_err').show('slow/400/fast', function() {}); 
            }else{ 
                $('#alert_err').hide();
                $('#alert_sucess').show('slow/400/fast', function() {
                
            });}
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
     }

     $('#password').on( "keydown", function(event) {
              if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("loginbtn").click();
              }
          });
        
         function Login() {
              $.ajax({
                  type: "POST",
                  url: '<?=site_url('login/VerifyLogin')?>',
                  data: $('#loginForm').serialize(),
                  // dataType: "text",
                  beforeSend: function() {

                  },
                  success: function (response) {
                      if(response == 'errr'){
                        //   alert(response);
                          $('#alert').show();
                      }else{
                        //    alert(response);
                        window.location.replace('<?=base_url('Home')?>');
                      }
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }

              });
        }
    
    </script>
    
</body>
</html>