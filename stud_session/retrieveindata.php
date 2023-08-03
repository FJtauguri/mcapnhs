<?php
// Retrieving data from the database
if (isset($_SESSION['stud_lrn'])) {
    $stud_lrn = $_SESSION['stud_lrn'];
    $query = "SELECT * FROM usr_stud WHERE stud_lrn = '$stud_lrn'";
    $result = mysqli_query($conn, $query);
    // echo "Session adm_email: " . $_SESSION['adm_email'];

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stud_lrn = $row['stud_lrn'];
        $stud_uname = $row['stud_uname'];
        $stud_email = $row['stud_email'];
        $img = $row['stud_img'];
    } else {
        echo "Error: User data not found.";
    }
}

$defaultImgPath = "../assets/img/Sarah.png";
// Check if the $img variable is empty, then use the default image path
$imgSrc = !empty($img) ? $img : $defaultImgPath;

?>