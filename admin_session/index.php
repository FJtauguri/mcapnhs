<?php 
session_start();

include_once '../php_conn/conn.php';
include 'retrievindata.php';

// auth_checkup
include '../void.php';
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
        <?php include("sidebar.php");?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light py-2 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-5 me-3" id="menu-toggle" style="color: white;"></i>

                    <!-- <h2 class="fs-5 m-0" ><php echo $_SESSION['page_title']; ?></h2> -->
                    <h2 class="fs-5 m-0"><span id="page-title">Dashboard</span></h2>
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
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <?php
                // Fetch the number of users from usr_stud table
                $query = "SELECT COUNT(*) as user_count FROM usr_stud";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $userCount = $row['user_count'];
                } else {
                    $userCount = 0;
                }
            ?>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2 d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Number of Students</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4"><?php echo $userCount;?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">New Counseling Request</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Done Counceling Request</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Indigenous People</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex">
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Total Good Moral Records</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Pending Counseling Request</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Parent Occupation</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3  p-1 d-flex" style=" ">
                            <div class="col-lg-12 bg-white px-2 d-flex" style="height: 100px; border-left: 5px solid #009D63;   ">
                                <div class="col-lg-8 d-flex align-items-center justify-content-center me-3">
                                    <p class="fs-6 mb-0">Guidance Associate</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                                    <h3 class="fs-4">1</h3>
                                </div>
                            </div>
                        </div>
                    </div>  

                </div>



                <div class="row my-3">
                    <h3 class="fs-4 mb-3 text-center">Full Report</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <!-- <th scope="col" width="50">#</th> -->
                                    <th scope="col">Title</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Fetch the number of users from usr_stud table
                                    $query = "SELECT COUNT(*) as user_count FROM usr_stud";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $userCount = $row['user_count'];
                                    } else {
                                        $userCount = 0; // Default value if query fails
                                    }
                                ?>

                                <tr>
                                    <td>Number of Students</td>
                                    <td><?php echo $userCount;?></td>
                                </tr>
                                <tr>
                                    <td>New Counseling Request</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Done Counseling Request</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Indigeous People</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Total Good Moral Records</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Pending Counseling Request</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Parent Occupation</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Guidance Associate</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
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

</body>
</html>