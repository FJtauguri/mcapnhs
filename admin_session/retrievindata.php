<?php
// Retrieving data from the database
if (isset($_SESSION['adm_email'])) {
    $adm_email = $_SESSION['adm_email'];
    $query = "SELECT * FROM usr_adm WHERE adm_email = '$adm_email'";
    $result = mysqli_query($conn, $query);
    // echo "Session adm_email: " . $_SESSION['adm_email'];

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $adm_username = $row['adm_username'];
        $adm_email = $row['adm_email'];
        $img = $row['adm_img'];
    } else {
        echo "Error: Admin data not found.";
    }
}

$defaultImgPath = "../assets/img/Sarah.png";
$imgSrc = !empty($img) ? $img : $defaultImgPath;

?>