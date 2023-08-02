<?php
include 'register_admin_process.php';
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
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="./assets/img/Guidance_Counseling.jpg"
            class="img-fluid" alt="Registration image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

            <form id="registrationForm" action="register_admin_process.php" method="POST">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                    <p class="lead fw-normal mb-4 me-3">Register as <b>ADMIN</b></p>
                </div>
        
                <!-- Userame -->
                <div class="form-outline mb-4">
                    <input type="text" name="usernamefrm" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                    <label class="form-label" for="usernamefrm" required>Enter username</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="emailfrm" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                    <label class="form-label" for="emailfrm" required>Enter email address</label>
                </div>
        
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <input type="password" name="passwordfrm" class="form-control form-control-lg"
                    placeholder="Enter password" />
                    <label class="form-label" for="passwordfrm" required>Enter Password</label>
                </div>

                <!-- Password Confirmation input -->
                <!-- <div class="form-outline mb-3">
                    <input type="password" name="repasswordfrm" class="form-control form-control-lg"
                    placeholder="Enter password" />
                    <label class="form-label" for="repasswordfrm">Re-enter Password</label>
                </div> -->
        
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" name="admadd" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">
                        Register
                    </button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="./index.php"
                        class="link-danger">Login</a>
                    </p>
                </div>       
            </form>
            
        </div>
        </div>
    </div>
</section>

    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("registrationForm");
          form.addEventListener("submit", function(event) {
            event.preventDefault();

                // Get form data
                const formData = new FormData(form);

                fetch("register_admin.php", {
                method: "POST",
                body: formData,
                })
                .then(response => response.text())
                .then(data => {
                    window.location.href = "index.php";
                })
                .catch(error => console.error("Error:", error));
            });
        });
    </script> -->
</body>
</html>