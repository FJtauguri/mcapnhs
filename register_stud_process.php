<?php
// if (isset($_POST['add'])) {
//     include 'php_conn/conn.php';
//     $username = $_POST['username'];
//     $lrn = $_POST['lrn'];
//     $email = $_POST['email'];
//     $password = $_POST['pwd'];

//     $sql = "INSERT INTO usr_stud (stud_uname, stud_lrn, stud_email, stud_pwd) 
//             VALUES ('$username', '$lrn', '$email', '$password')";

//     if (mysqli_query($conn, $sql)) {
//         header("Location: index.php");
//         exit();
//     } else {
//         $errors[] = "Error occurred during registration: " . mysqli_error($conn);
//     }
//     mysqli_close($conn);
// }

if (isset($_POST['add'])) {
    include 'php_conn/conn.php';

    $username = $_POST['username'];
    $lrn = $_POST['lrn'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    // $passwordre = $_POST['pwdre'];

    // if($password !== $passwordre) {
    //     $errors[] = "Password do not match. Please, try again. ";
    // } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usr_stud (stud_lrn, stud_uname, stud_email, stud_pwd) 
        VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $lrn, $username, $email, $hashedPassword);

        // $sql = "INSERT INTO usr_stud (stud_uname, stud_lrn, stud_email, stud_pwd) 
        //         VALUES ('$username', '$lrn', '$email', '$password')";

        if ($stmt->execute()){
            // echo ("Subm");
            header("Location: index.php");
            exit();
        } else {
            $errors[] = "Error occued during registration: " . $stmt->error;
            echo implode("<br>", $errors);
        }

        $stmt->close();
        $conn->close();
    // }
    // if (mysqli_query($conn, $sql)) {
    //     header("Location: index.php");
    //     exit();
    // } else {
    //     $errors[] = "Error occurred during registration: " . mysqli_error($conn);
    // }
    // mysqli_close($conn);
}
?>
