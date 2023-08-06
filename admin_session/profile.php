<?php 
session_start();

include_once '../php_conn/conn.php';
include 'retrievindata.php';

// auth_checkup
include '../void.php';

// function for save or update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save']) ) {
    $adm_email = $_SESSION['adm_email'];
    $username = $_POST['username'];
    $password = $_POST['passwordfrm']; 
    
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $updateQuery = "UPDATE usr_adm SET adm_username = '$username', adm_pwd = '$hashedPassword' WHERE adm_email = '$adm_email'";
    } else {
        $updateQuery = "UPDATE usr_adm SET adm_username = '$username' WHERE adm_email = '$adm_email'";
    }

    $updateResult = mysqli_query($conn, $updateQuery);


    if (!$updateResult) {
        echo "Error updating user information: " . mysqli_error($conn);
    }

    if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === UPLOAD_ERR_OK) {
        $imgName = $_FILES['profile_img']['name'];
        $imgTmp = $_FILES['profile_img']['tmp_name'];
        $imgPath = "../assets/img/profile/" . $imgName;
        
        if (move_uploaded_file($imgTmp, $imgPath)) {
            $updateImgQuery = "UPDATE usr_adm SET adm_img = '$imgPath' WHERE adm_email = '$adm_email'";
            $updateImgResult = mysqli_query($conn, $updateImgQuery);

            if (!$updateImgResult) {
                echo "Error updating profile image: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading image.";
        }
    }
    header('Location: profile.php');
    exit();
}  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCAPNHS</title>

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css" />

</head>
<body>
    
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php include("sidebar.php")?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
           <!-- Navigation bar -->
           <nav class="navbar navbar-expand-lg navbar-light py-2 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-5 me-3" id="menu-toggle" style="color: white;"></i>

                    <!-- <h2 class="fs-5 m-0" ><php echo $_SESSION['page_title']; ?></h2> -->
                    <h2 class="fs-5 m-0"><span id="page-title">Profile</span></h2>
                </div>  

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>   
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-flex">
                        <img src="<?php echo $imgSrc; ?>" class="img-fluid rounded-circle " alt="Wild Landscape" style="width: 40px; height: 40px;"/>
                            <a class="nav-link dropdown-toggle second-text fw-bold fs-8 text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo isset($adm_username) ? $adm_username : 'Not logged in'; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid px-4">
                <form action="profile.php" method="post" enctype="multipart/form-data">
                    <div class="row px-3 py-3">
                        <div class="prof col-lg-12 col-sm-12 d-flex gx-3">
                            <style>
                                @media (max-width: 576px) {
                                    .d-flex {
                                        display: block !important;
                                    }
                                }
                            </style>
                            <div class="col-lg-8 col-sm-12">
                                <h5 class="pb-3" style="color: #009D63;">Change account</h5>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    <p class="valvname pb-0 mb-0">Username</p>
                                    <!-- <input type="text" class="valv" id="" name="username" value="<php echo isset($adm_username) ? $adm_username : 'Not logged in'; ?>"> -->
                                    <input type="text" class="valv" id="username" name="username" value="<?php echo isset($adm_username) ? $adm_username : 'Not logged in'; ?>">
                                </div>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    <p class="valvname pb-0 mb-0">Email</p>
                                    <input type="email" class="valv" id="" name="email" value="<?php echo isset($adm_email) ? $adm_email : 'Not logged in'; ?>" readonly>
                                </div>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    
                                    <p class="valvname pb-0 mb-0">Password </p>
                                    <i id="eye" class="far fa-eye trailing pt-1 " style="color: #BBBEC5; width: 50px;"></i>
                                    <input type="password" class="valv form-icon-trailing" id="passwordfrm" name="passwordfrm" value="">   
                                    <!-- f00 -->
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
                                        <!-- Password view jquery -->
                                </div>

                                <div class="col-lg-11 text-end justify-content-end align-content-end my-3 mx-1">
                                    <!-- <div class="col-11 "> -->
                                        <button type="button" class="btn btn-danger" data-mdb-ripple-color="light" name="cancel">Cancel <i class="fas fa-angles-right"></i></button>
                                        <button type="submit" class="btn btn-success" data-mdb-ripple-color="light" name="save">Save <i class="fas fa-angles-right"></i></button>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 align-items-center justify-content-center">
                                <div class="col-12 py-3 px-3 bg-white text-center justify-content-center" style="position: relative; height: 400px;">
                                    <!-- Profile Image -->
                                    <img id="image-preview" class="img-fluid text-center" src="<?php echo $imgSrc; ?>" alt="profile"
                                        style="width: 200px; height: 200px; object-fit: cover;">
                                    <div class="block text-center align-items-center justify-content-center px-3 pt-3">
                                        <div class="file-upload-wrapper text-start justify-content-center align-items-center">
                                            <label for="img" class="form-label pt-3"><p><i class="fs-12">Drag and Drop, or click the browse to browse an image for profile</i></p></label>
                                            <input type="file" class="form-control" id="img" data-mdb-file-upload="file-upload" name="profile_img">
                                        </div>
                                        <span class="col-12" id="filename"></span>
                                    </div>
                                </div>

                                <script>
                                    const imageInput = document.getElementById('img');
                                    const imagePreview = document.getElementById('image-preview');
                                    const fileElement = document.getElementById('filename');

                                    imageInput.addEventListener('change', (event) => {
                                        const file = event.target.files[0];
                                        if (file) {
                                            const reader = new FileReader();

                                            reader.onload = (e) => {
                                                imagePreview.src = e.target.result;
                                                fileElement.textContent = file.name;
                                                // fileInput.addEventListener('change', (event) => {
                                                //     const fileName = event.target.files[0].name;
                                                //     fileElement.textContent = fileName;
                                                // });
                                            };

                                            reader.readAsDataURL(file);
                                        }
                                    });
                                    
                                </script>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="../assets/js/mdb.min.js"></script>

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



<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

<!-- Custom scripts -->
<script type="text/javascript"></script>

<script>
    const file = document.getElementById(img);
    const fileinput = document.getElementById(filename);

    file.addEventListener('change', (event) => {
        const fileName = event.target.file[0].name;
        fileElement.textContent = fileName;
    });
</script>


</body>
</html>