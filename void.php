<?php
// session_start();

function isUserLoggedIn() {
    return isset($_SESSION['adm_email']); 
}
function isUserLoggedInAdm(){
    return isset($_SESSION['stud_lrn']);
    // return isset($_SESSION['stud_email']);
}

if (!isUserLoggedIn() && !isUserLoggedInAdm()) {
    header("Location: ../index.php");
    exit();
}
?>
