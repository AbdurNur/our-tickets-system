<?php session_start();
unset( $_SESSION['login_status']);
    $message    =   "log out was successfull";

    $_SESSION['success']            =   'success';
    $_SESSION['message']    =   $message;

header("Location:index.php");
exit;





?>