<?php
// session_start();
include_once 'login_process.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCAPNHS</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />

</head>
<body>

<section class="vh-100">
  <div class="container-fluid col-lg-12 h-customs h-100">
    <div class="row col-lg-12 d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-lg-6 col-xl-5">
        <img src="./assets/img/Guidance_Counseling.jpg"
            class="img-fluid" alt="Registration image">
      </div>
      <div class="col-md-8 col-lg-6 col-lg-6 col-xl-4 offset-xl-1 h-70 py-3 justify-content-center align-items-center d-flex">
        <form method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <i id="eye" class="far fa-eye trailing pt-1 text-center end-0" style="color: #BBBEC5; width: 50px;"></i>
            <input type="password" name="password" id="passwordfrm" class="form-control form-control-lg form-icon-trailing" placeholder="Enter password" />
            <label class="form-label" for="pasword">Password</label>
          </div>
          <style>
              .row {
                  position: relative;
              }

              .form-icon-trailing {
                  margin-right: 2.5rem; 
              }

              .trailing {
                  /* width: 25px; */
                  /* height: 25px;
                  padding-left: 500px; */
                  position: absolute;
                  top: 70%;
                  right: 10px; 
                  pointer-events: all;
                  transform: translateY(-50%);
                  /* transform: translateX(-50%); */
              }
          </style>



          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">
              Login
            </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register_admin.php"
              class="link-danger">Register</a>
            </p>
            <div class="text-center text-lg-center pt-2" id="regOPT">
              <button type="button" class="btn btn-outline-danger btn-lg mt-2"
                style="width: 10rem; height: 2.5rem; padding: 0 0 0 0; margin: 0 0 0 0; ">
                <a href="./register_admin.php" style="color: white; text-decoration: none; font-size: 12px; color: #000;">Regiter as Councelor</a>
              </button>
              <button type="button" class="btn btn-outline-warning btn-lg mt-2"
                style="width: 10rem; height: 2.5rem; padding: 0 0 0 0; margin: 0 0 0 0; ">
                <a href="./register_stud.php" style="color: white; text-decoration: none; font-size: 12px; color: #000;">Regiter as Student</a>
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#eye').on('click', function() {
                const passwordInput = $('#passwordfrm');
                const icon = $(this);

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });
    </script>

    <?php if (isset($_SESSION['login_failed']) && $_SESSION['login_failed']) : ?>
        <div class="toast-container position-absolute p-3" style="top: 10px; right: 10px;">
            <div class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="3000">
                <div class="toast-header">
                    <strong class="me-auto">Login Failed</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Invalid email or password. Please try again.
                </div>
            </div>
        </div>
        <?php
        // Unset the session variable after displaying the toast
        unset($_SESSION['login_failed']);
    endif;
    ?>

</body>
</html>