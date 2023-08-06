<?php 
session_start();

include_once '../php_conn/conn.php';
include 'retrieveindata.php';

// auth_checkup
include '../void.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save']) ) {
    $stud_lrn = $_SESSION['stud_lrn'];
    $username = $_POST['username'];
    $password = $_POST['passwordfrm']; // Plain password from the form input

    // // Hash the password
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // // Update username and hashed password in the database
    // $updateQuery = "UPDATE usr_stud SET stud_uname = '$username', stud_pwd = '$hashedPassword' WHERE stud_lrn = '$stud_lrn'";
    // $updateResult = mysqli_query($conn, $updateQuery);

    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $updateQuery = "UPDATE usr_stud SET stud_uname = '$username', stud_pwd = '$hashedPassword' WHERE stud_lrn = '$stud_lrn'";
    } else {
        $updateQuery = "UPDATE usr_stud SET stud_uname = '$username' WHERE stud_lrn = '$stud_lrn'";
    }

    $updateResult = mysqli_query($conn, $updateQuery);
    if (!$updateResult) {
        echo "Error updating user information: " . mysqli_error($conn);
    } else {
        header('Location: profile.php');
        exit();
    }

    // Handle image upload
    if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === UPLOAD_ERR_OK) {
        $imgName = $_FILES['profile_img']['name'];
        $imgTmp = $_FILES['profile_img']['tmp_name'];
        $imgPath = "../assets/img/profile/" . $imgName; //../assets/img/
        

        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if (move_uploaded_file($imgTmp, $imgPath)) {
            // Update the image path in the database
            $updateImgQuery = "UPDATE usr_stud SET stud_img = '$imgPath' WHERE stud_lrn = '$stud_lrn'";
            $updateImgResult = mysqli_query($conn, $updateImgQuery);

            if (!$updateImgResult) {
                // Handle the update error if needed
                echo "Error updating profile image: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading image.";
        }
    } 
    // Redirect back to the profile page after saving the changes
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
    <link rel="stylesheet" href="../assets/css/message.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css" />
    <style>

    </style>
</head>
<body>
    

    
    <div class="message-corner-container" id="message-container">
        <div class="container">
            <div class="row bg-dark " style="height: 450px;">
                <div class="col-12 pt-1 d-flex" style="height: 35px;">
                    <div class="col-10 text-start d-flex position-relative">
                        <img src="<?php echo $imgSrc; ?>" class="img-fluid rounded-circle " alt="Wild Landscape" style="width: 30px; height: 30px;"/>
                        <a class="nav-link dropdown-toggle second-text fw-bold fs-8 text-white" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 12px; align-items: center; display: flex; align-content: center; flex-wrap: wrap; padding-left: 10px;">
                            <?php echo isset($stud_uname) ? $stud_uname : 'Not logged in'; ?>
                        </a>
                    </div>
                    <div class="col-2 text-end message-exit"><i class="bi bi-x-lg" id="message-exit"></i></div>
                </div>

                <div class="conversation" id="conversation">
                    <div class="message-content message-box col-12 bg-white" style="">
                        <div class="text-dark receiver" style="">
                            <div class="image-container">
                                <img src="<?php echo $imgSrc; ?>" class="receiver-img img-fluid rounded-circle " alt="Wild Landscape" style=""/>
                            </div>
                            <div class="message-receiver">
                                Lorem ipsum dolor, sit amet consectetur <br><i class="time">10:20pm</i>
                            </div>
                        </div>
                        <div class="text-dark sender right" style="">
                            <div class="image-container">
                                <img src="<?php echo $imgSrc; ?>" class="sender-img img-fluid rounded-circle " alt="Wild Landscape" style=""/>
                            </div>
                            <div class="message-sender">
                                Lorem ipsum dolor, sit amet <br><i class="time time-sender">10:20pm</i>
                            </div>
                        </div>
                        <div class="text-dark receiver" style="">
                            <div class="image-container">
                                <img src="<?php echo $imgSrc; ?>" class="receiver-img img-fluid rounded-circle " alt="Wild Landscape" style=""/>
                            </div>
                            <div class="message-receiver">
                                Lorem ipsum dolor, sit amet consectetur <br><i class="time">10:20pm</i>
                            </div>
                        </div>
                        <div class="text-dark receiver" style="">
                            <div class="image-container">
                                <img src="<?php echo $imgSrc; ?>" class="receiver-img img-fluid rounded-circle " alt="Wild Landscape" style=""/>
                            </div>
                            <div class="message-receiver">
                                Lorem ipsum dolor, sit amet consectetur <br><i class="time">10:20pm</i>
                            </div>
                        </div>
                        <div class="text-dark receiver" style="">
                            <div class="image-container">
                                <img src="<?php echo $imgSrc; ?>" class="receiver-img img-fluid rounded-circle " alt="Wild Landscape" style=""/>
                            </div>
                            <div class="message-receiver">
                                Lorem ipsum dolor, sit amet consectetur <br><i class="time">10:20pm</i>
                            </div>
                        </div>
                        <div class="text-dark receiver" style="">
                            <div class="image-container">
                                <img src="<?php echo $imgSrc; ?>" class="receiver-img img-fluid rounded-circle " alt="Wild Landscape" style=""/>
                            </div>
                            <div class="message-receiver">
                                Lorem ipsum dolor, sit amet consectetur <br><i class="time">10:20pm</i>
                            </div>
                        </div>
                    </div>
                    <div class="message-input message-input-box col-12">
                        <form action="" method="post">
                            <div class="box">
                                <textarea name="message-send" rows="4" class="valv text-start text-align-left box-input box-input-extra" placeholder="Type your message here..."></textarea>
                                <button type="submit" class="message-send-btn send-ico"><i class="bi bi-send-fill send-ico"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php include("sidebard.php")?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <!--  -->


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
                                <?php echo isset($stud_uname) ? $stud_uname : 'Not logged in'; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
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
                        <div class="col-lg-12 d-flex gx-3">
                            <div class="col-lg-8">
                                <h5 class="pb-3">Change account</h5>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    <p class="valvname pb-0 mb-0">LRN</p>
                                    <input type="text" class="valv" id="" name="lrn" value="<?php echo isset($_SESSION['stud_lrn']) ? $_SESSION['stud_lrn'] : 'Not logged in'; ?>" readonly>
                                </div>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    <p class="valvname pb-0 mb-0">Username</p>
                                    <input type="text" class="valv" id="" name="username" value="<?php echo isset($stud_uname) ? $stud_uname : 'Not logged in'; ?>">
                                </div>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    <p class="valvname pb-0 mb-0">Email</p>
                                    <input type="email" class="valv" id="" name="email" value="<?php echo isset($_SESSION['stud_email']) ? $_SESSION['stud_email'] : 'Not logged in'; ?>" readonly>
                                </div>
                                <div class="col-lg-11 row mx-1 d-flex my-3">
                                    <p class="valvname pb-0 mb-0">Password</p>
                                    <input type="text" class="valv" id="" name="passwordfrm" value="">
                                </div>
                                
                                <div class="col-lg-11 text-end justify-content-end align-content-end my-3 mx-1">
                                    <!-- <div class="col-11 "> -->
                                        <button type="button" class="btn btn-danger" data-mdb-ripple-color="light" name="cancel">Cancel <i class="fas fa-angles-right"></i></button>
                                        <button type="submit" class="btn btn-success" data-mdb-ripple-color="light" name="save">Save <i class="fas fa-angles-right"></i></button>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 align-items-center justify-content-center">
                                <div class="col-12 py-3 px-3 bg-white text-center justify-content-center" style=" height: 400px;">
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
                                                const fileName = event.target.files[0].name;
                                                fileElement.textContent = fileName;
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
    <!-- /#page-content-wrapper -->
    </div>

    <!-- <php include'../assets/js/random.php';?> -->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

<!-- MDB -->
<script type="text/javascript" src="../assets/js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

<script>
    // const file = document.getElementById(img);
    // const fileinput = document.getElementById(filename);

    // file.addEventListener('change', (event) => {
    //     const fileName = event.target.file[0].name;
    //     fileElement.textContent = fileName;
    // });
</script>

<!-- CLOSE_animation -->
<script>
  $(document).ready(function() {
    $("#message-exit").on("click", function() {
      $("#message-container").addClass("slide-down-hide");

      // Hide the message-container after the animation is complete
      setTimeout(function() {
        $("#message-container").hide();
      }, 500); // Adjust the time to match the animation duration (0.5s in this case)
    });
  });
</script>


</body>
</html>