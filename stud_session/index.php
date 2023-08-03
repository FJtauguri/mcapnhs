
<?php
session_start();

include '../php_conn/conn.php';
include 'retrieveindata.php';
// auth_checkup
include '../void.php';

saveFormDataToDatabase($conn);

function saveFormDataToDatabase($conn) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['lrn'])) {
            // Sanitize the input data to prevent SQL injection
            function sanitizeInput($data) {
                global $conn;
                return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
            }

            // Fetch and sanitize form data
            $lrn = sanitizeInput($_POST['lrn']);
            $fname = sanitizeInput($_POST['fname']);
            $mname = sanitizeInput($_POST['mname']);
            $lname = sanitizeInput($_POST['lname']);
            $nickname = sanitizeInput($_POST['nickname']);
            $bdate = sanitizeInput($_POST['bdate']);
            $age = sanitizeInput($_POST['age']);
            $gender = sanitizeInput($_POST['gender']);
            $glevel = sanitizeInput($_POST['glevel']);
            $moname = sanitizeInput($_POST['moname']);
            $mooccupation = sanitizeInput($_POST['mooccupation']);
            $mophone = sanitizeInput($_POST['mophone']);
            $moaddress = sanitizeInput($_POST['moaddress']);
            $paname = sanitizeInput($_POST['paname']);
            $paoccupation = sanitizeInput($_POST['paoccupation']);
            $paphone = sanitizeInput($_POST['paphone']);
            $paaddress = sanitizeInput($_POST['paaddress']);
            $lename = sanitizeInput($_POST['lename']);
            $leoccupation = sanitizeInput($_POST['leoccupation']);
            $lerelation = sanitizeInput($_POST['lerelation']);
            $lephone = sanitizeInput($_POST['lephone']);
            $section7 = sanitizeInput($_POST['section7']);
            $adv7 = sanitizeInput($_POST['adv7']);
            $section8 = sanitizeInput($_POST['section8']);
            $adv8 = sanitizeInput($_POST['adv8']);
            $section9 = sanitizeInput($_POST['section9']);
            $adv9 = sanitizeInput($_POST['adv9']);
            $section10 = sanitizeInput($_POST['section10']);
            $adv10 = sanitizeInput($_POST['adv10']);
            $medical = sanitizeInput($_POST['medical']);

            // SQL query to fetch existing data from the table
            $select_query = "SELECT * FROM stud_info WHERE lrn = '$lrn'";
            $select_result = mysqli_query($conn, $select_query);
            
            if ($select_result) {
                $row_count = mysqli_num_rows($select_result);
                                        
                    if ($row_count > 0){
                        $row = mysqli_fetch_assoc($select_result);

                        // Update only the fields that have new values from the form
                        $update_fields = array();
                        if ($fname != '' && $fname !== $row['fname']) {
                            $update_fields[] = "fname = '$fname'";
                        }
                        if ($mname != '' && $mname !== $row['mname']) {
                            $update_fields[] = "mname = '$mname'";
                        }

                        if ($lname != '' && $lname !== $row['lname']) {
                            $update_fields[] = "lname = '$lname'";
                        }
                        if ($nickname != '' && $nickname !== $row['nickname']) {
                            $update_fields[] = "nickname = '$nickname'";
                        }
                        if ($bdate != '' && strtotime($bdate) !== strtotime($row['bdate'])) {
                            $update_fields[] = "bdate = '$bdate'";
                        }
                        if ($age != '' && $age != $row['age']) {
                            $update_fields[] = "age = '$age'";
                        }
                        if ($gender != '' && $gender !== $row['gender']) {
                            $update_fields[] = "gender = '$gender'";
                        }
                        if ($glevel != '' && $glevel != $row['glevel']) {
                            $update_fields[] = "glevel = '$glevel'";
                        }
                        if ($moname != '' && $moname !== $row['moname']) {
                            $update_fields[] = "moname = '$moname'";
                        }
                        if ($mooccupation != '' && $mooccupation !== $row['mooccupation']) {
                            $update_fields[] = "mooccupation = '$mooccupation'";
                        }
                        if ($mophone != '' && $mophone !== $row['mophone']) {
                            $update_fields[] = "mophone = '$mophone'";
                        }
                        if ($moaddress != '' && $moaddress !== $row['moaddress']) {
                            $update_fields[] = "moaddress = '$moaddress'";
                        }
                        if ($paname != '' && $paname !== $row['paname']) {
                            $update_fields[] = "paname = '$paname'";
                        }
                        if ($paoccupation != '' && $paoccupation !== $row['paoccupation']) {
                            $update_fields[] = "paoccupation = '$paoccupation'";
                        }
                        if ($paphone != '' && $paphone !== $row['paphone']) {
                            $update_fields[] = "paphone = '$paphone'";
                        }
                        if ($paaddress != '' && $paaddress !== $row['paaddress']) {
                            $update_fields[] = "paaddress = '$paaddress'";
                        }
                        if ($lename != '' && $lename !== $row['lename']) {
                            $update_fields[] = "lename = '$lename'";
                        }
                        if ($leoccupation != '' && $leoccupation !== $row['leoccupation']) {
                            $update_fields[] = "leoccupation = '$leoccupation'";
                        }
                        if ($lerelation != '' && $lerelation !== $row['lerelation']) {
                            $update_fields[] = "lerelation = '$lerelation'";
                        }
                        if ($lephone != '' && $lephone !== $row['lephone']) {
                            $update_fields[] = "lephone = '$lephone'";
                        }
                        if ($section7 != '' && $section7 !== $row['section7']) {
                            $update_fields[] = "section7 = '$lerelation'";
                        }
                        if ($adv7 != '' && $adv7 !== $row['adv7']) {
                            $update_fields[] = "adv7 = '$adv7'";
                        }
                        if ($section8 != '' && $section8 !== $row['section8']) {
                            $update_fields[] = "section8 = '$section8'";
                        }
                        if ($adv8 != '' && $adv8 !== $row['adv8']) {
                            $update_fields[] = "adv8 = '$adv8'";
                        }
                        if ($section9 != '' && $section9 !== $row['section9']) {
                            $update_fields[] = "section9 = '$section9'";
                        }
                        if ($adv9 != '' && $adv9 !== $row['adv9']) {
                            $update_fields[] = "adv9 = '$adv9'";
                        }
                        if ($section10 != '' && $section10 !== $row['section10']) {
                            $update_fields[] = "section10 = '$section10'";
                        }
                        if ($adv10 != '' && $adv10 !== $row['adv10']) {
                            $update_fields[] = "adv10 = '$adv10'";
                        }
                        if ($medical != '' && $medical !== $row['medical']) {
                            $update_fields[] = "medical = '$medical'";
                        }

                        // Construct the UPDATE query
                        if (!empty($update_fields)) {
                            $update_query = "UPDATE stud_info SET " . implode(', ', $update_fields) . " WHERE lrn = '$lrn'";
        
                            // Execute the query
                            if (mysqli_query($conn, $update_query)) {
                                echo '<script>alert("Data updated");</script>';
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                        } else {
                            echo "No fields to update.";
                        }
                    } else {
                        // Else lrn does not exist 
                        $insert_query = "INSERT INTO stud_info (lrn, fname, mname, lname, nickname, bdate, age, gender, glevel, moname, mooccupation, mophone, moaddress, paname, paoccupation, paphone, paaddress, lename, leoccupation, lerelation, lephone, section7, adv7, section8, adv8, section9, adv9, section10, adv10, medical) VALUES ('$lrn', '$fname', '$mname', '$lname', '$nickname', '$bdate', '$age', '$gender', '$glevel', '$moname', '$mooccupation', '$mophone', '$moaddress', '$paname', '$paoccupation', '$paphone', '$paaddress', '$lename', '$leoccupation', '$lerelation', '$lephone', '$section7', '$adv7', '$section8', '$adv8', '$section9', '$adv9', '$section10', '$adv10', '$medical')";

                        if (mysqli_query($conn, $insert_query)){
                            echo '<script>alert("New data Inserted");</script>';
                        } else {
                            echo "Error inserting records; " . mysqli_error($conn);
                        }
                    }
                
            } else {
                echo "Error fetching existing data: " . mysqli_error($conn);
            }
        } else {
            echo "LRN is not set. Form data not submitted.";
        }
    }
}

function getStudentInfo($conn) {
    if (isset($_SESSION['stud_lrn'])){
        $lrn = $_SESSION['stud_lrn'];
        $query = "SELECT * FROM stud_info WHERE lrn = '$lrn'";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
    }
    return null;
}
// GET
$studentInfo = getStudentInfo($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCAPNHS</title>

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css" />


    <style>

        .scrollspy-example {
        position: relative;
        height: 640px;/*200px*/
        overflow: auto;
        }

        .valv {
            text-align: center;
            margin-bottom: 0;
            background-color: #fff;
        }
        
        .valvname {
            text-align: center;
        }

    </style>

</head>

<body>

    <div class="d-flex" id="wrapper" >
        <!-- Sidebar -->
        <?php 
        include 'sidebard.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <!-- Navigation bar -->
            <nav class="navbar navbar-expand-lg navbar-light py-2 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-5 me-3" id="menu-toggle" style="color: white;"></i>

                    <!-- <h2 class="fs-5 m-0" ><php echo $_SESSION['page_title']; ?></h2> -->
                    <h2 class="fs-5 m-0"><span id="page-title">Student Information</span></h2>
                </div>  

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>   
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-flex">
                        <img src="../assets/img/Sarah.png" class="img-fluid rounded-circle " alt="Wild Landscape" style="width: 40px; height: 40px;"/>
                            <a class="nav-link dropdown-toggle second-text fw-bold fs-8 text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <php echo $_SESSION['stud_uname']; ?> -->
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

                <!-- CONTENT -->
            <div class="container-fluid" id="dynamic-content">
                <div class="row">
                    <form class="col-lg-12" action="" method="post">
                        <div class="col-lg-12 d-flex p-3">

                            <?php include 'indexformshow.php';?> <!-- While user didn't hit or click the Edit button, it will show as default -->
                            
                            <?php include 'indexform.php';?> <!-- If user click the Edit button, this indexform.php will be visible and the indexformshow.php will be invinsible -->
                            
                            <!-- RIGHT SIDE BUTONSS-->
                            <div class="col-lg-2 p-3 ms-2 bg-transparent">
                                <p class="fs-5 text-center">
                                    Tools
                                </p>
                                <div class="row">
                                    <div class="col-lg-12 d-block px-0 row gy-3 gx-0">

                                        <!-- After I clicked it,  indexform.php' wil be visible with faded intro and the EDIT button will transform into save button. But, while I didn't click it indexform.php will not show or it will be hidden-->
                                        <!-- <button name="edit" type="button" class="btn btn-outline-primary col-lg-12">Edit</button>  -->

                                        <!-- The Edit button with onclick event -->
                                        <button name="edit" id="editButton" type="button" class="btn btn-outline-primary col-lg-12" onclick="showEditForm()">Edit</button>
                                        <!-- The Cancel button initially hidden with display: none -->
                                        <button name="cancel" id="cancelButton" type="button" class="btn btn-outline-danger col-lg-12" style="display: none;" onclick="hideEditForm()">Cancel</button>
                                    
                                        <button name="print" type="button" class="btn btn-outline-primary col-lg-12">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>


  <!-- SCRIPT -->
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
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap-select-list@1.0.0/package.json"></script> -->

<!-- SCRIPT for autoreload -->


<!-- Behaviour of EDIT and CANCEL -->
<script>
    function showEditForm() {
        // Get the Edit button element
        const editButton = document.getElementById('editButton');

        // Get the Cancel button element
        const cancelButton = document.getElementById('cancelButton');

        // Get the indexform.php section element
        const indexForm = document.getElementById('section1');

        // Get the indexformshow.php section element
        const indexFormShow = document.getElementById('indexformshow');

        // Show indexform.php and the Cancel button
        indexForm.style.display = 'block';
        cancelButton.style.display = 'block';

        // Hide indexformshow.php and change the button text to "Cancel"
        indexFormShow.style.display = 'none';
        editButton.style.display = 'none'; // Hide the Edit button
    }

    function hideEditForm() {
        // Get the Edit button element
        const editButton = document.getElementById('editButton');

        // Get the Cancel button element
        const cancelButton = document.getElementById('cancelButton');

        // Get the indexform.php section element
        const indexForm = document.getElementById('section1');
        const indexForm2 = document.getElementById('section2');
        const indexForm3 = document.getElementById('section3');
        const indexForm4 = document.getElementById('section4');

        // Get the indexformshow.php section element
        const indexFormShow = document.getElementById('indexformshow');

        // Show indexformshow.php and the Edit button
        indexFormShow.style.display = 'block';
        editButton.style.display = 'block'; // Show the Edit button

        // Hide indexform.php and the Cancel button
        indexForm.style.display = 'none';
        indexForm2.style.display = 'none';
        indexForm3.style.display = 'none';
        indexForm4.style.display = 'none';
        cancelButton.style.display = 'none';
    }
</script>


<!-- Behavious for Section$ in indexform.php -->
<script>
    function showSection(sectionId) {
        // Hide all sections
        document.querySelectorAll('.col-lg-10').forEach((section) => {
            section.style.display = 'none';
        });

        // Show the specified section
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }
</script>

</script>

</body>

</html>