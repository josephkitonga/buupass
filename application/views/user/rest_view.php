<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reset | Aolas</title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url()?>favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url()?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url()?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url()?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page" background="<?=base_url()?>assets/images/image-gallery/17.jpg" style="background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <!-- <p>Aolas</p> -->
                        </div>
                    </div>
                </div>
                <div style="display: ;" id="alert" class="alert alert-danger" role="alert"><?=$message;?> </div>
                <form id="loginForm" method="POST">
                  <input type="hidden" name="user_id" id="user_id" value="<?=$user_id?>">
                   <input type="hidden" name="reset" id="reset" value="1">
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="reset_password" name="reset_password" placeholder="Repeat Password" required>
                        </div>
                    </div>
                    <div class="row">
            
                        </form>
                        <div class="col-xs-6 align-right p-t-5">
                            <!-- <a href="forgot-password.html">Forgot Password?</a> -->
                        </div>
                    </div>
                    
                    <button onclick="Reset()" class="btn btn-block btn-primary waves-effect" type="submit">RESET</button>

                   <!--  <p class="text-muted text-center p-t-20">
                        <small>Do not have an account?</small>
                    </p> -->

                    <!-- <a class="btn btn-sm btn-default btn-block" href="register.html">Create an account</a> -->

                   <!-- FOOTER-->
    <footer>
        <!-- <span id="footer"></span> -->
    </footer>
            </div>
        </div>
        
    </div>

    <!-- CORE PLUGIN JS -->
    <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>plugins/bootstr<?=base_url()?>bootstrap.js"></script>
    <script src="<?=base_url()?>plugins/node-waves/waves.js"></script>
    <script src="<?=base_url()?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!--THIS PAGE LEVEL JS-->
    <script src="<?=base_url()?>plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?=base_url()?>asse<?=base_url()?>pages/examples/login.js"></script>

    <!-- LAYOUT JS -->
    <script src="<?=base_url()?>asse<?=base_url()?>demo.js"></script>
        <script src="<?=base_url(); ?>assets/js/main.js"></script> 


    <script type="text/javascript">

         function Reset() {
           var validate = true;
           var password = $('#password').val();
           var reset_password = $('#reset_password').val();
           if (password!=reset_password) {
            alert('The password does not match');
            validate=false;
           }

           if (password.length < 4) {
              
               alert('Please use a Strong Password');
               validate = false;
           }



           if (validate) {
            
             $.ajax({
               url: '<?=base_url('Reset/reset')?>',
               type: 'POST',
               data: $('#loginForm').serialize(),
             })
             .done(function() {
               console.log("success");

               window.location.replace('<?=base_url('Login')?>');
             })
             .fail(function() {
               console.log("error");
             })
             .always(function() {
               console.log("complete");
             });
             

           }


         }
        

    </script>

</body>

</html>