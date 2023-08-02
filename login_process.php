<?php
session_start();
if (isset($_POST['login'])) {
    include 'php_conn/conn.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    // $_SESSION['login_failed'] = true;

    $sql = "SELECT * FROM usr_adm WHERE adm_email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['adm_pwd'])) {
            mysqli_free_result($result);
            mysqli_close($conn);

            $_SESSION['adm_email'] = $email;
            header("Location: admin_session/index.php");
            
            exit();
        }
    }

    $sql = "SELECT * FROM usr_stud WHERE stud_email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['stud_pwd'])) {
            mysqli_free_result($result);
            mysqli_close($conn);

            // $_SESSION['stud_lrn'] = $row['stud_lrn'];
            // $_SESSION['stud_uname'] = $row['stud_uname'];
            // $_SESSION['stud_email'] = $email; // Using $email from the login form
            // header("Location: stud_session/index.php");
            // exit();

            header("Location: stud_session/index.php");
            $_SESSION['stud_lrn'] = $row['stud_lrn'];
            $_SESSION['stud_uname'] = $row['stud_uname'];
            $_SESSION['stud_email'] = $row['stud_email'];
            exit();
        }
    }
    $_SESSION['login_failed'] = true;
    // $errors[] = "Invalid email or password. Please try again.";
    mysqli_close($conn);
}
?>
