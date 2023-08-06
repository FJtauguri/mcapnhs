<?php
session_start();
if (isset($_POST['lrn']) && isset($_SESSION['stud_lrn'])) {

    $lrn = $_POST['lrn'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name']; 
    $email = $_POST['email'];

    include 'php_conn/conn.php';

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
