<?php

    if (isset($_POST['admadd'])) {
        include 'php_conn/conn.php';

        $username = $_POST['usernamefrm'];
        $email = $_POST['emailfrm'];
        $password = $_POST['passwordfrm'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usr_adm (adm_username, adm_email, adm_pwd) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            $errors[] = "Error occurred during registration: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>
