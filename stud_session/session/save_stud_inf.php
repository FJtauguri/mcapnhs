<?php
session_start();
if (isset($_POST['lrn']) && isset($_SESSION['stud_lrn'])) {
    // Get the form data
    $lrn = $_POST['lrn'];
    $firstName = $_POST['first_name']; // Replace 'first_name' with the actual name attribute of the first name input field
    $lastName = $_POST['last_name']; // Replace 'last_name' with the actual name attribute of the last name input field
    $email = $_POST['email'];

    // Perform database insertion
    include 'php_conn/conn.php';

    // Assuming your 'stud_info' table has columns 'lrn', 'first_name', 'last_name', and 'email'
    $sql = "INSERT INTO stud_info (lrn, first_name, last_name, email) VALUES ('$lrn', '$firstName', '$lastName', '$email')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: stud_session/index.php?success=true");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: stud_session/index.php");
}
?>
