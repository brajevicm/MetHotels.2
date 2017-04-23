<?php
require_once 'functions.php';
$error = '';
if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if (!empty($firstname) && !empty($lastname) && !empty($mail) && !empty($password)) {
        registerUser($firstname, $lastname, $mail, $password);
        header('login.php');
    } else {
        $error .= 'All fields required.';
        $_SESSION['error'] = $error;
    }
}
?>