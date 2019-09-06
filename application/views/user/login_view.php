  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Trivia</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="<?=base_url()?>assets/css/ei-icon.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-in">
                <div class="row no-mrg-horizon">
                    <div class="col-md-8 no-pdd-horizon d-none d-md-block">
                        <div class="full-height bg" style="background-image: url('assets/images/others/helloquence.jpg')">
                            <div class="img-caption">
                                <h1 class="caption-title">We make spectacular</h1>
                                <p class="caption-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 no-pdd-horizon">
                        <div class="full-height bg-white height-100">
                            <div class="vertical-align full-height pdd-horizon-70">
                                <div class="table-cell">
                                    <div class="pdd-horizon-15">
                                        <h2>Login</h2>
                                        <p class="mrg-btm-15 font-size-13">Please enter your user name and password to login</p>
                                        <div style="display: none;" id="alert" class="alert alert-danger" role="alert"> Oh snap! the email and password you entered do not match. Please try again. </div>
                                        <?php if ($this->session->flashdata('message')): ?>
                                        <div  class="alert alert-danger" role="alert"> <?=$this->session->flashdata('message');?> </div>
                                        <?php endif;?>
                                        <form id="loginForm">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="User name">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="checkbox font-size-12">
                                                <input id="agreement" name="agreement" type="checkbox">
                                                <label for="agreement">Keep Me Signed In</label>
                                            </div>
                                            </form>
                                            <button onclick="Login()" class="btn btn-info">Login</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="login-footer">
                                <img class="img-responsive inline-block" src="<?=base_url()?>assets/images/logo/logo.png" width="100" alt="">
                                <span class="font-size-13 pull-right pdd-top-10">Don't have an account? <a href="<?=base_url('Register')?>">Sign Up Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- build:js assets/js/vendor.js -->
    <!-- plugins js -->
    <script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?=base_url()?>assets/vendors/PACE/pace.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="<?=base_url()?>assets/js/app.js"></script>
    <!-- endbuild -->

    <!-- page js -->
        


    <script type="text/javascript">

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


        function add() {
           $('#mDialog').modal('show');
        }

        function Save() {
         var valid = true;
         var message = "";

         if ($('#email').val()=="") {
          valid = false;
          message  =  "plese povide email";
         }
         if ($('#phone').val()=="") {
          valid = false;
          message  =  "plese povide phone number";
         }
         if (!validateEmail($('#email').val())) {
          valid = false;
          message  =  "plese povide valid email";
         }

         toastr["warning"](message);

         if (valid) {
           submit();

         }

        }

        function submit() {

            $.ajax({
                url: '<?=base_url('Customer/add')?>',
                type: 'POST',
                // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: $('#mForm').serialize(),
            })
            .done(function(data) {
                console.log("success");

              $('#mDialog').modal('hide'); 

              toastr.options = {"preventDuplicates": true};
              toastr["success"]("Thank you for choosing Engentroy CRM, please wait for your account to be verified");
               
               setTimeout(function() {
               location.reload();
            }, 3000);

            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        }


        function validateEmail(email) {
          var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }

    </script>

</body>

</html>